<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
use App\Exports\PendaftarExport;
use Maatwebsite\Excel\Facades\Excel;

class PendaftarController extends Controller
{
    public function index()
    {
        $data = Pendaftar::all();
        return view('dashboard.pendaftar.index', compact('data'));
    }

    public function create()
    {
        return view('dashboard.pendaftar.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tim' => 'required',
            'nama_ketua' => 'required',
             'email'  => 'required|email|unique:pendaftars,email',
            'no_hp' => 'required',
            'nama_anggota_1' => 'required',
             'kartu_identitas' => 'required|file|mimes:zip,rar,7z|max:10240',
            'nama_sekolah' => 'required',
        ]);

        

        // Upload kartu identitas
        $file = $request->file('kartu_identitas');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('storage/uploads'), $fileName);

        Pendaftar::create([
            'nama_tim' => $request->nama_tim,
            'nama_ketua' => $request->nama_ketua,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'nama_anggota_1' => $request->nama_anggota_1,
            'nama_anggota_2' => $request->nama_anggota_2,
            'kartu_identitas' => $fileName,
            'nama_sekolah' => $request->nama_sekolah,
        ]);

        return redirect()->route('dashboard.pendaftar.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit(Pendaftar $pendaftar)
    {
        return view('dashboard.pendaftar.edit', compact('pendaftar'));
    }

    public function update(Request $request, $id)
    {
        $pendaftar = Pendaftar::findOrFail($id);

        $request->validate([
            'nama_tim' => 'required',
            'nama_ketua' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'nama_anggota_1' => 'required',

            'nama_sekolah' => 'required',
            'kartu_identitas' => 'file|mimes:zip,rar,7z|max:10240',
        ]);

        $data = $request->only([
            'nama_tim',
            'nama_ketua',
            'email',
            'no_hp',
            'nama_anggota_1',
            'nama_anggota_2',
            'nama_sekolah'
        ]);

        if ($request->hasFile('kartu_identitas')) {
            if ($pendaftar->kartu_identitas && file_exists(public_path('storage/uploads/' . $pendaftar->kartu_identitas))) {
                unlink(public_path('storage/uploads/' . $pendaftar->kartu_identitas));
            }

            $file = $request->file('kartu_identitas');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/uploads'), $fileName);
            $data['kartu_identitas'] = $fileName;
        }

        $pendaftar->update($data);

        return redirect()->route('dashboard.pendaftar.index')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(Pendaftar $pendaftar)
    {
        if ($pendaftar->kartu_identitas && file_exists(public_path('/storage/uploads/' . $pendaftar->kartu_identitas))) {
            unlink(public_path('storage/uploads/' . $pendaftar->kartu_identitas));
        }

        $pendaftar->delete();

        return redirect()->route('dashboard.pendaftar.index')->with('success', 'Data berhasil dihapus');
    }

    public function export()
{
    return Excel::download(new PendaftarExport, 'data_pendaftar.xlsx');
}
}
