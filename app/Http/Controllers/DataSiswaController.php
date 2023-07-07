<?php

namespace App\Http\Controllers;

use App\Models\DataSiswa;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDataSiswaRequest;
use App\Http\Requests\UpdateDataSiswaRequest;

class DataSiswaController extends Controller
{
    public function index()
    {
        $DataSiswa = DataSiswa::orderBy('created_at', 'DESC')->get();
        return view('admin.data-siswa.list', compact('DataSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.data-siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        DataSiswa::create($request->all());

        return redirect()->route('data-siswa.index')->with('success', 'DATA SISWA BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $DataSiswa = DataSiswa::findOrFail($id);
        return view('admin.data-siswa.detail', compact('DataSiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $DataSiswa = DataSiswa::findOrFail($id);
        return view('admin.data-siswa.edit', compact('DataSiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $DataSiswa = DataSiswa::findOrFail($id);
        $DataSiswa->update($request->all());

        return redirect()->route('data-siswa.index')->with('success', 'DATA SISWA BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $DataSiswa = DataSiswa::findOrFail($id);
        $DataSiswa->delete();

        return redirect()->route('data-siswa.index')->with('success', 'DATA SISWA BERHASIL DIHAPUS');
    }
}
