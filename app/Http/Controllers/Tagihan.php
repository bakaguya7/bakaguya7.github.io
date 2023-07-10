<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TagihanSiswa;
use App\Http\Requests\StoreTagihanSiswaRequest;
use App\Http\Requests\UpdateTagihanSiswaRequest;

class Tagihan extends Controller
{
    public function index()
    {
        $Tagihan = TagihanSiswa::where('namasiswa', 'osama')->get();
        return view('siswa.tagihan.list', compact('Tagihan'));
    }
}
