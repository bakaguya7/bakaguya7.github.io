<?php

namespace App\Http\Controllers;

use App\Models\Praktikum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StorePraktikumRequest;
use App\Http\Requests\UpdatePraktikumRequest;

class PraktikController extends Controller
{
    public function show_data()
    {
        $Praktikum = Praktikum::orderBy('id', 'desc')->first();
        $Praktikum = Praktikum::orderBy('created_at', 'DESC')->get();
        return view('programsekolah.praktikum', compact('Praktikum', 'Praktikum'));
    }
}
