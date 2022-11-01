@extends('cliente.body.cliente_herencia')

@section('clienteherencia')
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Contact Us</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('cliente/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cliente/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cliente/css/font-awesome.min.css')}}">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{ asset('cliente/css/leaflet.css')}}">
    <link rel="stylesheet" href="{{ asset('cliente/css/leaflet-gesture-handling.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cliente/css/leaflet.markercluster.css')}}">
    <link rel="stylesheet" href="{{ asset('cliente/css/leaflet.markercluster.default.css')}}">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('cliente/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('cliente/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{ asset('cliente/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cliente/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('cliente/css/menu.css')}}">
    <link rel="stylesheet" href="{{ asset('cliente/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{ asset('cliente/css/default.css')}}">
</head>

<body class="inner-pages listing homepage-4 agents">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        @include('cliente.body.header')
        <div class="clearfix"></div>
        <br>
        <br><br>
        <!-- Header Container / End -->
        <!-- END SECTION HEADINGS -->



        <!-- START SECTION CONTACT US -->
        <section class="contact-us">
            <div class="container">
                <div class="property-location mb-5">
                    <h3>Nuestra locacion</h3>
                    <div class="divider-fade"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13943.081115978002!2d-110.97073396842316!3d29.112462630154635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86ce877bf69c20e1%3A0x31327e7e36dfa21b!2sclinica%20shaddai!5e0!3m2!1sen!2smx!4v1664506806647!5m2!1sen!2smx" width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <h3 class="mb-4">Contactanos</h3>
                            <form  class="contact-form" name="contactform" method="POST" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" required class="form-control input-custom input-full" name="nombre" placeholder="Nombres">
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="form-control input-custom input-full" name="apellido" placeholder="Apellidos">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-custom input-full" name="correo" placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control textarea-custom input-full" id="ccomment" name="mensaje" required rows="8" placeholder="Mensaje"></textarea>
                                </div>
                                <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Aceptar</button>
                            </form>
                        </div>


                    <div class="col-lg-4 col-md-12 bgc">
                        <div class="call-info">
                            <h3>Detalles De Contacto</h3>
                            <p class="mb-5">Contactanos Ahora!</p>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">Benito Juarez y Tamaulpias #65</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">6628794654
                                        </p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">soporte@Banpro.com</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info cll">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION CONTACT US -->

        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="second-footer">
                <div class="container">
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


        <!-- ARCHIVES JS -->
        <script src="{{ asset('cliente/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{ asset('cliente/js/tether.min.js')}}"></script>
        <script src="{{ asset('cliente/js/popper.min.js')}}"></script>
        <script src="{{ asset('cliente/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('cliente/js/mmenu.min.js')}}"></script>
        <script src="{{ asset('cliente/js/mmenu.js')}}"></script>
        <script src="{{ asset('cliente/js/jquery.form.js')}}"></script>
        <script src="{{ asset('cliente/js/jquery.validate.min.js')}}"></script>
        <script src="{{ asset('cliente/js/smooth-scroll.min.js')}}"></script>
        <script src="{{ asset('cliente/js/forms.js')}}"></script>
        <script src="{{ asset('cliente/js/ajaxchimp.min.js')}}"></script>
        <script src="{{ asset('cliente/js/newsletter.js')}}"></script>
        <script src="{{ asset('cliente/js/leaflet.js')}}"></script>
        <script src="{{ asset('cliente/js/leaflet-gesture-handling.min.js.map')}}"></script>
        <script src="{{ asset('cliente/js/leaflet-providers.js')}}"></script>
        <script src="{{ asset('cliente/js/leaflet.markercluster.js')}}"></script>
        <script src="{{ asset('cliente/js/map-single.js')}}"></script>
        <script src="{{ asset('cliente/js/color-switcher.js')}}"></script>
        <script src="{{ asset('cliente/js/inner.js')}}"></script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>




@endsection

@section('js')

<script>
    var i = 0;
var images = [];
var slideTime = 3000; // 3 seconds

images[0] = '/propiedades_documentos/thumb/asdasd-documento-1663127810107.jpg';
images[1] = '/propiedades_documentos/thumb/asdasd-documento-1663127810107.jpg';
images[2] = '/propiedades_documentos/thumb/asdasd-documento-1663127810107.jpg';

function changePicture() {
    document.body.style.backgroundImage = "url(" + images[i] + ")";

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout(changePicture, slideTime);
}

window.onload = changePicture;

</script>

@endsection
