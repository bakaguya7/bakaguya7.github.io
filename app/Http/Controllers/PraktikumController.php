<?php

namespace App\Http\Controllers;

use App\Models\Praktikum;

use Illuminate\Http\Request;
use App\Http\Requests\StorePraktikumRequest;
use App\Http\Requests\UpdatePraktikumRequest;

class PraktikumController extends Controller
{
    public function index()
    {
        $Praktikum = Praktikum::orderBy('created_at', 'DESC')->get();
        return view('admin.praktikum.list', compact('Praktikum'));
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
        //         'judul' => 'required|max:255',
        //         'gambar' => '',
        //         'desrkipsi' => 'required'
        //     ]
        // );

        // if ($request->file('gambar')) {
        //     $validatedData['gambar'] = $request->file('image')->store('post-images');
        // }
        // dd($request->all());
        // Praktikum::create($validatedData);
        Praktikum::create($request->all());

        return redirect()->route('praktikum.index')->with('success', 'PROGRAM PRAKTIKUM BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(Praktikum $Praktikum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Praktikum = Praktikumm::findOrFail($id);
        return view('admin.praktikum.edit', compact('Praktikum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Praktikum = Praktikum::findOrFail($id);
        $Praktikum->update($request->all());

        return redirect()->route('praktikum.index')->with('success', 'PROGRAM PRAKTIKUM BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Praktikum = Praktikum::findOrFail($id);
        $Praktikum->delete();

        return redirect()->route('praktikum.index')->with('success', 'PROGRAM PRAKTIKUM BERHASIL DIHAPUS');
    }
}
