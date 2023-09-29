<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Register')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/auth/register.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')
    <div class="register-container">
        <h2>Register</h2>
        <p>Fill-in the form to create your account</p>
            <form action="" method="POST">
                <label for="accountType">Account Type:</label>
                <select id="accountType" name="accountType">
                    <option value="">Please select an account type</option>
                    <option value="business">Business</option>
                    <option value="user">User</option>
                </select><br><br>
        
                <label for="accountPrivacy">Account Privacy (Option to make contact informations visible or invisible)</label>
                <select id="accountPrivacy" name="accountPrivacy">
                    <option value="">Please select</option>
                    <option value="public">Public</option>
                    <option value="private">Private</option>
                </select><br><br>

                <label for="fullName">Full Name:</label>
                <input type="fullName" id="fullName" name="fullName" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
         
                <label for="phoneNumber">Phone Number:</label>

                <div class="user-phone-number">
                <select id="country" name="country">
                    <option value="">API will be used to run this data</option>
                    <option value="usa">USA (+1)</option>
                    <option value="uk">UK (+44)</option>
                    <option value="canada">Canada (+1)</option>
                    <option value="nigeria">Nigeria (+234)</option>
                </select>

                <input type="tel" id="phoneNumber" name="phoneNumber" required><br><br>
                </div>
                
        
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>
        
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
                <a href="{{ url('/login') }}">Sign in to your account</a>
                <br><br><br><br><br>
        
               <button> Submit</button>
            </form>
       </div>
@endsection
