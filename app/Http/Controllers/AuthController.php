<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('auth.login');
    }

    public function username()
    {
        return true;
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect('/')->with('success', 'Selamat Datang Kembali Author :)');
        }

        return back()->withErrors([
            'allError' => 'Username Atau Password Anda Salah!'
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->regenerateToken();
        $request->session()->invalidate();

        return redirect('/')->with('success', 'Anda Berhasil Logout');
    }
}
