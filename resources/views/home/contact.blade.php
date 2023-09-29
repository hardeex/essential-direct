<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Contact')

<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/home/contact.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection


@section('extended-content')
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

<div class="contact-map">
    <iframe 
    src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7926.550668928637!2d3.3576209!3d6.6126726!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x103b93ca5ee2ada5%3A0xe5d0472b8961bc63!2s24%20Iyalla%20St%20Oregun%20101233%20Ikeja%2C%20Lagos!3m2!1d6.6126726!2d3.3576208999999997!5e0!3m2!1sen!2sng!4v1695974535327!5m2!1sen!2sng" 
    width="100%" 
    height="650" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
</iframe>
</div>
@endsection