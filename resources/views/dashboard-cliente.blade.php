<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Ban Pro</title>
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
        @php
            $currentURL = url()->current();
        @endphp

        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                            <div class="img-fluid"><img src="{{ asset('cliente/images/logo-white-1.png') }}">
                            </div>

                            <div class="header clearfix">
                                {{-- <img alt="avatar" class="img-fluid profile-img"
                                            src="{{ asset('/fotos_documentos/' . $user->avatar) }}" /> --}}
                            </div>
                            <div class="active-user">
                                {{-- <h2>{{ $user->name }}</h2> --}}
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    @if ($currentURL == 'http://127.0.0.1:8000/dashboard')
                                        <li>
                                            <a class="active" href="{{ route('dashboard') }}">
                                                <i class="fa fa-user"></i>Perfil
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('dashboard') }}">
                                                <i class="fa fa-user"></i>Perfil
                                            </a>
                                        </li>
                                    @endif

                                    @if(Auth::user()->seller_active != 1)

                                    @if ($currentURL == 'http://127.0.0.1:8000/payments')
                                        <li>
                                            <a class="active" href="{{ route('checkout') }}">
                                                <i class="fa fa-credit-card" aria-hidden="true"></i>Completa tu registro
                                            </a>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('checkout') }}">
                                                <i class="fa fa-credit-card" aria-hidden="true"></i>Completa tu registro
                                            </a>
                                        </li>
                                    @endif

                                    @endif




                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-1 offset-md-3">
                        <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i>
                                        Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a class="active" href="{{ route('dashboard') }}">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorited-listings.html">
                                                <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited
                                                Properties
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
                        @yield('cliente-registrado-dashboard')
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION USER PROFILE -->
        <div class="second-footer ad mt-3">
            <div class="container offset-lg-1">
                <p>2022 Banpro ?? Copyright - Todos los derechos reservados.</p>

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

        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                    case 'info':
                        toastr.info(" {{ Session::get('message') }} ");
                        break;
                    case 'success':
                        toastr.success(" {{ Session::get('message') }} ");
                        break;
                    case 'warning':
                        toastr.warning(" {{ Session::get('message') }} ");
                        break;
                    case 'error':
                        toastr.error(" {{ Session::get('message') }} ");
                        break;
                }
            @endif
        </script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>
