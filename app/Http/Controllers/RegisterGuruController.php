<?php

namespace App\Http\Controllers;

use App\Models\RegisterGuru;
use App\Models\DataGuru;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDataGuruRequest;
use App\Http\Requests\UpdateDataGuruRequest;
use App\Http\Requests\StoreRegisterGuruRequest;
use App\Http\Requests\UpdateRegisterGuruRequest;

class RegisterGuruController extends Controller
{
    public function index()
    {
        $RegisGuru = RegisterGuru::orderBy('created_at', 'DESC')->get();
        return view('admin.register-guru.list', compact('RegisGuru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $DataGuru = DataGuru::orderBy('created_at', 'DESC')->get();
        return view('admin.register-guru.create', compact('DataGuru'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        RegisterGuru::create($request->all());

        return redirect()->route('register-guru.index')->with('success', 'AKUN GURU BERHASIL DITAMBAHKAN');
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
        $RegisGuru = RegisterGuru::findOrFail($id);
        return view('admin.register-guru.edit', compact('RegisGuru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $RegisGuru = RegisterGuru::findOrFail($id);
        $RegisGuru->update($request->all());

        return redirect()->route('register-guru.index')->with('success', 'AKUN GURU BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $RegisGuru = RegisterGuru::findOrFail($id);
        $RegisGuru->delete();

        return redirect()->route('register-guru.index')->with('success', 'AKUN GURU BERHASIL DIHAPUS');
    }
}
