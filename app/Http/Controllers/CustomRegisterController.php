<?php

namespace App\Http\Controllers;

use App\Models\User; // Make sure to import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.custom-register');
    }

    public function register(Request $request)
    {
        // Validate input
        $request->validate([
            'accountType' => 'required|in:business,user',
            'accountPrivacy' => 'required|in:public,private',
            'fullName' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'country' => 'required_if:accountType,user',
            'phoneNumber' => 'required_if:accountType,user',
            'password' => 'required|min:8|confirmed',
        ]);

        // Create a new user
        $user = User::create([
            'account_type' => $request->accountType,
            'account_privacy' => $request->accountPrivacy,
            'name' => $request->fullName,
            'email' => $request->email,
            'country' => $request->country,
            'phone_number' => $request->phoneNumber,
            'password' => Hash::make($request->password),
        ]);

        // You can add additional logic if needed (e.g., sending confirmation email)

        // Log in the user (optional)
        auth()->login($user);

        // Redirect to the login page
        return redirect()->route('login')->with('success', 'Registration successful! Please log in.');
    }
}
