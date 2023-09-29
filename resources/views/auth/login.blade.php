<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Login')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/auth/login.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')
        <div class="login-container">
            <h2>Login</h2>
            <p>Enter your credentials to login</p>
            <form action="#" method="POST">
                <div class="input-container">
                    <label for="email">Email/User:</label>
                    <input type="text" id="email" name="email" placeholder="Enter your email or username" required>
                </div>
                <div class="input-container">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
               <div class="links">
                <div class="forgot-psd"> <a href="{{ url('/forgot-password') }}">Forgot Password?</a> </div>
               <div class="create-an-account"><a href="{{ url('/register') }}">Create an Account</a></div>
               
            </div>
            <div class="button-container">
                <button type="submit">Login</button>
            </div>
            </form>
            
        </div>
@endsection
