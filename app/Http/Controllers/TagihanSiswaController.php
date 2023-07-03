<?php

namespace App\Http\Controllers;

use App\Models\TagihanSiswa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTagihanSiswaRequest;
use App\Http\Requests\UpdateTagihanSiswaRequest;

class TagihanSiswaController extends Controller
{
    public function index()
    {
        $Tagihan = TagihanSiswa::orderBy('created_at', 'DESC')->get();
        return view('admin.tagihan-siswa.list', compact('Tagihan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.register-siswa.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        TagihanSiswa::create($request->all());

        return redirect()->route('tagihan-siswa.index')->with('success', 'TAGIHAN SISWA BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $Tagihan = TagihanSiswa::findOrFail($id);
        return view('admin.tagihan-siswa.detail', compact('TagihanSiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Tagihan = TagihanSiswa::findOrFail($id);
        return view('admin.tagihan-siswa.edit', compact('Tagihan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Tagihan = TagihanSiswa::findOrFail($id);
        $Tagihan->update($request->all());

        return redirect()->route('tagihan-siswa.index')->with('success', 'TAGIHAN SISWA BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Tagihan = TagihanSiswa::findOrFail($id);
        $Tagihan->delete();

        return redirect()->route('tagihan-siswa.index')->with('success', 'TAGIHAN SISWA BERHASIL DIHAPUS');
    }
}
