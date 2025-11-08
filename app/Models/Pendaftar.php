<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pendaftar extends Model
{
    use HasFactory;

    protected $table = 'pendaftars';

    protected $fillable = [
        'nama_tim',
        'nama_ketua',
        'email',
        'no_hp',
        'nama_anggota_1',
        'nama_anggota_2',
        'kartu_identitas',
        'nama_sekolah'
    ];

}
