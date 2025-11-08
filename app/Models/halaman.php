<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class halaman extends Model
{
    use HasFactory;
    protected $table = 'halaman';
    protected $fillable = ['judul', 'isi'];
}
