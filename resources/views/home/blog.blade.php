<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Blog')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/home/people.css">
    <link rel="stylesheet" href="/css/home/index.css">
    <link rel="stylesheet" href="/css/responsiveness/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection



@section('content')
    <div class="blog-post-container">
                        
            <div class="people-container">
                <!-- display content from db--->
                <div class="db-user">
                    <h3>Trending Blog Posts</h3>

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
                </div>
                <!--- end of each user item container -->


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
            </div>

    </div>

 
@endsection