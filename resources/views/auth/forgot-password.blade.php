<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Forgot Password')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/auth/forgotPassword.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!---- Linking with the js file --->
    <script src="/js/script.js" defer></script>
@endsection

@section('content')
    <div class="forgot-password-container">
            <h2>Forgot Password</h2>
            <div>
                <label for="reset-option">Reset Password Using:</label>
                <select id="reset-option" onchange="toggleResetOption()">
                    <option value="choose-option">Choose Email or Phone number for password reset</option>
                    <option value="email">Email</option>
                    <option value="phone">Phone Number</option>
                </select>
            </div>


             <!-- Select a password rest option -->
             <div class="choose-option">
                <p>Please choose either an email or phone option to reset your password</p>
            </div>

            <!-- Reset by Email -->
            <div class="email-option" style="display: none">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address">
            </div>


            <!-- Reset by Phone Number -->
            <div class="phone-option" style="display: none" >
                <label for="phone-number">Phone Number:</label>
                <input type="tel" id="phone-number" name="phone-number" placeholder="Enter your phone number">
            </div>
            
            <div class="btn-send-otp" style="display: none">
                        <button onclick="sendResetLink()" >Send OTP</button>
            </div>
           
    </div>
@endsection
