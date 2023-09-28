@extends('base.layout')

@section('title', 'About Us')

<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/about.css">
    <link rel="stylesheet" href="/css/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection


<!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section" id="hero-section">
            <div class="hero-content">
            <h3>
                <small> Get to Know More</small> <br> About Us
            </h3>
            </div>      
        </section>
 <!--- end of adding the hero-content--->  
@endsection

@section('content')
    <div class="about-us-container">

        <p class="txt-about-us">
            Essential Direct is a subsidiary brand of the essential group, it is owned and controlled by the Essential group. 
            Edirect reaches an approximate of 22 million unique visitors monthly from within Nigeria and across Africa. 
            The site presents an opportunity for business owners and consumers of services to meet online where all business 
            details are collated and recorded by data analysts professionals who do their due diligence to make sure that all 
            businesses are genuine and functional. Edirect also serve as a person’s directory helping user find lost contacts or 
            verifying new contacts. It also helps in quick identification of a person and make easy his or her location. 
            It’s our mission to help as much as possible businesses to list on our business directory to enjoy wide range of customers, 
            bring their location to light and create an avenue where business transactions can commence, take place and be concluded 
            online without the stress of having to move around to get satisfaction. We also intend to create an avenue where every 
            enlisted member can use as point of reference, with his or her information completely collected whoever might be looking 
            into reaching out to such enlisted member can be rest assured they are contacting the actual person(s). 
            Essential Direct is a trusted and verified business directory in Nigeria. All listed local business and data 
            are manually collected to ensure genuine and high-quality data. You can find every essential needs of yours ranging 
            from trusted dealers, local business, restaurants, company data (name, address, phone number, products, services) and 
            every other detail. Our mission is to create a world’s information platform that is universally accessible.
        </p>
    </div>

    @section('extended-content')
    <div class="about-content">
         
     <h3> About Our Content</h3>
     <p>
         Some information published on our website (for example, business names, address, contact numbers) reflect public 
         records provided openly to anybody. We do not maintain or hide specific records which are too personal or consent 
         withheld. We periodically update our information based on the records we obtain from the agencies who has authority 
         to hold such information and also when a business owner or an individual decides to make amendments to their already 
         gotten information. The very idea of these records is to be open and available to the public at large for only lawful 
         usage any other sort of reason which is otherwise shall not privy Edirect to such act. Please note that a lot of content 
         on our site is user-generated. For example, photos, videos, adverts, personal information, city facts, and business profiles 
         are all submitted by visitors. We cannot help in licensing or obtaining any of the data used on our site. Some content used 
         on our site is under license from other companies. You can link to our website without asking for permission.
     </p>
    </div>


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
        
    
@endsection
