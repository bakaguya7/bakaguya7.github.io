<?php

namespace App\Http\Controllers;

use App\Models\RegisterSiswa;
use App\Models\DataSiswa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreDataSiswaRequest;
use App\Http\Requests\UpdateDataSiswaRequest;
use App\Http\Requests\StoreRegisterSiswaRequest;
use App\Http\Requests\UpdateRegisterSiswaRequest;

class RegisterSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $RegisSiswa = RegisterSiswa::orderBy('created_at', 'DESC')->get();
        // $RegisSiswa = RegisterSiswa::orderBy('created_at', 'DESC')->get();
        return view('admin.register-siswa.list', compact('RegisSiswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $DataSiswa = DataSiswa::orderBy('created_at', 'DESC')->get();
        return view('admin.register-siswa.create', compact('DataSiswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new RegisterSiswa();

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        // dd($request->all());
        // RegisterSiswa::create($request->all());

        return redirect()->route('register-siswa.index')->with('success', 'AKUN SISWA BERHASIL DITAMBAHKAN');
    }

    // public function login(){
    //     return view('siswa.login');
    // }

    // public function loginpost(Request $request){
        
    //     dd($request->all());
    //     $credetials = [
    //         'email' => $request->email,
    //         'password' => $request->password
    //     ];

    //     if(Auth::attempt($credetials)){
    //         return redirect('/siswa')->with('success', 'Login successfully');
    //     }

    //     return back()->with('error', 'email or password incorrect');
    // }

    // public function logout(){
    //     Auth::logout();

    //     return redirect()->route('login');
    // }

    /**
     * Display the specified resource.
     */
    public function show(RegisterSiswa $registerSiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $RegisSiswa = RegisterSiswa::findOrFail($id);
        return view('admin.register-siswa.edit', compact('RegisSiswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $RegisSiswa = RegisterSiswa::findOrFail($id);
        $RegisSiswa->update($request->all());

        return redirect()->route('register-siswa.index')->with('success', 'AKUN SISWA BERHASIL DIPERBAHARUI');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $RegisSiswa = RegisterSiswa::findOrFail($id);
        $RegisSiswa->delete();

        return redirect()->route('register-siswa.index')->with('success', 'AKUN SISWA BERHASIL DIHAPUS');
    }
}
