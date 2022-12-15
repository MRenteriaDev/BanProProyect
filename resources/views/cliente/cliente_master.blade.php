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
    <link rel="icon" href="{{ asset('cliente/images/123.png') }}" />
    <!-- ARCHIVES CSS -->
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
    <link rel="stylesheet" id="color" href="{{ asset('cliente/css/default.css') }}">
    {{-- Toast R --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    {{-- ADMIN --}}
    {{-- Tabs --}}
    {{-- Font Awesome icon --}}


    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/daterangepicker/daterangepicker.css') }}">



 {{-- ADMIN --}}

</head>

<body class="homepage-9 hp-6 homepage-1">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('cliente.body.header')
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        @yield('cliente')

        <!-- ARCHIVES JS -->
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

        {{-- ADMIN --}}


        <!-- Data table -->
        <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jszip/jszip.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
        <script src="{{ asset('admin/plugins/plugins/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
        <script src="{{ asset('admin/js/pages/dashboard2.js') }}"></script>
        <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>

        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "pageLength" : 5,
                     "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    pageLength : 5,
                     lengthMenu: [[5, 10, 20, -1], [5, 10, 20, 'Todos']],
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- Template Main JS File -->

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
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            $(function() {
                $(document).on('click', "#delete", function(e) {
                    e.preventDefault();
                    var link = $(this).attr("href");
                    Swal.fire({
                        title: 'Estás Seguro?',
                        text: "Esta Acción no se puede anular!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Sí, Eliminar!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link;
                            Swal.fire(
                                'Deleted!',
                                'Your data has been deleted.',
                                'success'
                            )
                        }
                    })
                })
            })
        </script>
        <script>
            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            })
        </script>

        {{-- ADMIN --}}


        <!-- start dropdwon yt -->



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


        <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- MAIN JS -->
        <script src="{{ asset('cliente/js/script.js') }}j"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- Template Main JS File -->

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
