<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login/login');
    }

    /**
     * Show the form for creating a new resource.
     */


    /**
     * Store a newly created resource in storage.
     */
    public function auth(Request $request)
    {
        $request -> validate([
            'email' => 'required|email',
            'password' => 'required'
        ], [
            'email.required' => 'Esse campo de email é obrigatório',
            'email.email' => 'Esse campo tem que ter um email válido',
            'password.required' => 'Esse campo de senha é obrigatório',
            'password.password' => 'Esse campo tem que ter uma senha válida'
        ]);
        $credentials = $request->only('email', 'password');
        $authenticated = Auth::attempt($credentials);

        if($authenticated)
        {
            $request->session()->regenerate();
            return redirect()->intended('inicial');

        }
        return redirect('login')->withErrors(['error' => 'email inválido']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
