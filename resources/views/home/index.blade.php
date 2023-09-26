<!--- adding the base layout -->
@extends('base.layout')

<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/index.css">
    <link rel="stylesheet" href="/css/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

<!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section" id="hero-section">
            <div class="hero-content">
            <h3>
                We tell people you more about People, Business, & Places in Nigeria than any other Directory.
            </h3>
            </div>      
        </section>
 <!--- end of adding the hero-content--->  
<!-- Wrap the search-hero-container in a parent container -->

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

<!-- adding the contents or body of the image --->
@section('content')

        <div class="highlight">
            <div class="highlight-item">
               <img src="/images/car.png" alt="car image">
                <p> e-Cars</p>
            </div>

            <div class="highlight-item">
                <img src="/images/hotel.png" alt="hotel image">
                 <p> e-Hotels</p>
             </div>

             <div class="highlight-item">
                <img src="/images/businessman.png" alt="jobs image">
                 <p> e-Jobs</p>
             </div>

             <div class="highlight-item">
                <img src="/images/house.png" alt="property image">
                 <p> e-Properties</p>
             </div>
        </div>

        <!--- ===== TOP NOTCH SECTION === --->

        <div class="db-container">
            <!-- display content from db--->
            <div class="db-user">
                <h3>Top notch businesses in Nigeria</h3>

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
                                     <div class="user-verification-status">Not Verified</div>
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

            <!-- show ads-->
            <div class="db-ads">
                <img src="/images/ads/ad1.png" alt="">
                <img src="/images/ads/ad2.png" alt="">
                <img src="/images/ads/ads3.png" alt="">
            </div>
        </div>
    
@endsection