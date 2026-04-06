<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

    }

    public function showRegisterForm()
    {

    }

    public function register(Request $request)
    {

    }

    public function logout(Request $request)
    {

    }
}
