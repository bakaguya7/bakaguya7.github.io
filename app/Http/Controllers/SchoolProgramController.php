<?php

namespace App\Http\Controllers;

use App\Models\SchoolProgram;

use Illuminate\Http\Request;
use App\Http\Requests\StoreSchoolProgramRequest;
use App\Http\Requests\UpdateSchoolProgramRequest;

class SchoolProgramController extends Controller
{
    public function index()
    {
        $SchoolProgram = SchoolProgram::orderBy('created_at', 'DESC')->get();
        return view('admin.school-program.list', compact('SchoolProgram'));
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
        SchoolProgram::create($request->all());

        return redirect()->route('school-program.index')->with('success', 'PROGRAM SEKOLAH BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(SchoolProgram $SchoolProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $SchoolProgram = SchoolProgram::findOrFail($id);
        return view('admin.school-program.edit', compact('SchoolProgram'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $SchoolProgram = SchoolProgram::findOrFail($id);
        $SchoolProgram->update($request->all());

        return redirect()->route('school-program.index')->with('success', 'PROGRAM SEKOLAH BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $SchoolProgram = SchoolProgram::findOrFail($id);
        $SchoolProgram->delete();

        return redirect()->route('school-program.index')->with('success', 'PROGRAM SEKOLAH BERHASIL DIHAPUS');
    }
}
