<?php

namespace App\Http\Controllers;

use App\Models\DataWaliSiswa;
use App\Models\DataSiswa;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDataSiswaRequest;
use App\Http\Requests\UpdateDataSiswaRequest;
use App\Http\Requests\StoreDataWaliSiswaRequest;
use App\Http\Requests\UpdateDataWaliSiswaRequest;

class DataWaliSiswaController extends Controller
{
    public function index()
    {
        $WaliSiswa = DataWaliSiswa::orderBy('created_at', 'DESC')->get();
        return view('admin.wali-siswa.list', compact('WaliSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $DataSiswa = DataSiswa::orderBy('created_at', 'DESC')->get();
        return view('admin.wali-siswa.create', compact('DataSiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        DataWaliSiswa::create($request->all());

        return redirect()->route('data-wali-siswa.index')->with('success', 'DATA WALI SISWA BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $WaliSiswa = DataWaliSiswa::findOrFail($id);
        return view('admin.wali-siswa.detail', compact('WaliSiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $WaliSiswa = DataWaliSiswa::findOrFail($id);
        return view('admin.wali-siswa.edit', compact('WaliSiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $WaliSiswa = DataWaliSiswa::findOrFail($id);
        $WaliSiswa->update($request->all());

        return redirect()->route('data-wali-siswa.index')->with('success', 'DATA WALI SISWA BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $WaliSiswa = DataWaliSiswa::findOrFail($id);
        $WaliSiswa->delete();

        return redirect()->route('data-wali-siswa.index')->with('success', 'DATA WALI SISWA BERHASIL DIHAPUS');
    }
}
