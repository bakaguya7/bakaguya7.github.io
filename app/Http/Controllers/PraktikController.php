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
    public function praktikum()
    {
        $Praktikum = Praktikum::orderBy('id', 'desc')->get();
        $Data = Praktikum::orderBy('created_at', 'DESC')->get();
        return view('programsekolah.praktikum', [
            "title" => "Create Register Siswa",
            "Praktikum" => $Praktikum,
            "Data" => $Data,
        ]);
    }
}
