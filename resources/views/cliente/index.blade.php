@php
    use App\Models\Propiedades;
    use App\Models\Locacion;
    use App\Models\TipoPropiedad;
    use App\Models\EstatusPropiedad;

    $principal_places = DB::table('locacions')
        ->take(5)
        ->get();
    $featured_properties = DB::table('propiedades')
        ->take(6)
        ->get();
    $recent_properties = Propiedades::latest()
        ->take(10)
        ->get();
    $sellers = DB::table('sellers')
        ->take(3)
        ->get();
    $colonias = Locacion::get();
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $tipop = TipoPropiedad::get();
    $estatusp = EstatusPropiedad::get();
    $banner = DB::table('banners')->get();

@endphp


@extends('cliente.cliente_master')
@section('cliente')


    <!-- STAR HEADER SEARCH -->




    <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="1">


        <div class="hero-main">
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MB7HJ8K" height="0" width="0"
                    style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->

            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-inner">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <h1 class="h1 text-white">EN <b class="text-danger">BANPRO</b> LO TENEMOS TODO!...
                                    <br class="d-md-none">

                                    {{--     <--  <span class="typed border-bottom"></span> --> --}}
                                </h1>
                                <BR><BR>

                            </div>
                            <!--/ End Welcome Text -->
                            {{-- <!-- prueba form ajax -->
                            <form method="post" action="{{ route('busqueda') }}">
                                {{ csrf_field() }}
                                <label>Name:</label>
                                <input type="text" name="person_name"><br>
                                <label>Email:</label>
                                <input type="text" name="person_email"><br>
                                <div class="col-xl-2 col-lg-2 col-md-4">
                                    <a class="btn" type='submit' href="{{ route('busqueda') }}">Buscar</a>
                                </div>

                            </form>
                            <!-- end prueba --> --}}

                            <!-- Search Form -->
                            <form action="{{ route('busqueda') }}" method="POST">
                                @method('POST')
                                @csrf
                                <div class="banner-search-wrap">
                                    <ul class="nav nav-tabs rld-banner-tab">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#tabs_1">En Venta</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="tab" href="#tabs_2">En Renta</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs_1">
                                            <div class="rld-main-search">
                                                <div class="row">

                                                    <div class="rld-single-input">
                                                        <input name="vuin" type="text" placeholder="Escribe...">
                                                    </div>


                                                    <div class="rld-single-select">
                                                        <select name="vtipo_propiedad" id="vtipo_propiedad"
                                                            class="select single-select mr-0"
                                                            style="width: 100%;height: 100%;">
                                                            <option selected="selected" value="">Tipo De Propiedad
                                                            </option>
                                                            @foreach ($tipop as $tipo)
                                                                <option value={{ $tipo->id }}>
                                                                    {{ $tipo->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="rld-single-select">
                                                        <select name="vcolonia" class="select single-select mr-0"
                                                            style="width: 100%;height: 100%;">
                                                            <option selected="selected" value=''>Selecciona la colonia
                                                            </option>
                                                            @foreach ($colonias as $colonia)
                                                                <option name="colonia" value={{ $colonia->id }}>
                                                                    {{ $colonia->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>





                                                    {{-- <div class="dropdown-filter"><span>Busqueda Avanzada</span></div> --}}
                                                    <div class="col-xl-3 col-lg-2 col-md-4">
                                                        <button class="btn" type='submit' value="venta" name="bv"
                                                            href="{{ route('busqueda') }}">Buscar en venta</button>
                                                    </div>
                                                    {{-- <div class="explore__form-checkbox-list full-filter">
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-6 py-0 pr-30 pl-0">
                                                                <!-- Form Property Status -->
                                                                <div class="rld-single-select">
                                                                    <label>Estatus de la propiedad</label>
                                                                    <select name="estatus_propiedad"
                                                                        class="select single-select mr-0"
                                                                        style="width: 100%;height: 100%;">
                                                                        <option selected="selected">Estatus de la
                                                                            propiedad</option>
                                                                        @foreach ($estatusp as $estap)
                                                                            <option value={{ $estap->id }}>
                                                                                {{ $estap->nombre }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>


                                                                </div>
                                                                <!--/ End Form Property Status -->
                                                            </div> --}}


                                                    <!-- Form Bedrooms -->
                                                    {{--
                                                                <div class="form-group beds">
                                                                    <div class="nice-select form-control wide"
                                                                        tabindex="0"><span class="current"><i
                                                                                class="fa fa-bed" aria-hidden="true"></i>
                                                                            Recamaras</span>
                                                                        <ul class="list">
                                                                            @foreach ($array as $a)
                                                                                <li name="rec" class="option">
                                                                                    {{ $a }}</li>
                                                                            @endforeach

                                                                        </ul>
                                                                    </div>
                                                                </div> --}}
                                                    <!--/ End Form Bedrooms -->



                                                    <!-- Form Bathrooms -->
                                                    {{-- <div class="form-group bath">
                                                                    <div class="nice-select form-control wide"
                                                                        tabindex="0"><span class="current"><i
                                                                                class="fa fa-bath" aria-hidden="true"></i>
                                                                            Baños</span>
                                                                        <ul class="list">
                                                                            @foreach ($array as $a)
                                                                                <li name="bano" class="option">
                                                                                    {{ $a }}</li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div> --}}
                                                    <!--/ End Form Bathrooms -->

                                                    {{-- <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                                                <!-- Price Fields -->



                                                            </div> --}}
                                                    {{-- <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                <!-- Checkboxes -->
                                                                <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                    <input id="check-1" type="checkbox" name="aire">
                                                                    <label for="check-1">Aire acondicionado</label>
                                                                    <input id="check-2" type="checkbox" name="alberca">
                                                                    <label for="check-2">Alberca</label>
                                                                    <input id="check-3" type="checkbox" name="balcon">
                                                                    <label for="check-3">Balcon</label>
                                                                    <input id="check-4" type="checkbox" name="internet">
                                                                    <label for="check-4">Internet</label>

                                                                </div>
                                                                <!-- Checkboxes / End -->
                                                            </div>
                                                            <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                <!-- Checkboxes -->
                                                                <div class="checkboxes one-in-row margin-bottom-10 ch-2">

                                                                    <input id="check-7" type="checkbox" name="lavaplatos">
                                                                    <label for="check-7">Lavaplatos</label>
                                                                    <input id="check-8" type="checkbox"
                                                                        name="estacionamiento">
                                                                    <label for="check-8">Estacionamiento</label>
                                                                    <input id="check-9" type="checkbox"
                                                                        name="refrigerador">
                                                                    <label for="check-9">Refrigerador</label>

                                                                </div>
                                                                <!-- Checkboxes / End -->
                                                            </div>

                                                            <div class="rld-single-input">
                                                                <input name="precio" type="text" placeholder="Precio en pesos...">
                                                            </div> --}}

                                                    {{-- </div>
                                                    </div>  --}}

                                                </div>
                                                <div class="row">
                                                    <div class="rld-single-input">
                                                        <input name="vpreciomin" type="text"
                                                            placeholder="Prespuesto minimo...">
                                                    </div>

                                                    <div class="rld-single-input">
                                                        <input name="vpreciomax" type="text"
                                                            placeholder="Prespuesto máximo...">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tabs_2">
                                            <div class="rld-main-search">
                                                <div class="row">

                                                    <div class="rld-single-input">
                                                        <input name="ruin" type="text" placeholder="Escribe...">
                                                    </div>


                                                    <div class="rld-single-select">
                                                        <select name="rtipo_propiedad" id="rtipo_propiedad"
                                                            class="select single-select mr-0"
                                                            style="width: 100%;height: 100%;">
                                                            <option selected="selected" value="">Tipo De Propiedad
                                                            </option>
                                                            @foreach ($tipop as $tipo)
                                                                <option value={{ $tipo->id }}>
                                                                    {{ $tipo->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="rld-single-select">
                                                        <select name="rcolonia" class="select single-select mr-0"
                                                            style="width: 100%;height: 100%;">
                                                            <option selected="selected" value=''>Selecciona la colonia
                                                            </option>
                                                            @foreach ($colonias as $colonia)
                                                                <option name="colonia" value={{ $colonia->id }}>
                                                                    {{ $colonia->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>



                                                    {{-- <div class="dropdown-filter"><span>Busqueda Avanzada</span></div> --}}
                                                    <div class="col-xl-3 col-lg-2 col-md-4">
                                                        <button class="btn" type='submit' value="renta" name="br"
                                                            href="{{ route('busqueda') }}">Buscar en renta</button>
                                                    </div>


                                                </div>
                                                <div class="row">
                                                    <div class="rld-single-input">
                                                        <input name="rpreciomin" type="text"
                                                            placeholder="Prespuesto minimo...">
                                                    </div>

                                                    <div class="rld-single-input">
                                                        <input name="rpreciomax" type="text"
                                                            placeholder="Prespuesto máximo...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <!--/ End Search Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="feature-categories rec-pro">
        <div class="container-fluid">

            <div class="row">
                <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                    <div class="carousel-inner">

                        @for ($i = 0; $i < count($banner); $i++)
                            @if ($i == 0)
                                <div class="active item carousel-item" data-slide-number="{{ $i }}">
                                    <img src="{{ asset('/cliente/images/banner/' . $banner[$i]->nombre_archivo) }}"
                                        class="img-fluid" alt="slider-listing">
                                </div>
                            @else
                                <div class="item carousel-item" data-slide-number="{{ $i }}">
                                    <img src="{{ asset('/cliente/images/banner/' . $banner[$i]->nombre_archivo) }} "
                                        class="img-fluid" alt="slider-listing">
                                </div>
                            @endif
                        @endfor


                        <a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev"><i
                                class="fa fa-angle-left"></i></a>
                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next"><i
                                class="fa fa-angle-right"></i></a>


                    </div>





                </div>
            </div>

        </div>
    </section>


    <!-- START SECTION WHY CHOOSE US -->
    <section class="how-it-works bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Por qué </span>eligirnos</h2>
                <p>Te proveemos el mejor servicio</p>
            </div>
            <div class="row service-1">
                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                    <div class="serv-flex">
                        <div class="art-1 img-13">
                            <img src="{{ asset('cliente/images/mejora.jpg') }}" alt="">
                            <h3>Mejora continua...</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">Porque jamás dejamos de mejorar nuestros servicios, incluyendo
                                metodologías de desarrollo y técnicas de gestión</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="{{ asset('cliente/images/prof.png') }}" alt="">
                            <h3>Profesionalismo</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">Porque somos profesionales y trabajamos para asegurar el éxito de
                                nuestros clientes en cada aspecto posible.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-15">
                            <img src="{{ asset('cliente/images/1.png') }}" alt="">
                            <h3>Variedad de casas</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">En <b> Banpro</b> encontraras la casa ideal rentar o comprar, no busque
                                más, estas en el lugar indicado.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="{{ asset('cliente/images/ubicacion.png') }}" alt="">
                            <h3>Estamos cerca de ti</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">La tendencia actual está dando un importante giro ante las indiscutibles
                                ventajas que ofrece estar situado dentro de las ciudades.</p>
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
                <h2><span>Propiedades </span>Recientes</h2>
                <p>Te mostramos las opciones recientes</p>
            </div>
            <div class="portfolio col-xl-12">
                <div class="slick-lancers">

                    @foreach ($recent_properties->sortBy('precio') as $recent_propertie)
                        @php
                            $fotosrp = DB::table('galeria_propiedades')
                                ->where('propiedad_id', '=', $recent_propertie->id)
                                ->where('position', 0)
                                ->first();

                            if (empty($fotosrp)) {
                                $thumb = 'resized-generic.jpg';
                            } else {
                                $thumb = 'resized-' . $fotosrp->nombre_archivo;
                            }

                        @endphp
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people">

                                <div class="project-single">
                                    <div class="project-inner">

                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ route('properties.grid-single', $recent_propertie->id) }}"
                                                class="homes-img">
                                                <img src="{{ asset('/propiedades_documentos/thumb/' . $thumb) }} ">
                                            </a>
                                            <div class="homes-tag button sale rent">En
                                                {{ $recent_propertie->EstatusPropiedad->nombre }}</div>

                                        </div>

                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a
                                                href="{{ route('properties.grid-single', $recent_propertie->id) }}">{{ $recent_propertie->nombre }}</a>
                                        </h3>
                                        <p class="homes-address mb-3">
                                            <a href="{{ route('properties.grid-single', $recent_propertie->id) }}">
                                                <i class="fa fa-map-marker"></i><span>Direccion pendiente</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix pb-3">
                                            <li class="the-icons">
                                                <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                                <span>{{ $recent_propertie->recamaras . ' Recamaras' }}</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                                <span>{{ $recent_propertie->bano . ' Baños' }}</span>
                                            </li>
                                            <li class="the-icons">
                                                <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                                <span>{{ $recent_propertie->tamano_propiedad . ' m2' }}</span>
                                            </li>
                                            {{-- <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li> --}}
                                        </ul>
                                        <div class="price-properties footer pt-3 pb-0">
                                            <h3 class="title mt-3">
                                                <a
                                                    href="{{ route('properties.grid-single', $recent_propertie->id) }}">{{ "$ " . number_format($recent_propertie->precio) }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- START SECTION TESTIMONIALS -->
    @if (Route::has('seller.login'))
        @auth
            <section class="testimonials bg-white-2 rec-pro">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Vendedores</h2>
                    </div>

                    <div class="owl-carousel job_clientSlide">
                        @foreach ($sellers as $seller)
                            <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150">
                                <h3>
                                    {{ $seller->name }}
                                </h3>
                                <div class="detailJC">
                                    <span> <img src="{{ asset('/fotos_documentos/' . $seller->foto) }}" /></span>
                                    <h5>{{ $seller->email }}</h5>
                                    <p>{{ $seller->celular ?? '' }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endauth
    @endif
    <!-- END SECTION TESTIMONIALS -->


    <div class="aviso-cookies" id="aviso-cookies">
        <img class="galleta" src="{{ asset('cliente/images/banprogris.png') }}" alt="Galleta">
        <h3 class="titulo">Aviso de privacidad</h3>
        <textarea disabled> En cumplimiento de la Ley de Protección de Datos Personales en Posesión de Particulares, BANPRO BIENES RAICES, con domicilio en Av. Las Verbenas #9, Colonia La Verbena, en Hermosillo, Sonora, C.P. 83288, tiene la convicción de proteger la información personal proporcionada por sus clientes y es el responsable del uso que se le dé a los mismos y de su protección. Toda su información personal será utilizada con el fin de proveerle los servicios inmobiliarios que ha solicitado, informarle sobre cambios en estos mismos y evaluar la calidad del servicio que le brindamos. Para las finalidades antes mencionadas, requerimos obtener los siguientes datos: - Datos de Identificación Personal - Datos Patrimoniales - Datos Financieros - Documentos de Soporte Para así otorgar la prestación del servicio de nuestra promoción y asesoría, como también, su mediación, información y gestión para la renta o venta de su propiedad, solicitado por usted. Usted tiene derecho de acceder y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestra oficina, ubicada en Avenida Las Verbenas #9, Col. La Verbena, C.P 83282, Hermosillo, Son, MX., teléfono 3 02 22 21. Asimismo, le informamos que su información personal no será transferida a personas distintas al suscrito y de igual manera le informamos que no recabamos datos personales sensibles. En ese sentido, su información puede ser compartida únicamente con diversas autoridades o dependencias gubernamentales y notarias para efectos de llevar a cabo el servicio profesional solicitado. Si usted no manifiesta su oposición para que sus datos personales sean tratados en los términos del presente aviso de conformidad, se entenderá que ha otorgado su consentimiento para ello. Hermosillo, Sonora, México a 05 de noviembre de 2022. </textarea>
        <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
        <a class="enlace" href="{{ route('cookies') }}">Aviso de Cookies</a>

    </div>
    <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>

    <script src="{{ asset('cliente/js/script.js') }}"></script>
    <script src="{{ asset('cliente/js/aviso-cookies.js') }}"></script>



    @include('cliente.body.footer')

    <!--register form -->
    <div class="login-and-register-form modal">
        <div class="main-overlay"></div>
        <div class="main-register-holder">
            <div class="main-register fl-wrap">
                <div class="close-reg"><i class="fa fa-times"></i></div>
                <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                <div class="soc-log fl-wrap">
                    <p>Login</p>
                    <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with
                        Facebook</a>
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
                                    <form method="post" name="registerform" class="main-register-form"
                                        id="main-register-form2">
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

    {{-- <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER --> --}}
@endsection

@section('js')
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.min.js') }}"></script>




    {{-- <script> $(".btn").click(function(){
        //get frm inputs into array
        var frm_data = $("#bs").serializeArray();

        $.ajax({
             type:"POST",
             url: "{{ route('busqueda') }}",
             data: frm_data,
             dataType:'json',
             cache:false,
             contenttype:"application/jsonrequest; charset=utf-8",
             error: function (jqXHR, textStatus) {
               //do on error
             },
             success: function (data){
                response(data)
             }
        });
    });
    </script> --}}


    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="vtipo_propiedad"]').on('change', function() {
                var tipo_propiedad = $(this).val();
            });

            $('select[name="vcolonia"]').on('change', function() {
                var colonia = $(this).val();
            });

            $('li[name="estatus_propiedad"]').on('change', function() {
                var estatus_propiedad = $(this).val();
            });

            let bv = document.getElementById("bv");
            let br = document.getElementById("br");

            // Adding event listener to button
            bv.addEventListener("click", () => {
                // Fetching Button value
                let btnValue = bv.value;
            });

            br.addEventListener("click", () => {
                // Fetching Button value
                let btnValue = br.value;
            });


            var aire = "";
            $(":aire").each(function() {
                var airechecked = $(this).is(":checked");
                if (airechecked) {
                    aire += $(this).val() + "|";
                }
            });
            alert(aire);

            var alberca = "";
            $(":alberca").each(function() {
                var albercachecked = $(this).is(":checked");
                if (albercachecked) {
                    alberca += $(this).val() + "|";
                }
            });
            alert(alberca);


            var balcon = "";
            $(":balcon").each(function() {
                var balconchecked = $(this).is(":checked");
                if (balconchecked) {
                    balcon += $(this).val() + "|";
                }
            });
            alert(balcon);

            var internet = "";
            $(":internet").each(function() {
                var internetchecked = $(this).is(":checked");
                if (internetchecked) {
                    internet += $(this).val() + "|";
                }
            });
            alert(internet);

            var cable = "";
            $(":cable").each(function() {
                var cablechecked = $(this).is(":checked");
                if (cablechecked) {
                    cable += $(this).val() + "|";
                }
            });
            alert(cable);

            var lavaplatos = "";
            $(":lavaplatos").each(function() {
                var lavaplatoschecked = $(this).is(":checked");
                if (lavaplatoschecked) {
                    lavaplatos += $(this).val() + "|";
                }
            });
            alert(lavaplatos);


            var estacionamiento = "";
            $(":estacionamiento").each(function() {
                var estacionamientochecked = $(this).is(":checked");
                if (estacionamientochecked) {
                    estacionamiento += $(this).val() + "|";
                }
            });
            alert(estacionamiento);


            var refrigerador = "";
            $(":refrigerador").each(function() {
                var refrigeradorchecked = $(this).is(":checked");
                if (refrigeradorchecked) {
                    refrigerador += $(this).val() + "|";
                }
            });
            alert(refrigerador);






            if (tipo_propiedad || colonia) {
                $.ajax({
                    btnValue: btnValue
                    url: "route('busqueda')",
                    type: "POST",
                    dataType: "json",
                    success: function(response) {
                        var d1 = $('select[name="vtipo_propiedad"]').empty();
                        var d2 = $('select[name="vcolonia"]').empty();
                        var d3 = $('select[name="vestatus_propiedad"]').empty();
                        $.each(response, function(key, value) {
                            console.log(value.vtipo_propiedad);
                            console.log(value.vcolonia);
                            console.log(value.vestatus_propiedad);
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    </script>
@endsection
