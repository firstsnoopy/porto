<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
    }

    public function actionLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }
        return redirect()->back()->withErrors('Login Gagal. Mohon periksa kembali email dan password anda!');
    }

    public function logout()
    {
        return view('admin.login.index');
    }
}
