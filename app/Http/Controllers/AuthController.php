<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('login');
    }

    public function prosesLogin(Request $request)
    {
        // validasi
        $dataLogin = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required',
        ]);

        // percobaan login
        if (Auth::attempt($dataLogin)) {
            // pembaharui session
            $request->session()->regenerate();

            // redirect ke url tujuan, contoh /admin/dasbor
            return redirect()->intended('admin/dasbor');
        }

        // gagal login, redirect kembali
        return back()->withErrors([
            'email' => 'Email atau kata sandi salah',
        ])->onlyInput('email');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login'); 
    }
}