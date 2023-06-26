<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterGuru extends Model
{
    use HasFactory;

    protected $fillable = [
        'nig',
        'nama',
        'email',
        'password',
    ];
}
