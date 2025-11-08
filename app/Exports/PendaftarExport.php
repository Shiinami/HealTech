<?php

namespace App\Exports;

use App\Models\Pendaftar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PendaftarExport implements FromCollection, WithHeadings
{
    /**
    * Ambil semua data dari tabel pendaftar
    */
    public function collection()
    {
        return Pendaftar::select(
            'nama_tim',
            'nama_ketua',
            'email',
            'no_hp',
            'nama_anggota_1',
            'nama_anggota_2',
            'kartu_identitas',
            'nama_sekolah'
        )->get();
    }

    /**
    * Judul kolom di Excel
    */
    public function headings(): array
    {
        return [
            'Nama Tim',
            'Ketua',
            'Email',
            'No HP',
            'Anggota 1',
            'Anggota 2',
            'Kartu Identitas',
            'Sekolah/Kampus'
        ];
    }
}
