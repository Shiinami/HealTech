<?php

namespace App\Http\Controllers;
use App\Models\Pendaftar;
use App\Models\Pengumpulan;
use Illuminate\Http\Request;
use App\Exports\PengumpulanExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class PengumpulanController extends Controller
{

    public function index()
{
    $data = Pengumpulan::all();
    return view('dashboard.pengumpulan.index', compact('data'));
}

    public function create()
    {

        return view('dashboard.pengumpulan.create'); // buat view-nya nanti
    }

public function store(Request $request)
{
    $request->validate([
        'nama_tim' => 'required|string',
        'email' => 'required|email',
        'pengumpulan' => 'required|mimes:zip,rar,7z|max:102400 ',
    ]);

    // Validasi: hanya tim terdaftar yang boleh upload
    $terdaftar = Pendaftar::where('nama_tim', $request->nama_tim)
        ->where('email', $request->email)
        ->exists();

    if (!$terdaftar) {
        return back()->withErrors(['error' => 'Tim belum terdaftar.']);
    }

    // Cek apakah sudah pernah mengumpulkan
    if (Pengumpulan::where('email', $request->email)->exists()) {
        return back()->withErrors(['error' => 'Tugas sudah dikumpulkan sebelumnya.']);
    }

    // Simpan file ke storage/app/public/uploads/
    $file = $request->file('pengumpulan');
    $fileExt = $file->getClientOriginalExtension();

    // ⬇️ Nama file dimulai dengan 'tugas'
    $fileName = 'tugas_' . time() . '_' . str_replace(' ', '_', strtolower($request->nama_tim)) . '.' . $fileExt;

    $file->storeAs('uploads', $fileName, 'public');

    // Simpan ke database
    Pengumpulan::create([
        'nama_tim' => $request->nama_tim,
        'email' => $request->email,
        'pengumpulan' => $fileName,
    ]);

    return redirect()->route('dashboard.pengumpulan.index')->with('success', 'Tugas berhasil dikumpulkan!');
}



public function edit($id)
{
    $pengumpulan = Pengumpulan::findOrFail($id);
    return view('dashboard.pengumpulan.edit', compact('pengumpulan'));
}

public function update(Request $request, $id)
{
    $pengumpulan = Pengumpulan::findOrFail($id);

    $request->validate([
        'nama_tim' => 'required|string',
        'email' => 'required|email',
        'pengumpulan' => 'nullable|mimes:zip,rar,7z|max:102400',
    ]);

    $data = [
        'nama_tim' => $request->nama_tim,
        'email' => $request->email,
    ];

    if ($request->hasFile('pengumpulan')) {
        // Hapus file lama
        $oldPath = 'uploads/' . $pengumpulan->pengumpulan;
        if (Storage::disk('public')->exists($oldPath)) {
            Storage::disk('public')->delete($oldPath);
        }

        // Simpan file baru
        $file = $request->file('pengumpulan');
        $fileExt = $file->getClientOriginalExtension();
        $fileName = 'tugas_' . time() . '_' . str_replace(' ', '_', strtolower($request->nama_tim)) . '.' . $fileExt;
        $file->storeAs('uploads', $fileName, 'public');
        $data['pengumpulan'] = $fileName;
    }

    $pengumpulan->update($data);

    return redirect()->route('dashboard.pengumpulan.index')->with('success', 'Data berhasil diperbarui.');
}

public function destroy($id)
{
    $pengumpulan = Pengumpulan::findOrFail($id);

    // Hapus file fisik jika ada
    $filePath = 'uploads/' . $pengumpulan->pengumpulan;
    if (Storage::disk('public')->exists($filePath)) {
        Storage::disk('public')->delete($filePath);
    }

    $pengumpulan->delete();

    return redirect()->route('dashboard.pengumpulan.index')->with('success', 'Data berhasil dihapus.');
}

public function export()
{
    return Excel::download(new PengumpulanExport, 'pengumpulan.xlsx');
}

}
