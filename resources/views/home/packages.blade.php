<!--- adding the base layout -->
@extends('base.layout')

@section('title', 'Essential Direct')


<!--- adding the css and js files --->
@section('links')
    <link rel="stylesheet" href="/css/packages.css">
    <link rel="stylesheet" href="/css/mediaQuery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection

<!--- adding the hero-content --->
@section('hero-content')
 <!--- start of adding the hero-content--->
        <section class="hero-section" id="hero-section">
            <div class="hero-content">
            <h3>Choose from any of our listing Packages that suit your business needs</h3>
            <p>Get a package of your choice to get your business listed out on our business marketing page page</p>
            </div>      
        </section>
 <!--- end of adding the hero-content--->  
    
@endsection

@section('content')
    <div class="packages-container">
        <div class="package-item">
            <h3>Free Trial</h3>
            <strong>Price: ₦789,090 (7 days)</strong>
        
            <p>7 days free listing enables your business to be active on Essential-Direct Ng for 7 days.</p>
        
            <ul class="checkmark-list">
                <li>7 days validity</li>
                <li>Customer target (100 customers)</li>
                <li>Procedural Marketing</li>
            </ul>
            <button>Select</button>
        </div>

        <div class="package-item">
            <h3>Classified</h3>
            <strong>Price: ₦789,090 (Yearly Plan)</strong>
        
            <p>You will be able to post 3 products, 4 photos, 2 categories, on our platform only.</p>
        
            <ul class="checkmark-list">
                <li>One Off Visibility</li>
                <li>Customers target (600 plus+)</li>
                <li>Proper Marketing</li>
            </ul>
            <button>Select</button>
        </div>

        <div class="package-item">
            <h3>Ordinary</h3>
            <strong>Price: ₦789,090 (Yearly Plan)</strong>
        
            <p>You will be able to register 1 products, 1 photos, 1 keywords, 1 categories, on our platforms only.</p>
        
            <ul class="checkmark-list">
                <li>One Off Visibility</li>
                <li>Customers target (200 plus+)</li>
                <li>Proper Marketing</li>
            </ul>
            <button>Select</button>
        </div>

        <div class="package-item">
            <h3>Platinum</h3>
            <strong>Price: ₦789,090 (7 days)</strong>
        
            <p>You will be able to post 20 products, 20 photos, 15 keywords and 15 categories, on our platforms, and may also appear on other platforms locally, Nationwide and globally.</p>
        
            <ul class="checkmark-list">
                <li>12 months visibility</li>
                <li>Customers target (4000 - 6000 plus+ Subject to good reviews and customer relations)</li>
                <li>Strong Marketing</li>
            </ul>
            <button>Select</button>
        </div>

        <div class="package-item">
            <h3>Silver Listing</h3>
            <strong>Price: ₦789,090 (7 days)</strong>
        
            <p>You will be able to post 7 products, 8 photos, 8 keywords, 4 categories, on our platforms and may also boost to other social platforms, your business will also been seen in your locality, nationwide and globally.</p>
        
            <ul class="checkmark-list">
                <li>12 months visibility</li>
                <li>Customers target (100 - 200 plus+ subject to good review and customer relations.)</li>
                <li>Strong Marketing</li>
            </ul>
            <button>Select</button>
        </div>

        <div class="package-item">
            <h3>Gold Listing</h3>
            <strong>Price: ₦789,090 (7 days)</strong>
        
            <p>Customers target (1000 - 3000 plus+ subject to good reviews and customer relations.</p>
        
            <ul class="checkmark-list">
                <li>7 days validity</li>
                <li>Customer target (100 customers)</li>
                <li>Strong Marketing</li>
            </ul>
            <button>Select</button>
        </div>

        <div class="package-item">
            <h3>Gold Plus</h3>
            <strong>Price: ₦789,090 (7 days)</strong>
        
            <p>7 days free listing enables your business to be active on Essential-Direct Ng for 7 days.</p>
        
            <ul class="checkmark-list">
                <li>12 months visiblity </li>
                <li>You will be able to post 14 products, 15 photos, 10 keywords, 7 categories...Your business name will show up when people search for what you offer on all our platforms and in your locality, nationwide and globally.</li>
                <li>Strong Marketing</li>
            </ul>
            <button>Select</button>
        </div>
        
    </div>

    <div class="txt-package-info">
        <p>
            Note: As for the first time, your business will be appearing at the top of the page depending on the package you choose
        </p>
    </div>
@endsection