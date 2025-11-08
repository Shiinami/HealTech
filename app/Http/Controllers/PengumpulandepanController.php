<?php

namespace App\Http\Controllers;
use App\Models\Pendaftar;
use App\Models\Pengumpulan;
use Illuminate\Http\Request;

class PengumpulandepanController extends Controller
{
    public function store(Request $request)
{
    $messages = [
        'nama_tim.required' => 'Nama tim wajib diisi.',
        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'pengumpulan.required' => 'File tugas wajib diunggah.',
        'pengumpulan.file' => 'File harus berupa file.',
        'pengumpulan.mimes' => 'Format file harus .zip,.rar,.7z',
        'pengumpulan.max' => 'Ukuran file maksimal 100MB.',
    ];

    $request->validate([
        'nama_tim' => 'required',
        'email' => 'required|email',
        'pengumpulan' => 'required|mimes:zip,rar,7z|max:102400 ',
    ], $messages);

    // Cek apakah tim terdaftar
    $terdaftar = \App\Models\Pendaftar::where('nama_tim', $request->nama_tim)
        ->where('email', $request->email)
        ->exists();

    if (!$terdaftar) {
        return back()->withErrors(['error' => 'Tim belum terdaftar.']);
    }

    // Cek apakah sudah pernah mengumpulkan
    if (\App\Models\Pengumpulan::where('email', $request->email)->exists()) {
        return back()->withErrors(['error' => 'Tugas sudah dikumpulkan sebelumnya.']);
    }

    // Upload file
    $file = $request->file('pengumpulan');
    $fileName = 'tugas_' . time() . '_' . str_replace(' ', '_', strtolower($request->nama_tim)) . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('storage/uploads/tugas'), $fileName);

    // Simpan ke database
    \App\Models\Pengumpulan::create([
        'nama_tim' => $request->nama_tim,
        'email' => $request->email,
        'pengumpulan' => $fileName,
    ]);

    return view('content.konfirmasipengumpulan')->with('success', 'Tugas berhasil dikumpulkan');
}
}
