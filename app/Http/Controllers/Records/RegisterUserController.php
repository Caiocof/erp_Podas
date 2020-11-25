<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterUserController extends Controller
{

    public function index()
    {
        if (Auth::check() === true) {
            return view('Records.User.registerUser');
        }

        return redirect()->route('login');

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::check() === true) {
            return redirect()->route('login');
        }

        $requireds = [
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required',
        ];

        $request->validate($requireds);

        $user = [
            'name' => $request->nome,
            'email' => $request->email,
            'password' => bcrypt($request->senha)
        ];

        User::create($user);

        return redirect()->route('dashboard');

    }

}
