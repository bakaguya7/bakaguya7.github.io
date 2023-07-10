<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Http\Requests\StoreMateriRequest;
use App\Http\Requests\UpdateMateriRequest;

class MateriController extends Controller
{
    public function index()
    {
        $DataMateri = Materi::orderBy('created_at', 'DESC')->get();
        return view('guru.materi.list', compact('DataMateri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.materi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Materi::create($request->all());

        return redirect()->route('data-materi.index')->with('success', 'DATA MATERI BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $DataMateri = Materi::findOrFail($id);
        return view('guru.materi.detail', compact('DataMateri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $DataMateri = Materi::findOrFail($id);
        return view('guru.materi.edit', compact('DataMateri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $DataMateri = Materi::findOrFail($id);
        $DataMateri->update($request->all());

        return redirect()->route('data-materi.index')->with('success', 'DATA MATERI BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $DataMateri = Materi::findOrFail($id);
        $DataMateri->delete();

        return redirect()->route('data-materi.index')->with('success', 'DATA MATERI BERHASIL DIHAPUS');
    }
}
