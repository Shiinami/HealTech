<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengumpulan extends Model
{
    protected $fillable = [
        'nama_tim',
        'email',
        'pengumpulan',
    ];
}
