<?php

namespace App\Http\Controllers;

use App\Models\DataGuru;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDataGuruRequest;
use App\Http\Requests\UpdateDataGuruRequest;

class DataGuruController extends Controller
{
    public function index()
    {
        $DataGuru = DataGuru::orderBy('created_at', 'DESC')->get();
        return view('admin.data-guru.list', compact('DataGuru'));
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
        DataGuru::create($request->all());

        return redirect()->route('data-guru.index')->with('success', 'DATA GURU BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(RegisterGuru $registerGuru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $DataGuru = DataGuru::findOrFail($id);
        return view('admin.data-guru.edit', compact('DataGuru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $DataGuru = DataGuru::findOrFail($id);
        $DataGuru->update($request->all());

        return redirect()->route('data-guru.index')->with('success', 'DATA GURU BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $DataGuru = DataGuru::findOrFail($id);
        $DataGuru->delete();

        return redirect()->route('data-guru.index')->with('success', 'DATA GURU BERHASIL DIHAPUS');
    }
}
