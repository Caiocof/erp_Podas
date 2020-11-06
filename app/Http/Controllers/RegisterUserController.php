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
            return view('User.registerUser');
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
        $user = [
            'name' => $request->nome,
            'email' => $request->email,
            'password' => bcrypt($request->senha)
        ];

        User::create($user);

        return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $User
     * @return \Illuminate\Http\Response
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $rUser
     * @return \Illuminate\Http\Response
     */
    public function edit(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $User)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $rUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $User)
    {
        //
    }
}
