<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Model\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' =>'required',
            'password' =>'required',
        ],
        [
            'email.required' =>'Email Wajib Diisi',
            'password.required' =>'Password Wajib Diisi',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, redirect ke halaman setelah login
            return redirect()->route('warga');
            // dd($credentials);
        } else {
            // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
            return redirect()->route('login')->with('error', 'Email atau password salah.');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }   
}
