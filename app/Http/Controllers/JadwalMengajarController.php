<?php

namespace App\Http\Controllers;

use App\Models\JadwalMengajar;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJadwalMengajarRequest;
use App\Http\Requests\UpdateJadwalMengajarRequest;

class JadwalMengajarController extends Controller
{
    public function index()
    {
        $Jadwal = JadwalMengajar::orderBy('created_at', 'DESC')->get();
        return view('admin.jadwal-mengajar.list', compact('Jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.register-siswa.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        JadwalMengajar::create($request->all());

        return redirect()->route('jadwal-mengajar.index')->with('success', 'JADWAL MENGAJAR BERHASIL DITAMBAHKAN');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $Jadwal = JadwalMengajar::findOrFail($id);
        return view('admin.jadwal-mengajar.detail', compact('Jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Jadwal = JadwalMengajar::findOrFail($id);
        return view('admin.jadwal-mengajar.edit', compact('Jadwal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Jadwal = JadwalMengajar::findOrFail($id);
        $Jadwal->update($request->all());

        return redirect()->route('jadwal-mengajar.index')->with('success', 'JADWAL MENGAJAR BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Jadwal = JadwalMengajar::findOrFail($id);
        $Jadwal->delete();

        return redirect()->route('jadwal-mengajar.index')->with('success', 'JADWAL MENGAJAR BERHASIL DIHAPUS');
    }
}
