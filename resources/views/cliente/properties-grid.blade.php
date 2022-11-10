@extends('cliente.body.cliente_herencia')

@section('clienteherencia')

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

            <!-- START SECTION PROPERTIES LISTING -->

            <section class="properties-right featured portfolio ho-17 blog pt-5">
                <div class="container">
                    <section class="headings-2 pt-0 pb-55">
                        <div class="pro-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <div class="text-heading text-left">
                                        <br><br>

                                    </div>
                                    <h3>Resultados de la busqueda...</h3>
                                </div>
                            </div>
                        </div>
                    </section>



                    <div class="row">
                        <div class="col-lg-12 col-md-12 blog-pots">
                            <section class="headings-2 pt-0">
                                <div class="pro-wrapper">
                                    <div class="detail-wrapper-body">
                                        <div class="listing-title-bar">
                                            <div class="text-heading text-left">
                                                <p class="font-weight-bold mb-0 mt-3">{{ count($propiedades_filtradas) }}
                                                    Resultados</p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center grid">
                                    <div class="input-group border rounded input-group-lg w-auto mr-4">
                                        <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Filtrar Por:</label>
                                        <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                                            <option selected>Mas vista</option>
                                            <option value="1">Most Viewed</option>
                                            <option value="2">Price(low to high)</option>
                                            <option value="3">Price(high to low)</option>
                                        </select>
                                    </div>
                                    <div class="sorting-options">
                                        <a href="properties-list-1.html" class="change-view-btn lde"><i class="fa fa-th-list"></i></a>
                                        <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                                    </div>
                                </div> --}}
                                </div>

                                <br>
                                <!-- INICIO DE LISTA -->


                                <div class="dashborad-box">
                                    <h4 class="title">Listado de casas</h4>
                                    <div class="section-body listing-table">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Colonia</th>
                                                        <th>Precio</th>
                                                        <th class="text-center">Ver más...</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($propiedades_filtradas as $lp)
                                                        <tr>
                                                            <td>{{ $lp->nombre }}</td>
                                                            <td>{{ $lp->Locacion->nombre }}</td>
                                                            <td>{{ "$ " . number_format($lp->precio, 2) }}</td>
                                                            <td class="text-center"><a
                                                                    href="{{ route('properties.grid-single', $lp->id) }}">
                                                                    <i class="fa fa-eye"></i></a>
                                                            </td>
                                                        </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>





                                <!-- FIN DE LISTA -->


                            </section>
                            <div class="row portfolio-items">

                                @foreach ($propiedades_filtradas as $prop)
                                    @php
                                        $fotosp = DB::table('galeria_propiedades')
                                            ->where('propiedad_id', '=', $prop->id)
                                            ->first();
                                    @endphp

                                    <div class="item col-lg-6 col-md-6 col-xs-12 landscapes sale">
                                        <a href="{{ route('properties.grid-single', $prop->id) }}" class="recent-16"
                                            data-aos="fade-up">
                                            <div class="recent-img16 img-center"
                                                style="background-image: url('{{ asset('/propiedades_documentos/' . $fotosp->nombre_archivo) }}')">
                                            </div>
                                            <div class="recent-content"></div>
                                            <div class="recent-details">
                                                <div class="recent-title"> {{ $prop->nombre }}</div>
                                                <div class="recent-price"><label>$
                                                    </label>{{ number_format($prop->precio, 2) }}</div>
                                                <div class="house-details">{{ $prop->recamaras }} recamaras <span>|</span>
                                                    {{ $prop->bano }} baños <span>|</span>
                                                    {{ $prop->tamano_propiedad_construido }}
                                                    m2</div>
                                            </div>
                                            <div class="view-proper">Ver Detalles</div>
                                        </a>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                        {{-- <aside class="col-lg-4 col-md-12 car">
                            <div class="widget">
                                <!-- Search Fields -->
                                <div class="widget-boxed main-search-field">
                                    <div class="widget-boxed-header">
                                        <h4>Encuentra tu casa</h4>
                                    </div>
                                    <!-- Search Form -->
                                    <div class="trip-search">
                                        <form class="form">
                                            <!-- Form Lookin for -->
                                            <div class="form-group looking">
                                                <div class="first-select wide">
                                                    <div class="main-search-input-item">
                                                        <input type="text" placeholder="Escribe" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ End Form Lookin for -->
                                            <!-- Form Location -->
                                            <div class="form-group location">
                                                <div class="nice-select form-control wide" tabindex="0"><span
                                                        class="current"><i class="fa fa-map-marker"></i>Locacion</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option selected ">New York</li>
                                                        <li data-value="2" class="option">Los Angeles</li>
                                                        <li data-value="3" class="option">Chicago</li>
                                                        <li data-value="3" class="option">Philadelphia</li>
                                                        <li data-value="3" class="option">San Francisco</li>
                                                        <li data-value="3" class="option">Miami</li>
                                                        <li data-value="3" class="option">Houston</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/ End Form Location -->
                                            <!-- Form Categories -->
                                            <div class="form-group categories">
                                                <div class="nice-select form-control wide" tabindex="0"><span
                                                        class="current"><i class="fa fa-home" aria-hidden="true"></i>Tipo De
                                                        Propiedad</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option selected ">House</li>
                                                        <li data-value="2" class="option">Apartment</li>
                                                        <li data-value="3" class="option">Condo</li>
                                                        <li data-value="3" class="option">Land</li>
                                                        <li data-value="3" class="option">Bungalow</li>
                                                        <li data-value="3" class="option">Single Family</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/ End Form Categories -->
                                            <!-- Form Property Status -->
                                            <div class="form-group categories">
                                                <div class="nice-select form-control wide" tabindex="0"><span
                                                        class="current"><i class="fa fa-home"></i>Estatus De La
                                                        Propiedad</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option selected ">For Sale</li>
                                                        <li data-value="2" class="option">For Rent</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/ End Form Property Status -->
                                            <!-- Form Bedrooms -->
                                            <div class="form-group beds">
                                                <div class="nice-select form-control wide" tabindex="0"><span
                                                        class="current"><i class="fa fa-bed" aria-hidden="true"></i>
                                                        Cuartos</span>
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
                                            <!-- Form Bathrooms -->
                                            <div class="form-group bath">
                                                <div class="nice-select form-control wide" tabindex="0"><span
                                                        class="current"><i class="fa fa-bath" aria-hidden="true"></i>
                                                        Baños</span>
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
                                        </form>
                                    </div>
                                    <!--/ End Search Form -->
                                    <!-- Price Fields -->
                                    <div class="main-search-field-2">
                                        <!-- Area Range -->
                                        <div class="range-slider">
                                            <label>Tamaño Del Area</label>
                                            <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <br>
                                        <!-- Price Range -->
                                        <div class="range-slider">
                                            <label>Rango De Precio</label>
                                            <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <!-- More Search Options -->
                                    <a href="#" class="more-search-options-trigger margin-bottom-10 margin-top-30"
                                        data-open-title="Características Avanzadas"
                                        data-close-title="Características Avanzadas"></a>

                                    <div class="more-search-options relative">
                                        <!-- Checkboxes -->
                                        <div class="checkboxes one-in-row margin-bottom-10">
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
                                    <!-- More Search Options / End -->
                                    <div class="col-lg-12 no-pds">
                                        <div class="at-col-default-mar">
                                            <button class="btn btn-default hvr-bounce-to-right"
                                                type="submit">Buscar</button>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </aside>
                    </div> --}}
                        {{-- <nav aria-label="..." class="pt-55">
                        <ul class="pagination disabled">
                            <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav> --}}
                    </div>
            </section>
            <!-- END SECTION PROPERTIES LISTING -->

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
                                                <input name="email" type="text" onClick="this.select()"
                                                    value="">
                                                <label>Password *</label>
                                                <input name="password" type="password" onClick="this.select()"
                                                    value="">
                                                <button type="submit"
                                                    class="log-submit-btn"><span>Register</span></button>
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
        </div>
        <!-- Wrapper / End -->
    </body>
@endsection
