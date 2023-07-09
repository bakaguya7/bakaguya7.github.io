<?php

namespace App\Http\Controllers;

use App\Models\GajiGuru;
use App\Models\DataGuru;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDataGuruRequest;
use App\Http\Requests\UpdateDataGuruRequest;
use App\Http\Requests\StoreGajiGuruRequest;
use App\Http\Requests\UpdateGajiGuruRequest;

class GajiGuruController extends Controller
{
    public function index()
    {
        $GajiGuru = GajiGuru::orderBy('created_at', 'DESC')->get();
        return view('admin.gaji-guru.list', compact('GajiGuru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $DataGuru = DataGuru::orderBy('created_at', 'DESC')->get();
        return view('admin.gaji-guru.create', compact('DataGuru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        GajiGuru::create($request->all());

        return redirect()->route('gaji-guru.index')->with('success', 'GAJI GURU BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $GajiGuru = GajiGuru::findOrFail($id);
        return view('admin.gaji-guru.detail', compact('GajiGuru'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $GajiGuru = GajiGuru::findOrFail($id);
        return view('admin.gaji-guru.edit', compact('GajiGuru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $GajiGuru = GajiGuru::findOrFail($id);
        $GajiGuru->update($request->all());

        return redirect()->route('gaji-guru.index')->with('success', 'GAJI GURU BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $GajiGuru = GajiGuru::findOrFail($id);
        $GajiGuru->delete();

        return redirect()->route('gaji-guru.index')->with('success', 'GAJI GURU BERHASIL DIHAPUS');
    }
}
