<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Profile')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/dashboard/profile.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')
    <div class="user-profile-container">
        <div class="user-account-info">
            <img src="/images/adewale.jpg" alt="">
            <h3>FULL NAME</h3>
            <p>Account Type: User </p>
        </div>

        <div class="user-data">
            <h1>Information</h1>

            <div class="user-contact">
                <div class="auy"><p> Email: example@essential.com </p></div>
                <div class="auy"><p>Phone:  0994437678 </p> </div>  
            </div>

            <div class="user-contact">
                <div class="auy"> <p>Username: Adewale  </p>  </div>
                <div class="auy"> <p>Password:  ****** </p> </div> 
            </div>

            <div class="user-links">
                <div>
                    <a href="{{ url('/change-password') }}">Change Password</a>
                </div>
                <div>
                    <a href="{{ url('/edit-profile') }}" style="background: blue">Edit Profile</a>
                </div>
            </div>
            
           
        </div>
    </div>
    
@endsection

