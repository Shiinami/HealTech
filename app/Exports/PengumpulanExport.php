<?php

namespace App\Exports;

use App\Models\Pengumpulan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PengumpulanExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Pengumpulan::select('nama_tim', 'email', 'pengumpulan', 'created_at')->get();
    }

    public function headings(): array
    {
        return ['Nama Tim', 'Email', 'File Tugas', 'Waktu Pengumpulan'];
    }
}

