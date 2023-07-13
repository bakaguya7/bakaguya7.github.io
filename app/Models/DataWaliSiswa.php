<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataWaliSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'namasiswa',
        'namaayah',
        'namaibu',
        'pekerjaanayah',
        'pekerjaanibu',
        'noteleponayah',
        'noteleponibu',
    ];
}
