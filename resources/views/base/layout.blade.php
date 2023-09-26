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
            <a href="#home" id="txt-home">Home</a>
            <a href="#about">About</a>
            <a href="">Packages</a>
            <a href="">People</a>
            <a href="">Business</a>
            <a href="">Blog</a>
            <a href="">Blacklist</a>
            <a href="">Contact</a>
            <a href="" id="txt-login">Login</a>
            <a href="">Register</a>
            <a href="" id="txt-portfolio">List your Portfolio/Business</a>

        </nav>
        <!-- End of the navigation bar -->
    
            <!-- items to display on mobile -->
        <div class="mobile-view">
            <div>
                <nav class="navbar">
                    <a href="" class="mobile-link">Sign in</a>
                    <a href="" class="mobile-link">Sign Up</a>
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

        </main>

        <footer>

        </footer>
</body>
</html>