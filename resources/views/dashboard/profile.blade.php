<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Profile')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/dashboard/profile.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')
    <div class="user-profile-container">
        <div class="user-account-info">
            <img src="/images/adewale.jpg" alt="">
        </div>

        <div class="user-data">

        </div>
    </div>
@endsection