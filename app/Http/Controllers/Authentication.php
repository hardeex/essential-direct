<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Authentication extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register()
    {
        // Validate the user input
        return view('auth.register');
    }

    public function forgotPassword(){
        return view('auth.forgot-password');
    }
}
