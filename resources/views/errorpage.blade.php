<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Error Page')

<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/home/index.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')
<div class="error-txt">
    <h1>
        Oops!
        The page you are trying to access does not exist.
    </h1>
</div>

<style>
    .error-txt {
        padding: 2rem 7%;
        text-align: center;
        margin-top: 15rem;
        padding: 1rem;
        border: 2px solid #ccc;
        border-radius: 5px;
        background-color: #f8f8f8;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .error-txt h1 {
        font-size: 24px;
        color: #ff0000; /* Red color for the error message */
    }
</style>


@endsection

