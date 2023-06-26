<?php

namespace App\Http\Controllers;

use App\Models\ProgramSekolah;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProgramSekolahRequest;
use App\Http\Requests\UpdateProgramSekolahRequest;

class ProgramSekolahController extends Controller
{
    public function index()
    {
        $ProgramSekolah = ProgramSekolah::orderBy('created_at', 'DESC')->get();
        return view('admin.program-sekolah.list', compact('ProgramSekolah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.program-eskul.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        ProgramSekolah::create($request->all());

        return redirect()->route('program-sekolah.index')->with('success', 'PROGRAM SEKOLAH BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(ProgramSekolah $ProgramSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ProgramSekolah = ProgramSekolah::findOrFail($id);
        return view('admin.program-sekolah.edit', compact('ProgramSekolah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ProgramSekolah = ProgramSekolah::findOrFail($id);
        $ProgramSekolah->update($request->all());

        return redirect()->route('program-sekolah.index')->with('success', 'PROGRAM SEKOLAH BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ProgramSekolah = ProgramSekolah::findOrFail($id);
        $ProgramSekolah->delete();

        return redirect()->route('program-sekolah.index')->with('success', 'PROGRAM SEKOLAH BERHASIL DIHAPUS');
    }
}
