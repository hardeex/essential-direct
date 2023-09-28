<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!--- set the title for each of the page-->
     <title>@yield('title')</title>

     <!-- adding styling links to each page layout -->
     @yield('links')
     <link rel="stylesheet" href="/css/main.css">
     <link rel="stylesheet" href="/css/base.css">
     <link rel="stylesheet" href="/css/mediaQuery.css">
     <!-- link the interna JS file -->
     <script src="/js/script.js"></script>

      <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
</head>
<body>
    
    <!-- header section starts  -->
    <header class="header">
        <a href="{{ url('/') }}" class="logo">
            <img src="images/e-direct-logo.png" alt="E-Direct Logo">
        </a>
    
        <!-- Start of the navigation bar -->
        <nav class="navbar" id="desktop-navbar">
            <a href="{{ url('/') }}" >Home</a>
            <a href="{{ url('/about') }}">About</a>
            <a href="{{ url('/packages') }}">Packages</a>
            <a href="{{ url('/people') }}">People</a>
            <a href="{{ url('/business') }}">Business</a>
            <a href="{{ url('/blog') }}">Blog</a>
            <a href="{{ url('/blacklist') }}">Blacklist</a>
            <a href="{{ url('/contact') }}">Contact</a>
            <a href="" id="txt-login">Login</a>
            <a href="">Register</a>
            <a href="" id="txt-portfolio">List your Portfolio/Business</a>

        </nav>
        <!-- End of the navigation bar -->
    
            <!-- items to display on mobile -->
        <div class="mobile-view">
            <div>
                <nav class="navbar" id="mobile-navbar">
                    <a href="" >Sign in</a>
                    <a href="">Sign Up</a>
                </nav>
            </div>
        </div>

    
        <div class="icons">
            <div class="menu-icon" id="menu-icon">
                <div class="fas fa-bars"></div>
            </div>
        </div>
    
    </header>
    
    @yield('hero-content')

    <!-- header section ends -->


        <main>
            <section>
                @yield('content')  
            </section>

            @yield('extended-content')
        </main>

        <footer>
            <p id="txt-check-post">Check out our blog</p>
            
            <div class="newsletter">
                <div class="newsletter-img"><img src="/images/email-icon.png" alt="Email icon"></div>
                <div class="newsletter-content">  
                    <h4>Subscribe to our Newsletter</h4>
                    <p>Don't miss out on the latest updates and information.</p>
                    <form action="" method="post">
                        <div class="input-container">
                            <input type="email" name="user-email" id="user-email" placeholder="Your Email">
                            <label for="user-email">Subscribe</label>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="footer">
                <div class="footer-contents">
                    <div class="about-us">
                        <div class="e-direct-img"><img src="/images/e-direct-logo.png" alt=""></div>
                        <div class="txt-about-us">
                            <p>
                                Your customers are your most important source of feedback. Essential Direct allows 
                                you to monitor and respond to reviews across platforms quickly from one place.
                            </p>
                        </div>
                    </div>
            
                    <div class="quick-links">
                        <h3>Quick Links</h3>
                        <div class="links">
                            <a href="" style="color: orangered">Home</a>
                            <a href="">About</a>
                            <a href="">Packages</a>
                            <a href="">People</a>
                            <a href="">Businesses</a>
                            <a href="">Blog</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
            
                    <div class="services">
                        <h3>Services</h3>
                        <div class="rendered-services">
                            <a href="">E-Jobs</a>
                            <a href="">E-budget Hotel</a>
                            <a href="">E-bnb Hotel</a>
                            <a href="">E-short stay</a>
                            <a href="">E-companion</a>
                            <a href="">E-venue</a>
                            <a href="" style="color: orangered" >E-direct</a>
                        </div>
                    </div>
            
                    <div class="contact-us">
                       <a href="">Tel: 07000555666</a>
                       <a href="mailto:info@essentialdirect.ng">info@essentialdirect.ng</a>
                       <a href="">Oosh</a>
                       <a href="">Sowa</a>
                    </div>
                </div>

            </div>
            <div class="copyright">
                    <h3> (c) {{ date('Y') }} Designed by Essential Group Team </h3>
                </div>
        </footer>

        
</body>
</html>