<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Registro Vendedor</title>
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



        <!-- START SELLER SIDEBAR -->
        @include('sellers.sidebar')
        <!-- END SELLER SIDEBAR -->
        <div class="mx-auto">
            @yield('sellers-registro')

        </div>


        <div class="second-footer">
            <div class="container">
                <div class="flex-bottom"></div>
                <p>2022 Banpro © Copyright - Todos los derechos reservados.</p>
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
