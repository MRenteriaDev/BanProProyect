<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="html 5 template">
        <meta name="author" content="">

        <title>BAN PRO</title>

        <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{asset('seller/css/jquery-ui.css')}}css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{asset('seller/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{asset('seller/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/aos2.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/menu.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('seller/css/maps.css')}}">
    <link rel="stylesheet" id="color" href="{{asset('seller/css/colors/pink.css')}}">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
    <body class="homepage-9 hp-6 homepage-1">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- START SECTION HEADINGS -->
            <!-- Header Container
            ================================================== -->
            <header id="header-container" class="header head-tr">
                <!-- Header -->
                <div id="header" class="head-tr bottom">
                    <div class="container container-header">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                            <div id="logo">
                                <a href="index.html"><img src="images/logo-white-1.svg" data-sticky-logo="images/logo-red.svg" alt=""></a>
                            </div>
                            <!-- Mobile Navigation -->
                            <div class="mmenu-trigger">
                                <button class="hamburger hamburger--collapse" type="button">
                                    <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                            <!-- Main Navigation -->
                            <nav id="navigation" class="style-1 head-tr">
                                <ul id="responsive">
                                    <li><a href="#">Home</a>
                                        <ul>
                                            <li><a href="#">Home Map</a>
                                                <ul>
                                                    <li><a href="index-9.html">Home Map Style 1</a></li>
                                                    <li><a href="index-12.html">Home Map Style 2</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Home Image</a>
                                                <ul>
                                                   <li><a href="index.html">Modern Home</a></li>
                                                    <li><a href="index-2.html">Home Boxed Image</a></li>
                                                    <li><a href="index-3.html">Home Modern Image</a></li>
                                                    <li><a href="index-5.html">Home Minimalist Style</a></li>
                                                    <li><a href="index-6.html">Home Parallax Image</a></li>
                                                    <li><a href="index-8.html">Home Search Form</a></li>
                                                    <li><a href="index-10.html">Modern Full Image</a></li>
                                                    <li><a href="index-15.html">Home Typed Image</a></li>
                                                    <li><a href="index-17.html">Modern Parallax Image</a></li>
                                                    <li><a href="index-18.html">Image Filter Search</a>
                                                    <li><a href="index-21.html">Parallax Image video</a></li>
                                                    <li><a href="index-23.html">Home Image</a></li>
                                                    <li><a href="index-24.html">Image and video</a></li>
                                                </ul>
                                                </li>
                                                <li><a href="#">Home Video</a>
                                                    <ul>
                                                        <li><a href="index-4.html">Home Video Image</a></li>
                                                        <li><a href="index-7.html">Home Video</a></li>
                                                        <li><a href="index-20.html">Home Modern Video</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Home Slider</a>
                                                    <ul>
                                                        <li><a href="index-11.html">Slider Presentation 2</a></li>
                                                        <li><a href="index-16.html">Slider Presentation 3</a></li>
                                                        <li><a href="index-19.html">Home Modern Slider</a></li>
                                                        <li><a href="index-22.html">Home Image Slider</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Home Styles</a>
                                                    <ul>
                                                        <li><a href="index-13.html">Home Style Dark</a></li>
                                                        <li><a href="index-14.html">Home Style White</a></li>
                                                    </ul>
                                                </li>
                                        </ul>
                                        </li>
                                        <li><a href="#">Listing</a>
                                            <ul>
                                                <li><a href="#">Listing Grid</a>
                                                    <ul>
                                                        <li><a href="properties-grid-1.html">Grid View 1</a></li>
                                                        <li><a href="properties-grid-2.html">Grid View 2</a></li>
                                                        <li><a href="properties-grid-3.html">Grid View 3</a></li>
                                                        <li><a href="properties-grid-4.html">Grid View 4</a></li>
                                                        <li><a href="properties-full-grid-1.html">Grid Fullwidth 1</a></li>
                                                        <li><a href="properties-full-grid-2.html">Grid Fullwidth 2</a></li>
                                                        <li><a href="properties-full-grid-3.html">Grid Fullwidth 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Listing List</a>
                                                    <ul>
                                                        <li><a href="properties-full-list-1.html">List View 1</a></li>
                                                        <li><a href="properties-list-1.html">List View 2</a></li>
                                                        <li><a href="properties-full-list-2.html">List View 3</a></li>
                                                        <li><a href="properties-list-2.html">List View 4</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Listing Map</a>
                                                    <ul>
                                                        <li><a href="properties-half-map-1.html">Half Map 1</a></li>
                                                        <li><a href="properties-half-map-2.html">Half Map 2</a></li>
                                                        <li><a href="properties-half-map-3.html">Half Map 3</a></li>
                                                        <li><a href="properties-top-map-1.html">Top Map 1</a></li>
                                                        <li><a href="properties-top-map-2.html">Top Map 2</a></li>
                                                        <li><a href="properties-top-map-3.html">Top Map 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Agent View</a>
                                                    <ul>
                                                        <li><a href="agents-listing-grid.html">Agent View 1</a></li>
                                                        <li><a href="agents-listing-row.html">Agent View 2</a></li>
                                                        <li><a href="agents-listing-row-2.html">Agent View 3</a></li>
                                                        <li><a href="agent-details.html">Agent Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Agencies View</a>
                                                    <ul>
                                                        <li><a href="agencies-listing-1.html">Agencies View 1</a></li>
                                                        <li><a href="agencies-listing-2.html">Agencies View 2</a></li>
                                                        <li><a href="agencies-details.html">Agencies Details</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Property</a>
                                            <ul>
                                                <li><a href="single-property-1.html">Single Property 1</a></li>
                                                <li><a href="single-property-2.html">Single Property 2</a></li>
                                                <li><a href="single-property-3.html">Single Property 3</a></li>
                                                <li><a href="single-property-4.html">Single Property 4</a></li>
                                                <li><a href="single-property-5.html">Single Property 5</a></li>
                                                <li><a href="single-property-6.html">Single Property 6</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="#">Shop</a>
                                                    <ul>
                                                        <li><a href="shop-with-sidebar.html">Product Sidebar</a></li>
                                                        <li><a href="shop-full-page.html">Product Fullpage</a></li>
                                                        <li><a href="shop-single.html">Product Single</a></li>
                                                        <li><a href="shop-checkout.html">Checkout Page</a></li>
                                                        <li><a href="shop-order.html">Order Page</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">User Panel</a>
                                                    <ul>
                                                        <li><a href="dashboard.html">Dashboard</a></li>
                                                        <li><a href="user-profile.html">User Profile</a></li>
                                                        <li><a href="my-listings.html">My Properties</a></li>
                                                        <li><a href="favorited-listings.html">Favorited Properties</a></li>
                                                        <li><a href="add-property.html">Add Property</a></li>
                                                        <li><a href="payment-method.html">Payment Method</a></li>
                                                        <li><a href="invoice.html">Invoice</a></li>
                                                        <li><a href="change-password.html">Change Password</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="pricing-table.html">Pricing Tables</a></li>
                                                <li><a href="404.html">Page 404</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="register.html">Register</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="under-construction.html">Under Construction</a></li>
                                                <li><a href="ui-element.html">UI Elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="#">Grid Layout</a>
                                                    <ul>
                                                        <li><a href="blog-full-grid.html">Full Grid</a></li>
                                                        <li><a href="blog-grid-sidebar.html">With Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">List Layout</a>
                                                    <ul>
                                                        <li><a href="blog-full-list.html">Full List</a></li>
                                                        <li><a href="blog-list-sidebar.html">With Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                        <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                                        <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                                        <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                                </ul>
                            </nav>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->

                        <!-- Right Side Content / End -->
                        <div class="right-side d-none d-none d-lg-none d-xl-flex">
                            <!-- Header Widget -->
                            <div class="header-widget">
                                <a href="add-property.html" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                            </div>
                            <!-- Header Widget / End -->
                        </div>
                        <!-- Right Side Content / End -->

                        <!-- Right Side Content / End -->
                        <div class="header-user-menu user-menu add">
                            <div class="header-user-name">
                                <span><img src="images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                            </div>
                            <ul>
                                <li><a href="user-profile.html"> Edit profile</a></li>
                                <li><a href="add-property.html"> Add Property</a></li>
                                <li><a href="payment-method.html">  Payments</a></li>
                                <li><a href="change-password.html"> Change Password</a></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </div>
                        <!-- Right Side Content / End -->

                        <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                            <!-- Header Widget -->
                            <div class="header-widget sign-in">
                                <div class="show-reg-form modal-open"><a href="#">Sign In</a></div>
                            </div>
                            <!-- Header Widget / End -->
                        </div>
                        <!-- Right Side Content / End -->

                        <!-- lang-wrap-->
                        <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
                            <div class="lang-wrap">
                                <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                                <ul class="lang-tooltip lang-action no-list-style">
                                    <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                                    <li><a href="#" data-lantext="Fr">Francais</a></li>
                                    <li><a href="#" data-lantext="Es">Espanol</a></li>
                                    <li><a href="#" data-lantext="De">Deutsch</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- lang-wrap end-->

                    </div>
                </div>
                <!-- Header / End -->

            </header>
            <div class="clearfix"></div>
            <!-- Header Container / End -->

            <!-- STAR HEADER SEARCH -->
            <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">
                <div class="hero-main">
                    <div class="container" data-aos="zoom-in">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero-inner">
                                    <!-- Welcome Text -->
                                    <div class="welcome-text">
                                        <h1 class="h1">Find Your Dream
                                        <br class="d-md-none">
                                        <span class="typed border-bottom"></span>
                                    </h1>
                                        <p class="mt-4">We Have Over Million Properties For You.</p>
                                    </div>
                                    <!--/ End Welcome Text -->
                                    <!-- Search Form -->
                                    <div class="col-12">
                                        <div class="banner-search-wrap">
                                            <ul class="nav nav-tabs rld-banner-tab">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="tabs_1">
                                                    <div class="rld-main-search">
                                                        <div class="row">
                                                            <div class="rld-single-input">
                                                                <input type="text" placeholder="Enter Keyword...">
                                                            </div>
                                                            <div class="rld-single-select ml-22">
                                                                <select class="select single-select">
                                                                    <option value="1">Property Type</option>
                                                                    <option value="2">Family House</option>
                                                                    <option value="3">Apartment</option>
                                                                    <option value="3">Condo</option>
                                                                </select>
                                                            </div>
                                                            <div class="rld-single-select">
                                                                <select class="select single-select mr-0">
                                                                    <option value="1">Location</option>
                                                                    <option value="2">Los Angeles</option>
                                                                    <option value="3">Chicago</option>
                                                                    <option value="3">Philadelphia</option>
                                                                    <option value="3">San Francisco</option>
                                                                    <option value="3">Miami</option>
                                                                    <option value="3">Houston</option>
                                                                </select>
                                                            </div>
                                                            <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                            <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                                <a class="btn btn-yellow" href="#">Search Now</a>
                                                            </div>
                                                            <div class="explore__form-checkbox-list full-filter">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                        <!-- Form Property Status -->
                                                                        <div class="form-group categories">
                                                                            <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                                <ul class="list">
                                                                                    <li data-value="1" class="option selected ">For Sale</li>
                                                                                    <li data-value="2" class="option">For Rent</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!--/ End Form Property Status -->
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                        <!-- Form Bedrooms -->
                                                                        <div class="form-group beds">
                                                                            <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                                <ul class="list">
                                                                                    <li data-value="1" class="option selected">1</li>
                                                                                    <li data-value="2" class="option">2</li>
                                                                                    <li data-value="3" class="option">3</li>
                                                                                    <li data-value="3" class="option">4</li>
                                                                                    <li data-value="3" class="option">5</li>
                                                                                    <li data-value="3" class="option">6</li>
                                                                                    <li data-value="3" class="option">7</li>
                                                                                    <li data-value="3" class="option">8</li>
                                                                                    <li data-value="3" class="option">9</li>
                                                                                    <li data-value="3" class="option">10</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!--/ End Form Bedrooms -->
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                                        <!-- Form Bathrooms -->
                                                                        <div class="form-group bath">
                                                                            <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                                <ul class="list">
                                                                                    <li data-value="1" class="option selected">1</li>
                                                                                    <li data-value="2" class="option">2</li>
                                                                                    <li data-value="3" class="option">3</li>
                                                                                    <li data-value="3" class="option">4</li>
                                                                                    <li data-value="3" class="option">5</li>
                                                                                    <li data-value="3" class="option">6</li>
                                                                                    <li data-value="3" class="option">7</li>
                                                                                    <li data-value="3" class="option">8</li>
                                                                                    <li data-value="3" class="option">9</li>
                                                                                    <li data-value="3" class="option">10</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!--/ End Form Bathrooms -->
                                                                    </div>
                                                                    <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                        <!-- Price Fields -->
                                                                        <div class="main-search-field-2">
                                                                            <!-- Area Range -->
                                                                            <div class="range-slider">
                                                                                <label>Area Size</label>
                                                                                <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <br>
                                                                            <!-- Price Range -->
                                                                            <div class="range-slider">
                                                                                <label>Price Range</label>
                                                                                <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                        <!-- Checkboxes -->
                                                                        <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                            <input id="check-2" type="checkbox" name="check">
                                                                            <label for="check-2">Air Conditioning</label>
                                                                            <input id="check-3" type="checkbox" name="check">
                                                                            <label for="check-3">Swimming Pool</label>
                                                                            <input id="check-4" type="checkbox" name="check">
                                                                            <label for="check-4">Central Heating</label>
                                                                            <input id="check-5" type="checkbox" name="check">
                                                                            <label for="check-5">Laundry Room</label>
                                                                            <input id="check-6" type="checkbox" name="check">
                                                                            <label for="check-6">Gym</label>
                                                                            <input id="check-7" type="checkbox" name="check">
                                                                            <label for="check-7">Alarm</label>
                                                                            <input id="check-8" type="checkbox" name="check">
                                                                            <label for="check-8">Window Covering</label>
                                                                        </div>
                                                                        <!-- Checkboxes / End -->
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                        <!-- Checkboxes -->
                                                                        <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                            <input id="check-9" type="checkbox" name="check">
                                                                            <label for="check-9">WiFi</label>
                                                                            <input id="check-10" type="checkbox" name="check">
                                                                            <label for="check-10">TV Cable</label>
                                                                            <input id="check-11" type="checkbox" name="check">
                                                                            <label for="check-11">Dryer</label>
                                                                            <input id="check-12" type="checkbox" name="check">
                                                                            <label for="check-12">Microwave</label>
                                                                            <input id="check-13" type="checkbox" name="check">
                                                                            <label for="check-13">Washer</label>
                                                                            <input id="check-14" type="checkbox" name="check">
                                                                            <label for="check-14">Refrigerator</label>
                                                                            <input id="check-15" type="checkbox" name="check">
                                                                            <label for="check-15">Outdoor Shower</label>
                                                                        </div>
                                                                        <!-- Checkboxes / End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tabs_2">
                                                    <div class="rld-main-search">
                                                        <div class="row">
                                                            <div class="rld-single-input">
                                                                <input type="text" placeholder="Enter Keyword...">
                                                            </div>
                                                            <div class="rld-single-select ml-22">
                                                                <select class="select single-select">
                                                                    <option value="1">Property Type</option>
                                                                    <option value="2">Family House</option>
                                                                    <option value="3">Apartment</option>
                                                                    <option value="3">Condo</option>
                                                                </select>
                                                            </div>
                                                            <div class="rld-single-select">
                                                                <select class="select single-select mr-0">
                                                                    <option value="1">Location</option>
                                                                    <option value="2">Los Angeles</option>
                                                                    <option value="3">Chicago</option>
                                                                    <option value="3">Philadelphia</option>
                                                                    <option value="3">San Francisco</option>
                                                                    <option value="3">Miami</option>
                                                                    <option value="3">Houston</option>
                                                                </select>
                                                            </div>
                                                            <div class="dropdown-filter"><span>Advanced Search</span></div>
                                                            <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                                <a class="btn btn-yellow" href="#">Search Now</a>
                                                            </div>
                                                            <div class="explore__form-checkbox-list full-filter">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                                        <!-- Form Property Status -->
                                                                        <div class="form-group categories">
                                                                            <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                                                <ul class="list">
                                                                                    <li data-value="1" class="option selected ">For Sale</li>
                                                                                    <li data-value="2" class="option">For Rent</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!--/ End Form Property Status -->
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                                        <!-- Form Bedrooms -->
                                                                        <div class="form-group beds">
                                                                            <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                                                <ul class="list">
                                                                                    <li data-value="1" class="option selected">1</li>
                                                                                    <li data-value="2" class="option">2</li>
                                                                                    <li data-value="3" class="option">3</li>
                                                                                    <li data-value="3" class="option">4</li>
                                                                                    <li data-value="3" class="option">5</li>
                                                                                    <li data-value="3" class="option">6</li>
                                                                                    <li data-value="3" class="option">7</li>
                                                                                    <li data-value="3" class="option">8</li>
                                                                                    <li data-value="3" class="option">9</li>
                                                                                    <li data-value="3" class="option">10</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!--/ End Form Bedrooms -->
                                                                    </div>
                                                                    <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                                                        <!-- Form Bathrooms -->
                                                                        <div class="form-group bath">
                                                                            <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                                                <ul class="list">
                                                                                    <li data-value="1" class="option selected">1</li>
                                                                                    <li data-value="2" class="option">2</li>
                                                                                    <li data-value="3" class="option">3</li>
                                                                                    <li data-value="3" class="option">4</li>
                                                                                    <li data-value="3" class="option">5</li>
                                                                                    <li data-value="3" class="option">6</li>
                                                                                    <li data-value="3" class="option">7</li>
                                                                                    <li data-value="3" class="option">8</li>
                                                                                    <li data-value="3" class="option">9</li>
                                                                                    <li data-value="3" class="option">10</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <!--/ End Form Bathrooms -->
                                                                    </div>
                                                                    <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                        <!-- Price Fields -->
                                                                        <div class="main-search-field-2">
                                                                            <!-- Area Range -->
                                                                            <div class="range-slider">
                                                                                <label>Area Size</label>
                                                                                <div id="area-range-rent" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <br>
                                                                            <!-- Price Range -->
                                                                            <div class="range-slider">
                                                                                <label>Price Range</label>
                                                                                <div id="price-range-rent" data-min="0" data-max="600000" data-unit="$"></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                        <!-- Checkboxes -->
                                                                        <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                            <input id="check-16" type="checkbox" name="check">
                                                                            <label for="check-16">Air Conditioning</label>
                                                                            <input id="check-17" type="checkbox" name="check">
                                                                            <label for="check-17">Swimming Pool</label>
                                                                            <input id="check-18" type="checkbox" name="check">
                                                                            <label for="check-18">Central Heating</label>
                                                                            <input id="check-19" type="checkbox" name="check">
                                                                            <label for="check-19">Laundry Room</label>
                                                                            <input id="check-20" type="checkbox" name="check">
                                                                            <label for="check-20">Gym</label>
                                                                            <input id="check-21" type="checkbox" name="check">
                                                                            <label for="check-21">Alarm</label>
                                                                            <input id="check-22" type="checkbox" name="check">
                                                                            <label for="check-22">Window Covering</label>
                                                                        </div>
                                                                        <!-- Checkboxes / End -->
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                        <!-- Checkboxes -->
                                                                        <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                            <input id="check-23" type="checkbox" name="check">
                                                                            <label for="check-23">WiFi</label>
                                                                            <input id="check-24" type="checkbox" name="check">
                                                                            <label for="check-24">TV Cable</label>
                                                                            <input id="check-25" type="checkbox" name="check">
                                                                            <label for="check-25">Dryer</label>
                                                                            <input id="check-26" type="checkbox" name="check">
                                                                            <label for="check-26">Microwave</label>
                                                                            <input id="check-27" type="checkbox" name="check">
                                                                            <label for="check-27">Washer</label>
                                                                            <input id="check-28" type="checkbox" name="check">
                                                                            <label for="check-28">Refrigerator</label>
                                                                            <input id="check-29" type="checkbox" name="check">
                                                                            <label for="check-29">Outdoor Shower</label>
                                                                        </div>
                                                                        <!-- Checkboxes / End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Search Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END HEADER SEARCH -->

            <!-- START SECTION POPULAR PLACES -->
            <section class="feature-categories bg-white rec-pro">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Popular </span>Places</h2>
                        <p>Properties In Most Popular Places.</p>
                    </div>
                    <div class="row">
                        <!-- Single category -->
                        <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                            <div class="small-category-2">
                                <div class="small-category-2-thumb img-1">
                                    <a href="properties-map.html"><img src="images/popular-places/12.jpg" alt=""></a>
                                </div>
                                <div class="sc-2-detail">
                                    <h4 class="sc-jb-title"><a href="properties-map.html">New York</a></h4>
                                    <span>203 Properties</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single category -->
                        <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                            <div class="small-category-2">
                                <div class="small-category-2-thumb img-2">
                                    <a href="properties-map.html"><img src="images/popular-places/13.jpg" alt=""></a>
                                </div>
                                <div class="sc-2-detail">
                                    <h4 class="sc-jb-title"><a href="properties-map.html">Los Angeles</a></h4>
                                    <span>307 Properties</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single category -->
                        <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                            <div class="small-category-2">
                                <div class="small-category-2-thumb img-3">
                                    <a href="properties-map.html"><img src="images/popular-places/14.jpg" alt=""></a>
                                </div>
                                <div class="sc-2-detail">
                                    <h4 class="sc-jb-title"><a href="properties-map.html">San Francisco</a></h4>
                                    <span>409 Properties</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single category -->
                        <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                            <div class="small-category-2">
                                <div class="small-category-2-thumb img-3">
                                    <a href="properties-map.html"><img src="images/popular-places/9.jpg" alt=""></a>
                                </div>
                                <div class="sc-2-detail">
                                    <h4 class="sc-jb-title"><a href="properties-map.html">Atlanta</a></h4>
                                    <span>409 Properties</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single category -->
                        <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                            <div class="small-category-2 mob-mt">
                                <div class="small-category-2-thumb img-8">
                                    <a href="properties-map.html"><img src="images/popular-places/15.jpg" alt=""></a>
                                </div>
                                <div class="sc-2-detail">
                                    <h4 class="sc-jb-title"><a href="properties-map.html">Miami</a></h4>
                                    <span>145 Properties</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single category -->
                        <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="250">
                            <div class="small-category-2">
                                <div class="small-category-2-thumb img-10">
                                    <a href="properties-map.html"><img src="images/popular-places/10.jpg" alt=""></a>
                                </div>
                                <div class="sc-2-detail">
                                    <h4 class="sc-jb-title"><a href="properties-map.html">Chicago</a></h4>
                                    <span>112 Properties</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single category -->
                        <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="350">
                            <div class="small-category-2 si-mt">
                                <div class="small-category-2-thumb img-11">
                                    <a href="properties-map.html"><img src="images/popular-places/5.jpg" alt=""></a>
                                </div>
                                <div class="sc-2-detail">
                                    <h4 class="sc-jb-title"><a href="properties-map.html">Houston</a></h4>
                                    <span>254 Properties</span>
                                </div>
                            </div>
                        </div>
                        <!-- Single category -->
                        <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="450">
                            <div class="small-category-2 no-mb si-mt">
                                <div class="small-category-2-thumb img-11">
                                    <a href="properties-map.html"><img src="images/popular-places/6.jpg" alt=""></a>
                                </div>
                                <div class="sc-2-detail">
                                    <h4 class="sc-jb-title"><a href="properties-map.html">Orlando</a></h4>
                                    <span>254 Properties</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </section>
            <!-- END SECTION POPULAR PLACES -->

            <!-- START SECTION FEATURED PROPERTIES -->
            <section class="featured portfolio bg-white-2 rec-pro full-l">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Featured </span>Properties</h2>
                        <p>These are our featured properties</p>
                    </div>
                    <div class="row portfolio-items">
                        <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                            <div class="project-single" data-aos="fade-right">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                         <a href="single-property-1.html">$ 150,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people rent">
                            <div class="project-single" data-aos="fade-left">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                         <a href="single-property-1.html">$ 150,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people landscapes sale">
                            <div class="project-single" data-aos="fade-right">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                         <a href="single-property-1.html">$ 150,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people landscapes rent no-pb">
                            <div class="project-single no-mb" data-aos="fade-left">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="images/feature-properties/fp-10.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="properties-details.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                         <a href="single-property-1.html">$ 150,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 people sale no-pb">
                            <div class="project-single no-mb" data-aos="fade-right">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <img src="images/feature-properties/fp-11.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                         <a href="single-property-1.html">$ 150,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 it2 web rent no-pb">
                            <div class="project-single no-mb last" data-aos="fade-left">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="single-property-1.html" class="homes-img">
                                            <div class="homes-tag button sale rent">For Rent</div>
                                            <img src="images/feature-properties/fp-12.jpg" alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">Real Luxury Family House Villa</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>6 Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>720 sq ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                         <a href="single-property-1.html">$ 150,000</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-all">
                        <a href="properties-full-grid-1.html" class="btn btn-outline-light">View More</a>
                    </div>
                </div>
            </section>
            <!-- END SECTION FEATURED PROPERTIES -->

            <!-- START SECTION WHY CHOOSE US -->
            <section class="how-it-works bg-white rec-pro">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Why </span>Choose Us</h2>
                        <p>We provide full service at every step.</p>
                    </div>
                    <div class="row service-1">
                        <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                            <div class="serv-flex">
                                <div class="art-1 img-13">
                                    <img src="images/icons/icon-4.svg" alt="">
                                    <h3>Wide Renge Of Properties</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                        <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                            <div class="serv-flex">
                                <div class="art-1 img-14">
                                    <img src="images/icons/icon-5.svg" alt="">
                                    <h3>Trusted by thousands</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                        <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                            <div class="serv-flex arrow">
                                <div class="art-1 img-15">
                                    <img src="images/icons/icon-6.svg" alt="">
                                    <h3>Financing made easy</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                        <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                            <div class="serv-flex">
                                <div class="art-1 img-14">
                                    <img src="images/icons/icon-15.svg" alt="">
                                    <h3>We are here near you</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!-- END SECTION WHY CHOOSE US -->

            <!-- START SECTION RECENTLY PROPERTIES -->
            <section class="featured portfolio rec-pro disc">
                <div class="container-fluid">
                    <div class="sec-title discover">
                        <h2><span>Discover </span>Popular Properties</h2>
                        <p>We provide full service at every step.</p>
                    </div>
                    <div class="portfolio col-xl-12">
                        <div class="slick-lancers">
                            <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                                <div class="landscapes">
                                    <div class="project-single">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button alt featured">Featured</div>
                                                    <div class="homes-tag button alt sale">For Sale</div>
                                                    <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="single-property-1.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                </a>
                                            </p>
                                            <!-- homes List -->
                                            <ul class="homes-list clearfix pb-3">
                                                <li class="the-icons">
                                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                    <span>6 Bedrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                    <span>3 Bathrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                    <span>720 sq ft</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                    <span>2 Garages</span>
                                                </li>
                                            </ul>
                                            <div class="price-properties footer pt-3 pb-0">
                                                <h3 class="title mt-3">
                                                    <a href="single-property-1.html">$ 350,000</a>
                                                </h3>
                                                <div class="compare">
                                                    <a href="#" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                    <a href="#" title="Share">
                                                        <i class="flaticon-share"></i>
                                                    </a>
                                                    <a href="#" title="Favorites">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-grid" data-aos="fade-up" data-aos-delay="250">
                                <div class="people">
                                    <div class="project-single">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button sale rent">For Rent</div>
                                                    <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="single-property-1.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                </a>
                                            </p>
                                            <!-- homes List -->
                                            <ul class="homes-list clearfix pb-3">
                                                <li class="the-icons">
                                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                    <span>6 Bedrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                    <span>3 Bathrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                    <span>720 sq ft</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                    <span>2 Garages</span>
                                                </li>
                                            </ul>
                                            <div class="price-properties footer pt-3 pb-0">
                                                <h3 class="title mt-3">
                                                    <a href="single-property-1.html">$ 150,000</a>
                                                </h3>
                                                <div class="compare">
                                                    <a href="#" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                    <a href="#" title="Share">
                                                        <i class="flaticon-share"></i>
                                                    </a>
                                                    <a href="#" title="Favorites">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-grid" data-aos="fade-up" data-aos-delay="350">
                                <div class="people landscapes no-pb pbp-3">
                                    <div class="project-single">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button alt sale">For Sale</div>
                                                    <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="single-property-1.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                </a>
                                            </p>
                                            <!-- homes List -->
                                            <ul class="homes-list clearfix pb-3">
                                                <li class="the-icons">
                                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                    <span>6 Bedrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                    <span>3 Bathrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                    <span>720 sq ft</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                    <span>2 Garages</span>
                                                </li>
                                            </ul>
                                            <div class="price-properties footer pt-3 pb-0">
                                                <h3 class="title mt-3">
                                                    <a href="single-property-1.html">$ 350,000</a>
                                                </h3>
                                                <div class="compare">
                                                    <a href="#" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                    <a href="#" title="Share">
                                                        <i class="flaticon-share"></i>
                                                    </a>
                                                    <a href="#" title="Favorites">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-grid" data-aos="fade-up" data-aos-delay="450">
                                <div class="landscapes">
                                    <div class="project-single no-mb">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button alt featured">Featured</div>
                                                    <div class="homes-tag button sale rent">For Rent</div>
                                                    <img src="images/feature-properties/fp-10.jpg" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="properties-details.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                </a>
                                            </p>
                                            <!-- homes List -->
                                            <ul class="homes-list clearfix pb-3">
                                                <li class="the-icons">
                                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                    <span>6 Bedrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                    <span>3 Bathrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                    <span>720 sq ft</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                    <span>2 Garages</span>
                                                </li>
                                            </ul>
                                            <div class="price-properties footer pt-3 pb-0">
                                                <h3 class="title mt-3">
                                                    <a href="single-property-1.html">$ 150,000</a>
                                                </h3>
                                                <div class="compare">
                                                    <a href="#" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                    <a href="#" title="Share">
                                                        <i class="flaticon-share"></i>
                                                    </a>
                                                    <a href="#" title="Favorites">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-grid" data-aos="fade-up">
                                <div class="people">
                                    <div class="project-single no-mb">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button alt sale">For Sale</div>
                                                    <img src="images/feature-properties/fp-11.jpg" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="single-property-1.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                </a>
                                            </p>
                                            <!-- homes List -->
                                            <ul class="homes-list clearfix pb-3">
                                                <li class="the-icons">
                                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                    <span>6 Bedrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                    <span>3 Bathrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                    <span>720 sq ft</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                    <span>2 Garages</span>
                                                </li>
                                            </ul>
                                            <div class="price-properties footer pt-3 pb-0">
                                                <h3 class="title mt-3">
                                                    <a href="single-property-1.html">$ 350,000</a>
                                                </h3>
                                                <div class="compare">
                                                    <a href="#" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                    <a href="#" title="Share">
                                                        <i class="flaticon-share"></i>
                                                    </a>
                                                    <a href="#" title="Favorites">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-grid" data-aos="fade-up">
                                <div class="people landscapes no-pb pbp-3">
                                    <div class="project-single no-mb last">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button sale rent">For Rent</div>
                                                    <img src="images/feature-properties/fp-12.jpg" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="single-property-1.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                </a>
                                            </p>
                                            <!-- homes List -->
                                            <ul class="homes-list clearfix pb-3">
                                                <li class="the-icons">
                                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                    <span>6 Bedrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                    <span>3 Bathrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                    <span>720 sq ft</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                    <span>2 Garages</span>
                                                </li>
                                            </ul>
                                            <div class="price-properties footer pt-3 pb-0">
                                                <h3 class="title mt-3">
                                                    <a href="single-property-1.html">$ 150,000</a>
                                                </h3>
                                                <div class="compare">
                                                    <a href="#" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                    <a href="#" title="Share">
                                                        <i class="flaticon-share"></i>
                                                    </a>
                                                    <a href="#" title="Favorites">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-grid" data-aos="fade-up">
                                <div class="landscapes">
                                    <div class="project-single">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button alt featured">Featured</div>
                                                    <div class="homes-tag button alt sale">For Sale</div>
                                                    <img src="images/blog/b-11.jpg" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="single-property-1.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                </a>
                                            </p>
                                            <!-- homes List -->
                                            <ul class="homes-list clearfix pb-3">
                                                <li class="the-icons">
                                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                    <span>6 Bedrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                    <span>3 Bathrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                    <span>720 sq ft</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                    <span>2 Garages</span>
                                                </li>
                                            </ul>
                                            <div class="price-properties footer pt-3 pb-0">
                                                <h3 class="title mt-3">
                                                    <a href="single-property-1.html">$ 350,000</a>
                                                </h3>
                                                <div class="compare">
                                                    <a href="#" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                    <a href="#" title="Share">
                                                        <i class="flaticon-share"></i>
                                                    </a>
                                                    <a href="#" title="Favorites">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="agents-grid" data-aos="fade-up">
                                <div class="people">
                                    <div class="project-single">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button sale rent">For Rent</div>
                                                    <img src="images/blog/b-12.jpg" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="single-property-1.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                                </a>
                                            </p>
                                            <!-- homes List -->
                                            <ul class="homes-list clearfix pb-3">
                                                <li class="the-icons">
                                                    <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                    <span>6 Bedrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                    <span>3 Bathrooms</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                    <span>720 sq ft</span>
                                                </li>
                                                <li class="the-icons">
                                                    <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                                    <span>2 Garages</span>
                                                </li>
                                            </ul>
                                            <div class="price-properties footer pt-3 pb-0">
                                                <h3 class="title mt-3">
                                                    <a href="single-property-1.html">$ 150,000</a>
                                                </h3>
                                                <div class="compare">
                                                    <a href="#" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                    <a href="#" title="Share">
                                                        <i class="flaticon-share"></i>
                                                    </a>
                                                    <a href="#" title="Favorites">
                                                        <i class="flaticon-heart"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION RECENTLY PROPERTIES -->

            <!-- START SECTION AGENTS -->
            <section class="team bg-white rec-pro">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Meet Our </span>Agents</h2>
                        <p>Our Agents are here to help you</p>
                    </div>
                    <div class="row team-all">
                        <!--Team Block-->
                        <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="150">
                            <div class="inner-box team-details">
                                <div class="image team-head">
                                    <a href="agents-listing-grid.html"><img src="images/team/t-5.jpg" alt="" /></a>
                                    <div class="team-hover">
                                        <ul class="team-social">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="agents-listing-grid.html">Carls Jhons</a></h3>
                                    <div class="designation">Real Estate Agent</div>
                                </div>
                            </div>
                        </div>
                        <!--Team Block-->
                        <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="250">
                            <div class="inner-box team-details">
                                <div class="image team-head">
                                    <a href="agents-listing-grid.html"><img src="images/team/t-6.jpg" alt="" /></a>
                                    <div class="team-hover">
                                        <ul class="team-social">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="agents-listing-grid.html">Arling Tracy</a></h3>
                                    <div class="designation">Real Estate Agent</div>
                                </div>
                            </div>
                        </div>
                        <!--Team Block-->
                        <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2" data-aos="fade-up" data-aos-delay="350">
                            <div class="inner-box team-details">
                                <div class="image team-head">
                                    <a href="agents-listing-grid.html"><img src="images/team/t-7.jpg" alt="" /></a>
                                    <div class="team-hover">
                                        <ul class="team-social">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="agents-listing-grid.html">Mark Web</a></h3>
                                    <div class="designation">Real Estate Agent</div>
                                </div>
                            </div>
                        </div>
                        <!--Team Block-->
                        <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="450">
                            <div class="inner-box team-details">
                                <div class="image team-head">
                                    <a href="agents-listing-grid.html"><img src="images/team/t-8.jpg" alt="" /></a>
                                    <div class="team-hover">
                                        <ul class="team-social">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="agents-listing-grid.html">Katy Grace</a></h3>
                                    <div class="designation">Real Estate Agent</div>
                                </div>
                            </div>
                        </div>
                        <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="550">
                            <div class="inner-box team-details">
                                <div class="image team-head">
                                    <a href="agents-listing-grid.html"><img src="images/team/team-image-2.jpg" alt="" /></a>
                                    <div class="team-hover">
                                        <ul class="team-social">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="agents-listing-grid.html">Chris Melo</a></h3>
                                    <div class="designation">Real Estate Agent</div>
                                </div>
                            </div>
                        </div>
                        <div class="team-block col-sm-6 col-md-4 col-lg-4 col-xl-2 pb-none" data-aos="fade-up" data-aos-delay="650">
                            <div class="inner-box team-details">
                                <div class="image team-head">
                                    <a href="agents-listing-grid.html"><img src="images/team/team-image-7.jpg" alt="" /></a>
                                    <div class="team-hover">
                                        <ul class="team-social">
                                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                            <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="lower-box">
                                    <h3><a href="agents-listing-grid.html">Nina Thomas</a></h3>
                                    <div class="designation">Real Estate Agent</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION AGENTS -->

            <!-- START SECTION TESTIMONIALS -->
            <section class="testimonials bg-white-2 rec-pro">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Clients </span>Testimonials</h2>
                        <p>We collect reviews from our customers.</p>
                    </div>
                    <div class="owl-carousel job_clientSlide">
                        <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-1.jpg" alt=""/></span>
                                <h5>Lisa Smith</h5>
                                <p>New York</p>
                            </div>
                        </div>
                        <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="250">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-2.jpg" alt=""/></span>
                                <h5>Jhon Morris</h5>
                                <p>Los Angeles</p>
                            </div>
                        </div>
                        <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="350">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-3.jpg" alt=""/></span>
                                <h5>Mary Deshaw</h5>
                                <p>Chicago</p>
                            </div>
                        </div>
                        <div class="singleJobClinet">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-4.jpg" alt=""/></span>
                                <h5>Gary Steven</h5>
                                <p>Philadelphia</p>
                            </div>
                        </div>
                        <div class="singleJobClinet">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-5.jpg" alt=""/></span>
                                <h5>Cristy Mayer</h5>
                                <p>San Francisco</p>
                            </div>
                        </div>
                        <div class="singleJobClinet">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-6.jpg" alt=""/></span>
                                <h5>Ichiro Tasaka</h5>
                                <p>Houston</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION TESTIMONIALS -->

            <!-- STAR SECTION PARTNERS -->
            <div class="partners bg-white rec-pro">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Our </span>Partners</h2>
                        <p>The Companies That Represent Us.</p>
                    </div>
                    <div class="owl-carousel style2">
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/14.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/15.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/16.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/17.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
                    </div>
                </div>
            </div>
            <!-- END SECTION PARTNERS -->

            <!-- START FOOTER -->
            <footer class="first-footer rec-pro">
                <div class="top-footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="netabout">
                                    <a href="index.html" class="logo">
                                        <img src="images/logo-footer.svg" alt="netcom">
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                                </div>
                                <div class="contactus">
                                    <ul>
                                        <li>
                                            <div class="info">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <p class="in-p">95 South Park Avenue, USA</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                                <p class="in-p">+456 875 369 208</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                                <p class="in-p ti">support@findhouses.com</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="navigation">
                                    <h3>Navigation</h3>
                                    <div class="nav-footer">
                                        <ul>
                                            <li><a href="index.html">Home One</a></li>
                                            <li><a href="properties-right-sidebar.html">Properties Right</a></li>
                                            <li><a href="properties-full-list.html">Properties List</a></li>
                                            <li><a href="properties-details.html">Property Details</a></li>
                                            <li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li>
                                        </ul>
                                        <ul class="nav-right">
                                            <li><a href="agent-details.html">Agents Details</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="blog.html">Blog Default</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="widget">
                                    <h3>Twitter Feeds</h3>
                                    <div class="twitter-widget contuct">
                                        <div class="twitter-area">
                                            <div class="single-item">
                                                <div class="icon-holder">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                    <h4>about 5 days ago</h4>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="icon-holder">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                    <h4>about 5 days ago</h4>
                                                </div>
                                            </div>
                                            <div class="single-item">
                                                <div class="icon-holder">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </div>
                                                <div class="text">
                                                    <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                                    <h4>about 5 days ago</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="newsletters">
                                    <h3>Newsletters</h3>
                                    <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in your inbox.</p>
                                </div>
                                <form class="bloq-email mailchimp form-inline" method="post">
                                    <label for="subscribeEmail" class="error"></label>
                                    <div class="email">
                                        <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                                        <input type="submit" value="Subscribe">
                                        <p class="subscription-success"></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="second-footer rec-pro">
                    <div class="container-fluid sd-f">
                        <p>2021 © Copyright - All Rights Reserved.</p>
                        <ul class="netsocials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>

            <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
            <!-- END FOOTER -->

            <!--register form -->
            <div class="login-and-register-form modal">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <p>Login</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>Or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform">
                                            <label>Username or Email Address * </label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password * </label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-contents">
                                        <div class="custom-form">
                                            <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                                <label>First Name * </label>
                                                <input name="name" type="text" onClick="this.select()" value="">
                                                <label>Second Name *</label>
                                                <input name="name2" type="text" onClick="this.select()" value="">
                                                <label>Email Address *</label>
                                                <input name="email" type="text" onClick="this.select()" value="">
                                                <label>Password *</label>
                                                <input name="password" type="password" onClick="this.select()" value="">
                                                <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--register form end -->

            <!-- START PRELOADER -->
            <div id="preloader">
                <div id="status">
                    <div class="status-mes"></div>
                </div>
            </div>
            <!-- END PRELOADER -->

            <!-- ARCHIVES JS -->
            <script src="{{asset('seller/js/jquery-3.5.1.min.js')}}"></script>
            <script src="{{asset('seller/js/rangeSlider.js')}}"></script>
            <script src="{{asset('seller/js/tether.min.js')}}"></script>
            <script src="{{asset('seller/js/moment.js')}}"></script>
            <script src="{{asset('seller/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('seller/js/mmenu.min.js')}}"></script>
            <script src="{{asset('seller/js/mmenu.js')}}"></script>
            <script src="{{asset('seller/js/aos.js')}}"></script>
            <script src="{{asset('seller/js/aos2.js')}}"></script>
            <script src="{{asset('seller/js/animate.js')}}"></script>
            <script src="{{asset('seller/js/slick.min.js')}}"></script>
            <script src="{{asset('seller/js/fitvids.js')}}"></script>
            <script src="{{asset('seller/js/jquery.waypoints.min.js')}}"></script>
            <script src="{{asset('seller/js/typed.min.js')}}"></script>
            <script src="{{asset('seller/js/jquery.counterup.min.js')}}"></script>
            <script src="{{asset('seller/js/imagesloaded.pkgd.min.js')}}"></script>
            <script src="{{asset('seller/js/isotope.pkgd.min.js')}}"></script>
            <script src="{{asset('seller/js/smooth-scroll.min.js')}}"></script>
            <script src="{{asset('seller/js/lightcase.js')}}"></script>
            <script src="{{asset('seller/js/search.js')}}j"></script>
            <script src="{{asset('seller/js/owl.carousel.js')}}"></script>
            <script src="{{asset('seller/js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('seller/js/ajaxchimp.min.js')}}"></script>
            <script src="{{asset('seller/js/newsletter.js')}}"></script>
            <script src="{{asset('seller/js/jquery.form.js')}}"></script>
            <script src="{{asset('seller/js/jquery.validate.min.js')}}"></script>
            <script src="{{asset('seller/js/searched.js')}}"></script>
            <script src="{{asset('seller/js/forms-2.js')}}"></script>
            <script src="{{asset('seller/js/map-style2.js')}}"></script>
            <script src="{{asset('seller/js/range/js')}}"></script>
            <script src="{{asset('seller/js/color-switcher.js')}}"></script>
            <script>
                $(window).on('scroll load', function() {
                    $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
                });

            </script>

            <!-- Slider Revolution scripts -->
            <script src="{{asset('seller/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
            <script src="{{asset('seller/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

            <script>
                var typed = new Typed('.typed', {
                    strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
                    smartBackspace: false,
                    loop: true,
                    showCursor: true,
                    cursorChar: "|",
                    typeSpeed: 50,
                    backSpeed: 30,
                    startDelay: 800
                });

            </script>

            <script>
                $('.slick-lancers').slick({
                    infinite: false,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    adaptiveHeight: true,
                    responsive: [{
                        breakpoint: 1292,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: true,
                            arrows: false
                        }
                    }, {
                        breakpoint: 993,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: true,
                            arrows: false
                        }
                    }, {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                            arrows: false
                        }
                    }]
                });

            </script>

            <script>
                $('.job_clientSlide').owlCarousel({
                    items: 2,
                    loop: true,
                    margin: 30,
                    autoplay: false,
                    nav: true,
                    smartSpeed: 1000,
                    slideSpeed: 1000,
                    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        991: {
                            items: 3
                        }
                    }
                });

            </script>

            <script>
                $('.style2').owlCarousel({
                    loop: true,
                    margin: 0,
                    dots: false,
                    autoWidth: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    responsive: {
                        0: {
                            items: 2,
                            margin: 20
                        },
                        400: {
                            items: 2,
                            margin: 20
                        },
                        500: {
                            items: 3,
                            margin: 20
                        },
                        768: {
                            items: 4,
                            margin: 20
                        },
                        992: {
                            items: 5,
                            margin: 20
                        },
                        1000: {
                            items: 7,
                            margin: 20
                        }
                    }
                });

            </script>

            <script>
                $(".dropdown-filter").on('click', function() {

                    $(".explore__form-checkbox-list").toggleClass("filter-block");

                });

            </script>

            <!-- MAIN JS -->
            <script src={{asset('seller/js/script.js')}}></script>

        </div>
        <!-- Wrapper / End -->
    </body>

</html>
