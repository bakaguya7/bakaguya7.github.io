<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreEkskulRequest;
use App\Http\Requests\UpdateEkskulRequest;
use App\Http\Controllers\EkskulController;

class EkstraController extends Controller
{
    public function Ekskul()
    {
        $Ekskul = Ekskul::orderBy('id', 'desc')->get();
        $Data = Ekskul::orderBy('created_at', 'DESC')->get();
        return view('programsekolah.ekstra', [
            "title" => "Create Ekskul",
            "Ekskul" => $Ekskul,
            "Data" => $Data,
        ]);
    }
}
