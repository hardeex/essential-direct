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
            <a href="#">Logout</a>
            <a href="#" class="switch-account" onclick="showSwitchAccountAlert()">Switch Account</a>
            <a href="{{ url('/profile') }}">My Profile</a>
        </nav>
    </header>
      

    <main>

                <!-- Hidden div for the custom alert -->
                <div id="switch-account-alert" class="custom-alert">
                    <h2>Switch Account</h2>
                    <form>
                        <input type="radio" id="user-radio" name="account-type" value="user">
                        <label for="user-radio">User</label><br>
                
                        <input type="radio" id="business-radio" name="account-type" value="business">
                        <label for="business-radio">Business</label><br>
                
                        <div class="alert-buttons">
                            <button type="button" onclick="switchAccount()">Update Account</button>
                            <button type="button" class="cancel-button" onclick="closeSwitchAccountAlert()">Cancel</button>
                        </div>
                    </form>
                </div>
                

             
               
                
                

        <!--- start of the container for both the dashboard nav and the content----FLEX--->
        <div class="dashboard-container">
            <!--- start of the sidebar nav--->
            <div class="dashboard-sidebar-nav">

                <div class="dashboard-nav-item">
                    <i class="fas fa-tachometer-alt"></i>
                    <a href="javascript:void(0);" onclick="loadContent('dashboard-section')">Dashboard</a>
                </div>

                
                <div class="dashboard-nav-item">
                    <i class="fas fa-home"></i>
                    <a href="javascript:void(0);" onclick="loadContent('home-section')">Home</a>
                </div>

                
                <div class="dashboard-nav-item">
                    <i class="fas fa-building"></i>
                    <a href="javascript:void(0);" onclick="loadContent('portfolio-section')">View Portfolio</a>
                </div>
                

                <div class="dashboard-nav-item">
                    <i class="fas fa-building"></i>
                    <a href="javascript:void(0);" onclick="loadContent('friends-section')">Friends</a>
                </div>
        

                <div class="dashboard-nav-item">
                    <i class="fas fa-building"></i>
                    <a href="javascript:void(0);" onclick="loadContent('post-section')">Posts</a>
                </div>
              
                <div class="dashboard-nav-item">
                    <i class="fas fa-building"></i>
                    <a href="javascript:void(0);" onclick="loadContent('create-section')">Create Posts</a>
                </div>

            </div>
             <!--- End of the sidebar nav--->

             <div class="dashboard-section" id="dashboard-section">
                <!-- Content for Dashboard section goes here -->
                <p>The  contents for the view....</p>
            </div>
            
          

        </div>
         <!--- end of the container for both the dashboard nav and the content-->

<!---- playing  around with some code-->


<!-- Repeat the same for other navigation items -->

<!--- end of playing around with some codes --->

         <!---++++======= CREATING A CONTAINER FOR CONTENT==== My goal here is to navigate between pages without really the page---->
       
        
     
        
    </main>

    <footer>

    </footer>
</body>
</html>