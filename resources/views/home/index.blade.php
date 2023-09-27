<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Essential Direct')


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
                We tell you more about People, Businesses & Places In Nigeria Than Any Other Directory.
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
                <img src="/images/ads/ads4.png" alt="">
                <img src="/images/ads/ads4.png" alt="" >
                <img src="/images/ads/ad2.png" alt="" >
            </div>
            <!-- end of showing ads --->
        </div>


        <!---- ==== Start of TOP NOTCH BUSINESS CATEGORY ===== ---->
        <div class="business-category-section">
              <!-- show ads-->
              <div class="db-ads-left">
                <img src="/images/ads/ad1.png" alt="" >
                <img src="/images/ads/ad2.png" alt="">
                <img src="/images/ads/ads3.png" alt="">
                <img src="/images/ads/ads4.png" alt="">
                <img src="/images/ads/ads4.png" alt="" style="height: 100%">
                <img src="/images/ads/ad2.png" alt="" style="height: 100%">
            </div>
            <!-- end of showing ads --->

            <div class="business-post-category">
                <h3>Top Business Categories</h3>

                <div class="business-category-items">
                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-piggy-bank"></i> <br>
                            <a href="">Account & Finance</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-tractor"></i> <br>
                            <a href="">Agriculture & Farming</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-briefcase"></i> <br>
                            <a href="">Artisans- General Businesses</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-film"></i> </i> <br>
                            <a href="">Art & Entertainment</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-car"></i>  <br>
                            <a href="">Automative</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-heart"></i> <br>
                            <a href="">Beauty & Personal Care</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-trophy"></i> <br>
                            <a href="">Betting & casino</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-briefcase"></i> <br>
                            <a href="">Business Service</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-car"></i> <br>
                            <a href="">Car Dealer</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-comments"></i> <br>
                            <a href="">Communication</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-building"></i> <br>
                            <a href="">Companies</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-graduation-cap"></i> <br>
                            <a href="">Education & Learning</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-bolt"></i> <br>
                            <a href="">Energy & Utilities</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-cogs"></i> <br>
                            <a href="">Enginering</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-music"></i> <br>
                            <a href="">Entertainment & Media</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-calendar-alt"></i> <br>
                            <a href="">Event & Conference</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-tshirt"></i> <br>
                            <a href="">Fashion & Clothing</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-utensils"></i> <br>
                            <a href="">Food & Restaurant</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-landmark"></i> <br>
                            <a href="">Government</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-heartbeat"></i>  <br>
                            <a href="">Health & Medicine</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-home"></i>  <br>
                            <a href="">Home & Real Estate</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-laptop"></i>  <br>
                            <a href="">IT & Computers</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-balance-scale"></i> <br>
                            <a href="">Legal services</a>
                        </div>
                    </div>


                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-shopping-cart"></i> <br>
                            <a href="">Merchants</a>
                        </div>
                    </div>


                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-building"></i> <br>
                            <a href="">Non-Profit Organizations</a>
                        </div>
                    </div>


                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-user-check"></i> <br>
                            <a href="">Online influencers</a>
                        </div>
                    </div>


                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-heart"></i> <br>
                            <a href="">Personal Care</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-paw"></i> <br>
                            <a href="">Pet Supply</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-mobile-alt"></i>  <br>
                            <a href="">Phones & Laptops</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-praying-hands"></i> <br>
                            <a href="">Religion & Spirituality</a>
                        </div>
                    </div>


                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-graduation-cap"></i> <br>
                            <a href="">Schools</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-shield-alt"></i> <br>
                            <a href="">Security & Emergency</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-shopping-cart"></i>  <br>
                            <a href="">Shopping</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-futbol"></i> <br>
                            <a href="">Sports</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-globe"></i> <br>
                            <a href="">Tourism & Hospitality</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="item-icon">
                            <i class="fas fa-bus"></i> <br>
                            <a href="">Transportation</a>
                        </div>
                    </div>

                </div>
            </div>

             <!-- show ads-->
             <div class="db-ads-right">
                <img src="/images/ads/ad1.png" alt="">
                <img src="/images/ads/ad2.png" alt="">
                <img src="/images/ads/ads3.png" alt="">
                <img src="/images/ads/ads4.png" alt="">
                <img src="/images/ads/ads4.png" alt="" style="height: 100%">
                <img src="/images/ads/ad2.png" alt="" style="height: 100%">
            </div>
            <!-- end of showing ads --->
        </div>
         <!---- ====End of TOP NOTCH BUSINESS CATEGORY ===== ---->


         <!--- ==== TOP RECOMMENDED SECTION --- === ---->
<div class="recommended-items-container">
            <h3>Top Recommended <br> Businesses</h3>

    @section('extended-content')
          
    <div class="show-items-container">
        <div class="item-list">
           
            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   

            <div class="item-category">
                <div class="item cat-img"> <img src="/images/business.jpg" alt=""></div>
                <div class="itemtitle"> <h5>item title</h5></div>  
            </div>   


        </div>
        
        <div class="item-list-ads"><img src="/images/e-direct-img.jpg" alt=""></div>
    </div>
    
    <div class="txt-browse-items-link">
        <p>Browse all available businesses <i class="fas fa-arrow-right"></i></p> 
    </div>
    
    <div class="txt-why-container">
        <div class="txt-why-essential">
            <h3>Why you should list your business on Essential Nigeria</h3>
            <p>
                Over 50 million people use Edirect to discover great businesses and services and also find or locate missed or lost 
                contacts and loved ones. Join the fastest growing force of over 2 milion businesses who have taken advantage of this 
                online platform to reach more customers and service consumers helping them enhance the reach of their business. 
                EDIRECT CONNECTING THE WOLRD OF SERVICE AND PERSONS.
            </p>
        </div>
    </div>
              
    <div class="maximize">
        <div class="maximize-img"><img src="/images/operator.png" alt=""></div>
        <div class="txt-maximize">
            <h3>Maximize Your Online Business</h3>
            <p>
                Be at the top of the business food chain been online enables you to obtain new customers and generate more traffic. 
                improve social media presence. get reviews and grow your business reputation online. your company profile can include 
                contacts and description, products, photo gallery and your business location on the map.
            </p>
        </div>
    </div>   
    
    <div class="reg-container">
            <div class="registration">
                <div class="reg-img"><img src="/images/featured-img1.png" alt=""></div>
                <div class="txt-reg"><h3>Register Now to get your Business Listed On Essential Direct</h3></div>
            </div>

            <div class="registration">
                <div class="txt-reg">
                    <h3>Create Your Own Website In Minutes</h3>
                    <p>
                        Be at the top of the business food chain been online enables you to obatain new customers 
                        and generate more traffic. improve social media presence. get reviews and grow your business 
                        reputation online. your company profile can include contacts and description, products, 
                        photo gallery and your business location on the map.
                    </p>
                </div>
                <div class="reg-img"><img src="/images/featured-img2.png" alt=""></div>
            </div>
            
            <div class="registration">
                <div class="reg-img"><img src="/images/featured-img3.png" alt=""></div>
                <div class="reg-img reg-shadow"><img src="/images/featured-img-bg.png" alt=""></div>
                <div class="txt-reg">
                    <h3>Stay In Touch With Ease</h3>
                    <p>Your customers are your most important source of feedback. Essential Direct allows you to monitor and respond to reviews across platforms quickly from one place.</p>
                </div>
            </div>            
    </div>


    <h3 id="txt-trending-post">Trending blog posts</h3>
    <div class="trending-post-section">
        <div class="post">
            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
            <div class="post-title"><h3>Post Title 1</h3></div>
            <div class="post-link"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></div>
        </div>

        <div class="post">
            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
            <div class="post-title"><h3>Post Title 1</h3></div>
            <div class="post-link"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></div>
        </div>

        <div class="post">
            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
            <div class="post-title"><h3>Post Title 1</h3></div>
            <div class="post-link"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></div>
        </div>
       
        <div class="post">
            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
            <div class="post-title"><h3>Post Title 1</h3></div>
            <div class="post-link"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></div>
        </div>

        <div class="post">
            <div class="post-image"><img src="/images/featured-img2.png" alt="The post image"></div>
            <div class="post-title"><h3>Post Title 1</h3></div>
            <div class="post-link"><a href="#">Read More <i class="fas fa-arrow-right"></i></a></div>
        </div>

       
       
    </div>
    
    
    @endsection
</div>

    
@endsection