<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>BAN PRO</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('cliente/css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('cliente/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/font-awesome.min.css') }}">
    <script src="https://kit.fontawesome.com/72ed50f906.js" crossorigin="anonymous"></script>
     <!-- Page Icon -->
     <link rel="icon" href="{{ asset('cliente/images/123.png') }}"/>
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('cliente/css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/aos2.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/owl-carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('cliente/css/maps.css') }}">
    <link rel="stylesheet" id="color" href="{{asset('cliente/css/default.css')}}">
</head>

@yield('clienteherencia')

<script src="{{ asset('cliente/js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('cliente/js/rangeSlider.js') }}"></script>
        <script src="{{ asset('cliente/js/tether.min.js') }}"></script>
        <script src="{{ asset('cliente/js/moment.js') }}"></script>
        <script src="{{ asset('cliente/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('cliente/js/mmenu.min.js') }}"></script>
        <script src="{{ asset('cliente/js/mmenu.js') }}"></script>
        <script src="{{ asset('cliente/js/aos.js') }}"></script>
        <script src="{{ asset('cliente/js/aos2.js') }}"></script>
        <script src="{{ asset('cliente/js/animate.js') }}"></script>
        <script src="{{ asset('cliente/js/slick.min.js') }}"></script>
        <script src="{{ asset('cliente/js/fitvids.js') }}"></script>
        <script src="{{ asset('cliente/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('cliente/js/typed.min.js') }}"></script>
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
        <script src="{{ asset('cliente/js/forms-2.js') }}"></script>
        <script src="{{ asset('cliente/js/map-style2.js') }}"></script>
        <script src="{{ asset('cliente/js/range.js') }}"></script>
        <script src="{{ asset('cliente/js/color-switcher.js') }}"></script>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });
        </script>

        <!-- Slider Revolution scripts -->
        <script src="{{ asset('cliente/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('cliente/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

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
        <script src="{{ asset('cliente/js/script.js') }}j"></script>
</html>
