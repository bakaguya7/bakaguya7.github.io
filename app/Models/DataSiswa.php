<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nis',
        'nama',
        'tgllahir',
        'kelas',
        'notelp',
        'asalsekolah',
    ];
}
