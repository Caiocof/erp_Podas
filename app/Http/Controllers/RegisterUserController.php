<?php

namespace App\Http\Controllers;

use App\Models\registerUser;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User.registerUser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\registerUser $registerUser
     * @return \Illuminate\Http\Response
     */
    public function show(registerUser $registerUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\registerUser $registerUser
     * @return \Illuminate\Http\Response
     */
    public function edit(registerUser $registerUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\registerUser $registerUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registerUser $registerUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\registerUser $registerUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(registerUser $registerUser)
    {
        //
    }
}