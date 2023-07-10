<?php

namespace App\Http\Controllers;

use App\Models\DataMateri;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDataMateriRequest;
use App\Http\Requests\UpdateDataMateriRequest;

class DataMateriController extends Controller
{
    public function index()
    {
        $DataMateri = DataMateri::orderBy('created_at', 'DESC')->get();
        return view('guru.materi.list', compact('DataMateri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.data-guru.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        DataMateri::create($request->all());

        return redirect()->route('data-materi.index')->with('success', 'DATA MATERI BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $DataMateri = DataMateri::findOrFail($id);
        return view('admin.data-materi.detail', compact('DataMateri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $DataMateri = DataMateri::findOrFail($id);
        return view('admin.data-materi.edit', compact('DataMateri'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $DataMateri = DataMateri::findOrFail($id);
        $DataMateri->update($request->all());

        return redirect()->route('data-materi.index')->with('success', 'DATA MATERI BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $DataMateri = DataMateri::findOrFail($id);
        $DataMateri->delete();

        return redirect()->route('data-materi.index')->with('success', 'DATA MATERI BERHASIL DIHAPUS');
    }
}
