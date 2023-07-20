<?php

namespace App\Http\Controllers;

use App\Models\Ekskul;
use App\Http\Controllers\EkskulController;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEkskulRequest;
use App\Http\Requests\UpdateEkskulRequest;

class EkskulController extends Controller
{
    public function index()
    {
        $Ekskul = Ekskul::orderBy('created_at', 'DESC')->get();
        return view('admin.ekstrakuri.list', compact('Ekskul'));
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
        Ekskul::create($request->all());

        return redirect()->route('ekstrakurikuler.index')->with('success', 'PROGRAM EKSKUL BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ekskul $Ekskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Ekskul = Ekskul::findOrFail($id);
        return view('admin.ekstrakuri.edit', compact('Ekskul'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Ekskul = Ekskul::findOrFail($id);
        $Ekskul->update($request->all());

        return redirect()->route('ekstrakurikuler.index')->with('success', 'PROGRAM EKSKUL BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Ekskul = Ekskul::findOrFail($id);
        $Ekskul->delete();

        return redirect()->route('ekstrakurikuler.index')->with('success', 'PROGRAM EKSKUL BERHASIL DIHAPUS');
    }
}
