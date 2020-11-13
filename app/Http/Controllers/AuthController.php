<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true) {
            return view('master');
        }

        return redirect()->route('login');

    }

    public function showLoginForm()
    {
        return view('Records.User.formLogin');
    }

    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->pass
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem!']);

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('dashboard');

    }
}

