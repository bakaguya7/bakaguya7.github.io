<?php

namespace App\Http\Controllers;

use App\Models\Lom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreLomRequest;
use App\Http\Requests\UpdateLomRequest;

class PraktikController extends Controller
{
    public function lomba()
    {
        $Lomba = Lomba::orderBy('id', 'desc')->get();
        $Data = Lomba::orderBy('created_at', 'DESC')->get();
        return view('programsekolah.lomba', [
            "title" => "Create Register Siswa",
            "Praktikum" => $Lomba,
            "Data" => $Data,
        ]);
    
    }
}