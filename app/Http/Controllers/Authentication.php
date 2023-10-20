<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Authentication extends Controller
{
    protected function login(){
        return view('auth.login');
    }

    private function register(Request $request)
    {
        // Validate the user input
        return view('auth.register');
    }

    protected function forgotPassword(){
        return view('auth.forgot-password');
    }
}
