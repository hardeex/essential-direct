<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <!--- set the title for each of the page-->
     <title>Dashboard</title>

     <link rel="stylesheet" href="/css/dashboard/profile.css">
     <link rel="stylesheet" href="/css/layout/base.css">
     <link rel="stylesheet" href="/css/main.css">
     <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
     <!-- link the interna JS file -->
     <script src="/js/script.js" defer></script>

      <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

      <!-- header section starts  -->
      <header class="header">
        <a href="{{ url('/') }}" class="logo">
            <img src="images/e-direct-logo.png" alt="E-Direct Logo">
        </a>

        <!-- Desktop Navigation -->
        <nav class="navbar desktop-navbar" id="desktop-navbar">
            <a href="">Logout</a>
            <a href="" class="switch-account">Switch Account</a>
            <a href="{{ url('/profile') }}">My Profile</a>
        </nav>
    </header>
      

    <main>
        <!--- start of the container for both the dashboard nav and the content----FLEX--->
        <div class="dashboard-container">
            <!--- start of the sidebar nav--->
            <div class="dashboard-sidebar-nav">

                <div class="dashboard-nav-item">
                   <div style="margin-top: 100px">
                    <i class="fas fa-tachometer-alt"></i>
                    <a href="">Dashboard</a>
                   </div>
                </div>

                <div class="dashboard-nav-item">
                    <i class="fas fa-home"></i>
                    <a href="{{ url('/') }}">Home</a>
                </div>

                <div class="dashboard-nav-item">
                    <i class="fas fa-building"></i>
                    <a href="" style="color: orangered; font-weight: bold;">My business</a>
                </div>

                <div class="dashboard-nav-item">
                    <i class="fas fa-plus-square"></i>
                    <a href="">Add New business</a>
                </div>

                <div class="dashboard-nav-item">
                    <i class="fas fa-edit"></i>
                    <a href="">Posts</a>
                </div> 

                <div class="dashboard-nav-item">
                    <i class="fas fa-plus-circle"></i>
                    <a href="">Create Post</a>
                </div>

            </div>
             <!--- End of the sidebar nav--->

             <div class="dashboard-content">
                <p>This is to show contents from the database</p>
             </div>

        </div>
         <!--- end of the container for both the dashboard nav and the content-->
    </main>

    <footer>

    </footer>
</body>
</html>