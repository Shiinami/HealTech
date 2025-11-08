<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class MendaftarController extends Controller
{
     public function store(Request $request)
     {
         $messages = [
         'nama_tim.required' => 'Nama tim wajib diisi.',
         'nama_ketua.required' => 'Nama ketua wajib diisi.',
         'email.required' => 'Email wajib diisi.',
         'email.email' => 'Format email tidak valid.',
         'email.unique' => 'Email sudah pernah didaftarkan.',
         'no_hp.required' => 'Nomor HP wajib diisi.',
         'nama_anggota_1.required' => 'Nama anggota 1 wajib diisi.',
         'kartu_identitas.required' => 'File kartu identitas wajib diunggah.',
         'kartu_identitas.file' => 'Kartu identitas harus berupa file.',
         'kartu_identitas.mimes' => 'Format file kartu identitas harus zip, rar, atau 7z.',
         'kartu_identitas.max' => 'Ukuran file kartu identitas maksimal 10MB.',
         'nama_sekolah.required' => 'Nama sekolah wajib diisi.',        
     ];
    $request->validate([
            'nama_tim' => 'required',
            'nama_ketua' => 'required',
            'email'  => 'required|email|unique:pendaftars,email',
            'no_hp' => 'required',
            'nama_anggota_1' => 'required',
             'kartu_identitas' => 'required|file|mimes:zip,rar,7z|max:10240',
            'nama_sekolah' => 'required',
        ],$messages);


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
return view('content.konfirmasi')->with('success', 'Data berhasil disimpan');

}
}