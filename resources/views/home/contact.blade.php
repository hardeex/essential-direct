<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Contact')

<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

@section('content')

        <div class="get-in-touch-container">
            <div class="txt-get-touch">
                <h3>Get In Touch With Us</h3>
                <p> <a href="tel:0818880888">0818880888</a>, <a href="tel:07000555666">07000555666</a></p>
            </div>

            <div class="form-get-in-touch">
                
                    <form action="#" method="post">
                    <div class="form-group">
                        <label for="first-name">First Name:</label>
                        <input type="text" name="first-name" id="first-name" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Last Name:</label>
                        <input type="text" name="last-name" id="last-name" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            
            
            </div>
        </div>
            
@endsection
