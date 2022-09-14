<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('cliente/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('cliente/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/font-awesome.min.css') }}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('cliente/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/dashbord-mobile-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/styles.css') }}">
    <script src="https://kit.fontawesome.com/72ed50f906.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" id="color" href="{{ asset('cliente/css/default.css') }}">
</head>

<body class="maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            @include('cliente.body.header')
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                            <div class="sidebar-header"><img src="images/logo-blue.svg" alt="header-logo2.png">
                            </div>
                            <div class="header clearfix">
                                <img src="images/testimonials/ts-1.jpg" alt="avatar" class="img-fluid profile-img">
                            </div>
                            <div class="active-user">
                                <h2>Mary Smith</h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a href="dashboard.html">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="user-profile.html">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="my-listings.html">
                                            <i class="fa fa-list" aria-hidden="true"></i>My Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="favorited-listings.html">
                                            <i class="fa fa-heart" aria-hidden="true"></i>Favorited Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-property.html">
                                            <i class="fa fa-list" aria-hidden="true"></i>Add Property
                                        </a>
                                    </li>
                                    <li>
                                        <a href="payment-method.html">
                                            <i class="fas fa-credit-card"></i>Payments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoice.html">
                                            <i class="fas fa-paste"></i>Invoices
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.html">
                                            <i class="fa fa-lock"></i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <i class="fas fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-2 offset-md-3">
                        <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i>
                                        Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a href="dashboard.html">
                                                <i class="fa fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="user-profile.html">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="my-listings.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorited-listings.html">
                                                <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited
                                                Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="add-property.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                        <li>
                                            <a href="payment-method.html">
                                                <i class="fas fa-credit-card mr-3"></i>Payments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="invoice.html">
                                                <i class="fas fa-paste mr-3"></i>Invoices
                                            </a>
                                        </li>
                                        <li>
                                            <a href="change-password.html">
                                                <i class="fa fa-lock mr-3"></i>Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html">
                                                <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @yield('seller-dashboard')
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION USER PROFILE -->

        <div class="second-footer ad mt-3">
            <div class="container">
                <p>2021 © Copyright - All Rights Reserved.</p>
                <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By Code-Theme</p>
            </div>
        </div>

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="{{ asset('cliente/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('cliente/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('cliente/js/tether.min.js') }}"></script>
        <script src="{{ asset('cliente/js/moment.js') }}"></script>
        <script src="{{ asset('cliente/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('cliente/js/mmenu.min.js') }}"></script>
        <script src="{{ asset('cliente/js/mmenu.js') }}"></script>
        <script src="{{ asset('cliente/js/swiper.min.js') }}"></script>
        <script src="{{ asset('cliente/js/swiper.js') }}"></script>
        <script src="{{ asset('cliente/js/slick.min.js') }}"></script>
        <script src="{{ asset('cliente/js/slick2.js') }}"></script>
        <script src="{{ asset('cliente/js/fitvids.js') }}"></script>
        <script src="{{ asset('cliente/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('cliente/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('cliente/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('cliente/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('cliente/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('cliente/js/lightcase.js') }}"></script>
        <script src="{{ asset('cliente/js/search.js') }}"></script>
        <script src="{{ asset('cliente/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('cliente/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('cliente/js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('cliente/js/newsletter.js') }}"></script>
        <script src="{{ asset('cliente/js/jquery.form.js') }}"></script>
        <script src="{{ asset('cliente/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('cliente/js/searched.js') }}"></script>
        <script src="{{ asset('cliente/js/dashbord-mobile-menu.js') }}"></script>
        <script src="{{ asset('cliente/js/forms-2.js') }}"></script>
        <script src="{{ asset('cliente/js/color-switcher.js') }}"></script>

        <!-- MAIN JS -->
        <script src="{{ asset('cliente/js/script.js') }}"></script>

        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });
        </script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>
