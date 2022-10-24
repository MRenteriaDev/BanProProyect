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
    $colonias = Locacion::get();
    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $tipop = TipoPropiedad::get();
    $estatusp = EstatusPropiedad::get();
@endphp


@extends('cliente.cliente_master')
@section('cliente')
    <!-- STAR HEADER SEARCH -->


    <section id="hero-area" class="parallax-searchs home15 overlay thome-6 thome-1" data-stellar-background-ratio="0.5">


        <div class="hero-main">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-inner">
                            <!-- Welcome Text -->
                            <div class="welcome-text">
                                <h1 class="h1">Encuentra Tu Hogar
                                    <br class="d-md-none">

                                    {{--     <--  <span class="typed border-bottom"></span> --> --}}
                                </h1>
                                <p class="mt-4">Tenemos diferentes opciones para ti </p>
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
                            <form action="{{route("busqueda")}}" method="POST">
                                @method('POST')
                                @csrf
                                <div class="banner-search-wrap">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="tabs_1">
                                            <div class="rld-main-search">
                                                <div class="row">

                                                    <div class="rld-single-input">
                                                        <input name="uin" type="text" placeholder="Escribe...">
                                                    </div>


                                                    <div class="rld-single-select">
                                                        <select name="tipo_propiedad" id="tipo_propiedad"
                                                            class="select single-select mr-0"
                                                            style="width: 100%;height: 100%;">
                                                            <option selected="selected" value="">Tipo De Propiedad</option>
                                                            @foreach ($tipop as $tipo)
                                                                <option value={{ $tipo->id }}>
                                                                    {{ $tipo->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="rld-single-select">
                                                        <select name="colonia" class="select single-select mr-0"
                                                            style="width: 100%;height: 100%;">
                                                            <option selected="selected" value=''>Selecciona la colonia</option>
                                                            @foreach ($colonias as $colonia)
                                                                <option name="colonia" value={{ $colonia->id }}>
                                                                    {{ $colonia->nombre }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="rld-single-input">
                                                        <input name="precio" type="text" placeholder="Prespuesto máximo...">
                                                    </div>

                                                     {{-- <div class="dropdown-filter"><span>Busqueda Avanzada</span></div> --}}
                                                    <div class="col-xl-2 col-lg-2 col-md-4">
                                                        <button class="btn" type='submit'
                                                            href="{{ route('busqueda') }}">Buscar</button>
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
    <!-- END HEADER SEARCH -->

    <!-- START SECTION POPULAR PLACES -->
    {{-- <section class="feature-categories bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Lugares </span>Populares</h2>
                <p>Propiedades en lugares populares</p>
            </div>
            <div class="row">
                <!-- Single category -->
                @foreach ($principal_places as $principal_place)
                    <div class="col-xl-3 col-lg-6 col-sm-6" data-aos="fade-up" data-aos-delay="150">
                        <div class="small-category-2">
                            <div class="small-category-2-thumb img-1">
                                <a href="properties-map.html"><img
                                        src="{{ asset('cliente/images/popular-places/12.jpg') }}" alt=""></a>
                            </div>
                            <div class="sc-2-detail">
                                <h4 class="sc-jb-title"><a href="#">{{ $principal_place->nombre }}</a></h4>
                                <span>203 Properties</span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <!-- /row -->
        </div>
    </section> --}}
    <!-- END SECTION POPULAR PLACES -->

    <!-- START SECTION FEATURED PROPERTIES -->
    {{-- <section class="featured portfolio bg-white-2 rec-pro full-l">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Propiedades </span>Destacadas</h2>
                <p>Estas son nuestras propiedades destacadas</p>
            </div>
            <div class="row portfolio-items">
                @foreach ($featured_properties as $feature_property)
                    <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                        <div class="project-single" data-aos="fade-right">
                            <div class="project-inner project-head">
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="single-property-1.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <img src="{{ asset('cliente/images/blog/b-11.jpg') }}" alt="home-1"
                                            class="img-responsive">
                                    </a>
                                </div>
                                <div class="button-effect">
                                    <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                                    <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                        class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                    <a href="single-property-2.html" class="img-poppu btn"><i
                                            class="fa fa-photo"></i></a>
                                </div>
                            </div>
                            <!-- homes content -->
                            <div class="homes-content">
                                <!-- homes address -->
                                <h3><a href="{{ route('properties.grid-single', $principal_place->id) }}">Real Luxury
                                        Family House Villa</a></h3>
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
                @endforeach
            </div>
            <div class="bg-all">
                <a href="{{ route('properties.grid') }}" class="btn btn-outline-light">View More</a>
            </div>
        </div>
    </section> --}}
    <!-- END SECTION FEATURED PROPERTIES -->

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
                            <img src="{{asset('cliente/images/mejora.jpg')}}" alt="">
                            <h3>Mejora continua...</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">Porque jamás dejamos de mejorar nuestros servicios, incluyendo metodologías de desarrollo y técnicas de gestión</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="{{asset('cliente/images/prof.png')}}" alt="">
                            <h3>Profesionalismo</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">Porque somos profesionales y trabajamos para asegurar el éxito de nuestros clientes en cada aspecto posible.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                    <div class="serv-flex arrow">
                        <div class="art-1 img-15">
                            <img src="{{asset('cliente/images/1.png')}}" alt="">
                            <h3>Variedad de casas</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">En <b> Banpro</b> encontraras la casa ideal rentar o comprar, no busque más, estas en el lugar indicado.</p>
                        </div>
                    </div>
                </article>
                <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                    <div class="serv-flex">
                        <div class="art-1 img-14">
                            <img src="{{asset('cliente/images/ubicacion.png')}}" alt="">
                            <h3>Estamos cerca de ti</h3>
                        </div>
                        <div class="service-text-p">
                            <p class="text-center">La tendencia actual está dando un importante giro ante las indiscutibles ventajas que ofrece estar situado dentro de las ciudades.</p>
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

                    @foreach ($recent_properties as $recent_propertie)
                        @php
                            $fotosrp = DB::table('galeria_propiedades')
                                ->where('propiedad_id', '=', $recent_propertie->id)
                                ->first();

                            $thumb = "resized-" . $fotosrp->nombre_archivo;



                        @endphp
                        <div class="agents-grid" data-aos="fade-up">
                            <div class="people">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="homes">
                                            <!-- homes img -->

                                            <a href="{{ route('properties.grid-single', $recent_propertie->id) }}"
                                                class="homes-img">
                                                <div class="homes-tag button sale rent">En
                                                    {{ $recent_propertie->EstatusPropiedad->nombre }}</div>
                                                 <img src="{{ asset("/propiedades_documentos/thumb/". $thumb)}} "
                                                    class="img-responsive">
                                            </a>

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
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- START SECTION TESTIMONIALS -->
    <section class="testimonials bg-white-2 rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Testimonios </span>Del Cliente</h2>
                <p>Tenemos encuenta tu opinión</p>
            </div>
            <div class="owl-carousel job_clientSlide">
                <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore gna a. Ut enim ad minim veniam,
                    </p>
                    <div class="detailJC">
                        <span><img src="images/testimonials/ts-1.jpg" alt="" /></span>
                        <h5>Lisa Smith</h5>
                        <p>New York</p>
                    </div>
                </div>
                <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="250">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore gna a. Ut enim ad minim veniam,
                    </p>
                    <div class="detailJC">
                        <span><img src="images/testimonials/ts-2.jpg" alt="" /></span>
                        <h5>Jhon Morris</h5>
                        <p>Los Angeles</p>
                    </div>
                </div>
                <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="350">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore gna a. Ut enim ad minim veniam,
                    </p>
                    <div class="detailJC">
                        <span><img src="images/testimonials/ts-3.jpg" alt="" /></span>
                        <h5>Mary Deshaw</h5>
                        <p>Chicago</p>
                    </div>
                </div>
                <div class="singleJobClinet">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore gna a. Ut enim ad minim veniam,
                    </p>
                    <div class="detailJC">
                        <span><img src="images/testimonials/ts-4.jpg" alt="" /></span>
                        <h5>Gary Steven</h5>
                        <p>Philadelphia</p>
                    </div>
                </div>
                <div class="singleJobClinet">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore gna a. Ut enim ad minim veniam,
                    </p>
                    <div class="detailJC">
                        <span><img src="images/testimonials/ts-5.jpg" alt="" /></span>
                        <h5>Cristy Mayer</h5>
                        <p>San Francisco</p>
                    </div>
                </div>
                <div class="singleJobClinet">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore gna a. Ut enim ad minim veniam,
                    </p>
                    <div class="detailJC">
                        <span><img src="images/testimonials/ts-6.jpg" alt="" /></span>
                        <h5>Ichiro Tasaka</h5>
                        <p>Houston</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION TESTIMONIALS -->

    <!-- STAR SECTION PARTNERS -->
    {{-- <div class="partners bg-white rec-pro">
        <div class="container-fluid">
            <div class="sec-title">
                <h2><span>Nuestros </span>Aliados</h2>
                <p></p>
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
    </div> --}}
    <!-- END SECTION PARTNERS -->

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
            $('select[name="tipo_propiedad"]').on('change', function() {
                var tipo_propiedad = $(this).val();
            });

            $('select[name="colonia"]').on('change', function() {
                var colonia = $(this).val();
            });

            $('li[name="estatus_propiedad"]').on('change', function() {
                var estatus_propiedad = $(this).val();
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
                    url: "route('busqueda')",
                    type: "POST",
                    dataType: "json",
                    success: function(response) {
                        var d1 = $('select[name="tipo_propiedad"]').empty();
                        var d2 = $('select[name="colonia"]').empty();
                        var d3 = $('select[name="estatus_propiedad"]').empty();
                        $.each(response, function(key, value) {
                            console.log(value.tipo_propiedad);
                            console.log(value.colonia);
                            console.log(value.estatus_propiedad);
                        });
                    },
                });
            } else {
                alert('danger');
            }
        });
    </script>
@endsection
