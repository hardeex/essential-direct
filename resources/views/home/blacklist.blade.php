<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Blacklist')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/home/blacklist.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

<!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section" id="hero-section">
            <div class="hero-content">
            
            </div>      
        </section>
 <!--- end of adding the hero-content--->  


    <div class="search-hero-container">
        <div class="search-form">
            <form action="" method="post">
            <input type="text" placeholder="Search for a place, business, category or user">
            </form>
        </div>

        <div class="choose-user">
            <form action="">
                
                <select name="" id="">
                    <option value="">Business</option>
                    <option value="">User</option>
                </select>
            </form>
        </div>

        <div class="txt-search">
            <i class="fas fa-search"></i>Search
        </div>
        
    </div>
    
@endsection

@section('content')
<div class="blacklist-intro" style="text-align: center">
    <h3>blacklisted businesses/users</h3>
    <p>Reasons for blacklist: Due to bad report and credit reviews.</p>
</div>



<div class="people-container">
    
    <!-- display content from db--->
    <div class="db-user">
        

   <div class="txt-no-round">
        <p>No record found </p>
   </div>
   
    </div>
        <div class="db-data-container">
            <div class="db-image">
                <img src="/images/business.jpg" alt="property image">
            </div>

            <div class="user-details">
                <p><b>Business ID: </b></p>
                <div class="last-visited-details">
                    <div class="txt-since"> <p><b> Since:  </b></p> </div>
                    <div> <p><b>Total Visit: </b></p></div>  
                </div>
                <p><b>Category: </b></p>
                <div class="user-name"><p><b> USER FULL NAME</b></p> </div>
                
                <div class="user-personal-info">
                    <div class="review">
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span> 
                        <span class="txt-no-review"> No review yet</span>
                        <span class="txt-review">0 Review</span>
                    </div>

                    <div class="user-contact">
                        <div class="user-phone-number">
                            <span class="fa fa-times" style="color: red"></span>
                            <span class="fa fa-phone" class="user-phone-number"></span> 08148413982
                        </div>

                        <div class="user-email"><span class="fa fa-envelope"></span> webmasterjdd@gmail.com</div>  
                    </div>
                    <div class="user-address">
                        <span class="fa fa-times" style="color: red"></span>
                        <span class="fa fa-map-marker"></span> 24, Iyala Stret, Alausa, Ikeja
                    </div>
                    <div class="user-account-details">
                        <div class="identify"> <span class="fa fa-times" style="color: red"></span> Identity</div>
                        <div class="face-recognition"> <span class="fa fa-times" style="color: red"></span> Face Recognition</div>
                        <div class="bank-details"> <span class="fa fa-times" style="color: red"></span> Bank Details: </div>
                    </div>

                    <div class="user-verfication">
                        <div class="percent-verify">
                            <div class="txt-verify">16% Verified</div>
                             <div class="user-verification-status"><p>Not Verified</p> </div>
                        </div>

                       
                           
                        
                    </div>
                </div>
            </div>

            <div class="check-status">
                <div class="txt-open-or-close"><p>Opened</p></div>
                <div class="share-and-view-user-data">
                    <div class="share-user-data"><span class="fa fa-share-alt"></span></div>
                    <div class="view-user-data"><small>View business</small></div>
                </div>
            </div>
          
        </div>
    </div>
    <!--- end of each user item container -->



 
@endsection