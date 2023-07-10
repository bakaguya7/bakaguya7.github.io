<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreDataSiswaRequest;
use App\Http\Requests\UpdateDataSiswaRequest;
use App\Models\DataGuru;

use App\Http\Requests\StoreDataGuruRequest;
use App\Http\Requests\UpdateDataGuruRequest;
class ProfilController extends Controller
{
    public function siswa()
    {
        $DataSiswa = DataSiswa::orderBy('id', 'desc')->first();
        $Data = DataSiswa::orderBy('created_at', 'DESC')->get();
        return view('siswa.profil.list', compact('DataSiswa', 'Data'));
    }

    public function guru()
    {
        $DataGuru = DataGuru::orderBy('id', 'desc')->first();
        $Data = DataGuru::orderBy('created_at', 'DESC')->get();
        return view('guru.profil.list', compact('DataGuru', 'Data'));
    }
}
