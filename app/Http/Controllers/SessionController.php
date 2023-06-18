<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    function index(){
        return view("login/loginsiswa");
    }

    public function login(Request $request)
    {
        $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            //     return redirect()->intended('example');
            // }

            // return back()->withErrors([
            //     'email' => 'The provided credentials do not match our records.',
            // ]);

        // $request->validate([
        //     'email'=>'required',
        //     'password'=>'required'
        // ],[
        //     'email.required' => 'Email Wajib diisi',
        //     'password.required' => 'Password wajib diisi',
        // ]);

        
        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){
            // sukses
            return 'sukses';
        } else {
            // gagal
            return 'gagal';
        }

        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
 
        //     return redirect()->intended('dashboard');
        // }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
        
    }
}
