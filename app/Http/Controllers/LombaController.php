<?php

namespace App\Http\Controllers;

use App\Models\Lomba;

use Illuminate\Http\Request;
use App\Http\Requests\StoreLombaRequest;
use App\Http\Requests\UpdateLombaRequest;

class LombaController extends Controller
{
    public function index()
    {
        $Lomba = Lomba::orderBy('created_at', 'DESC')->get();
        return view('admin.Lomba.list', compact('Lomba'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.program-lomba.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // return $request->file('image')->store('post-image');
        // $validatedData = $request->validate(
        //     [
        //         'judul' => 'required',
        //         'desrkipsi' => 'required'
        //     ]
        // );

        // try {
        //     $data = [
        //         'judul' => $validated['judul'],
        //         'deskripsi' => $validated['deskripsi']
        //     ];

        //     if ($request->hasFile('inputImage') && $request->file('inputImage')->isValid()){
        //         $image = $request->file('inputImage');
        //         $extension = $image->extension();
        //         $newFileName = Str::of()
        //     }        }

        // if ($request->file('gambar')) {
        //     $validatedData['gambar'] = $request->file('image')->store('post-images');
        // }
        // dd($request->all());
        // Praktikum::create($validatedData);
        Praktikum::create($request->all());

        return redirect()->route('lomba.index')->with('success', 'PROGRAM LOMBA BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lomba $Lomba)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Lomba = Lomba::findOrFail($id);
        return view('admin.Lomba.edit', compact('Lomba'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Lomba = Lomba::findOrFail($id);
        $Lomba->update($request->all());

        return redirect()->route('lomba.index')->with('success', 'PROGRAM LOMBA BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Lomba = Lomba::findOrFail($id);
        $Lomba->delete();

        return redirect()->route('lomba.index')->with('success', 'PROGRAM LOMBA BERHASIL DIHAPUS');
    }
}
