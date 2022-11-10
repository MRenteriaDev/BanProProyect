@extends('cliente.body.cliente_herencia')

@section('clienteherencia')

@php
    use App\Models\Sellers;
    $sellers = DB::table('sellers')
        ->take(2)
        ->get();
    $fotos = DB::table('galeria_propiedades')->where('propiedad_id', '=', $property[0]->id)->get();
    //$plano = DB::table('galeria_planos')->where('propiedad_id', '=', $property[0]->id)->get();

@endphp


    <body class="inner-pages sin-1 homepage-4 hd-white">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- START SECTION HEADINGS -->
            <!-- Header Container
                        ================================================== -->
            @include('cliente.body.header')
            <div class="clearfix"></div>
            <br><br>
            <!-- Header Container / End -->
            <!-- END SECTION HEADINGS -->

            <!-- START SECTION PROPERTIES LISTING -->
            <section class="single-proper blog details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 blog-pots">
                            <div class="row">
                                <div class="col-md-12">
                                    <section class="headings-2 pt-0">
                                        <div class="pro-wrapper">
                                            <div class="detail-wrapper-body">
                                                <div class="section-title">
                                                    <h2>{{ $property[0]->nombre }}<span class="mrg-l-5 category-tag">{{ $property[0]->EstatusPropiedad->nombre }}</span></h2>
                                                    <div class="mt-0">
                                                        <a href="#listing-location" class="listing-address">
                                                            <i class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5">
                                                                {{ $property[0]->Locacion->nombre }}</i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single detail-wrapper mr-2">
                                                <div class="detail-wrapper-body">
                                                    <div class="listing-title-bar">
                                                        <b>   Precio:</b>
                                                        <br>
                                                        <h4>{{ "$ " . number_format($property[0]->precio, 2) }}</h4>
                                                        {{-- <div class="mt-0">
                                                            <a href="#listing-location" class="listing-address">
                                                                <p>$ {{ number_format($property[0]->precio / $property[0]->tamano_propiedad_construido, 2) . ' / m²'}}
                                                                </p>
                                                            </a>
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!-- main slider carousel items -->

                                    <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                        <h5 class="mb-4">Galeria</h5>
                                        <div class="carousel-inner">
                                            @for ($i = 0; $i < count($fotos); $i++)
                                                @if ($i == 0)
                                                    <div class="active item carousel-item"
                                                        data-slide-number="{{ $i }}">
                                                        <img src="{{ asset('/propiedades_documentos/' . $fotos[$i]->nombre_archivo) }}"
                                                            class="img-fluid" alt="slider-listing" height="600px">
                                                    </div>
                                                @else
                                                    <div class="item carousel-item" data-slide-number="{{ $i }}">
                                                        <img src="{{ asset('/propiedades_documentos/' . $fotos[$i]->nombre_archivo) }} "
                                                            class="img-fluid" alt="slider-listing" style="width:auto;height:600px;" >
                                                    </div>
                                                @endif
                                            @endfor

                                            <a class="carousel-control left" href="#listingDetailsSlider"
                                                data-slide="prev"><i class="fa fa-angle-left"></i></a>
                                            <a class="carousel-control right" href="#listingDetailsSlider"
                                                data-slide="next"><i class="fa fa-angle-right"></i></a>

                                        </div>


                                        <!-- main slider carousel nav controls -->
                                        <ul class="carousel-indicators smail-listing list-inline">
                                            @for ($j = 0; $j < count($fotos); $j++)
                                                @if ($j == 0)
                                                    <li class="list-inline-item active">
                                                        <a id="{{ 'carousel-selector-' . $j }}"
                                                            data-slide-to="{{ $j }}"
                                                            data-target="#listingDetailsSlider">
                                                            <img src="{{ asset('/propiedades_documentos/' . $fotos[$j]->nombre_archivo) }}"
                                                                class="img-fluid" alt="listing-small">
                                                        </a>
                                                    </li>
                                                @else
                                                    <li class="list-inline-item">
                                                        <a id="{{ 'carousel-selector-' . $j }}"
                                                            data-slide-to="{{ $j }}"
                                                            data-target="#listingDetailsSlider">
                                                            <img src="{{ asset('/propiedades_documentos/' . $fotos[$j]->nombre_archivo) }}"
                                                                class="img-fluid" alt="listing-small">
                                                        </a>
                                                    </li>
                                                @endif
                                            @endfor

                                        </ul>
                                        <!-- main slider carousel items -->
                                    </div>

                                    <div class="floor-plan property wprt-image-video w50 pro">
                                        <h5>Ubicacion</h5>
                                        @if(!$property[0]->ubicacion == null)
                                         {{!!$property[0]->ubicacion!!}}
                                        @else
                                        <p class="mb-3">No hay ubicacion disponible</p>
                                        @endif
                                    </div>

                                    <div class="blog-info details mb-30">
                                        <h5 class="mb-4">Descripción</h5>
                                        <p class="mb-3">
                                            {{ $property[0]->descripcion ?? 'No hay descripcion disponible' }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single homes-content details mb-30">
                                <!-- title -->
                                <h5 class="mb-4">Detalles de propiedad</h5>
                                <ul class="homes-list clearfix">
                                    <li>
                                        <span class="font-weight-bold mr-1">Tipo de propiedad:</span>
                                        <span class="det">{{ $property[0]->TipoPropiedad->nombre }}</span>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold mr-1">Estatus de propiedad:</span>
                                        <span class="det">{{ $property[0]->EstatusPropiedad->nombre }}</span>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold mr-1">Precio:</span>
                                        <span class="det">{{ "$ " . number_format($property[0]->precio, 2) }}</span>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold mr-1">Habitaciones:</span>
                                        <span class="det">{{ $property[0]->recamaras }}</span>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold mr-1">Baños:</span>
                                        <span class="det">{{ $property[0]->bano }}</span>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold mr-1">Fecha de construcción:</span>
                                        <span class="det">{{ $property[0]->fecha_construccion }}</span>
                                    </li>
                                </ul>
                                <!-- title -->
                                <h5 class="mt-5">Comodidades</h5>
                                <!-- cars List -->
                                <ul class="homes-list clearfix">

                                    @if ($property[0]->aire_condicionado >= 1)
                                        <li>
                                            <i class="fa fa-check-square" aria-hidden="true"></i>
                                            <span>Aire acondicionado</span>
                                        </li>
                                    @endif

                                    @if ($property[0]->balcon >= 1)
                                        <li>
                                            <i class="fa fa-check-square" aria-hidden="true"></i>
                                            <span>Balcon</span>
                                        </li>
                                    @endif

                                    @if ($property[0]->internet >= 1)
                                        <li>
                                            <i class="fa fa-check-square" aria-hidden="true"></i>
                                            <span>Internet</span>
                                        </li>
                                    @endif

                                    @if ($property[0]->lavaplatos >= 1)
                                        <li>
                                            <i class="fa fa-check-square" aria-hidden="true"></i>
                                            <span>Lavaplatos</span>
                                        </li>
                                    @endif

                                    @if ($property[0]->cable >= 1)
                                        <li>
                                            <i class="fa fa-check-square" aria-hidden="true"></i>
                                            <span>TV Cable</span>
                                        </li>
                                    @endif

                                    @if ($property[0]->estacionamiento >= 1)
                                        <li>
                                            <i class="fa fa-check-square" aria-hidden="true"></i>
                                            <span>Estacionamiento</span>
                                        </li>
                                    @endif

                                    @if ($property[0]->alberca >= 1)
                                        <li>
                                            <i class="fa fa-check-square" aria-hidden="true"></i>
                                            <span>Alberca</span>
                                        </li>
                                    @endif

                                    @if ($property[0]->refrigerador >= 1)
                                        <li>
                                            <i class="fa fa-check-square" aria-hidden="true"></i>
                                            <span>Refrigerador</span>
                                        </li>
                                    @endif

                                </ul>
                            </div>
                            <div class="floor-plan property wprt-image-video w50 pro">
                                <h5>Planos de construcción</h5>
                                @if(!$property[0]->planos == null)
                                <img alt="image" src="{{ asset('/planos_documentos/' . $property[0]->planos ) }}">
                                @else
                                <p class="mb-3">No hay planos disponibles</p>
                                @endif
                            </div>



                            <div class="floor-plan property wprt-image-video w50 pro">
                                <h5>Nearbys</h5>
                                <div class="property-nearby">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="nearby-info mb-4">
                                                <span class="nearby-title mb-3 d-block text-info">
                                                    <i class="fas fa-building mr-2"></i><b class="title">Lugares
                                                        cercanos</b>
                                                </span>
                                                <div class="nearby-list">
                                                    <ul class="property-list list-unstyled mb-0">
                                                        <li class="d-flex">
                                                            @if (!$property[0]->nearbys == null)
                                                                <h6 class="mb-3 mr-2">{{ $property[0]->nearbys }}</h6>
                                                            @else
                                                                <h6 class="mb-3 mr-2">No hay información para mostrar.</h6>
                                                            @endif
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <aside class="col-lg-4 col-md-12 car">
                            <div class="single widget">
                                {{-- <!-- Start: Schedule a Tour -->
                                <div class="schedule widget-boxed mt-33 mt-0">
                                    <div class="widget-boxed-header">
                                        <h4><i class="fa fa-calendar pr-3 padd-r-10"></i>Schedule a Tour</h4>
                                    </div>
                                    <div class="widget-boxed-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 book">
                                                <input type="text" id="reservation-date" data-lang="en"
                                                    data-large-mode="true" data-min-year="2017" data-max-year="2020"
                                                    data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0"
                                                    data-theme="my-style" class="form-control" readonly="">
                                            </div>
                                            <div class="col-lg-6 col-md-12 book2">
                                                <input type="text" id="reservation-time" class="form-control"
                                                    readonly="">
                                            </div>
                                        </div>
                                        <div class="row mrg-top-15 mb-3">
                                            <div class="col-lg-6 col-md-12 mt-4">
                                                <label class="mb-4">Adult</label>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn counter-btn theme-cl btn-number"
                                                            disabled="disabled" data-type="minus" data-field="quant[1]">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="quant[1]"
                                                        class="border-0 text-center form-control input-number"
                                                        data-min="0" data-max="10" value="0">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn counter-btn theme-cl btn-number"
                                                            data-type="plus" data-field="quant[1]">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 mt-4">
                                                <label class="mb-4">Children</label>
                                                <div class="input-group">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn counter-btn theme-cl btn-number"
                                                            disabled="disabled" data-type="minus" data-field="quant[2]">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                    </span>
                                                    <input type="text" name="quant[2]"
                                                        class="border-0 text-center form-control input-number"
                                                        data-min="0" data-max="10" value="0">
                                                    <span class="input-group-btn">
                                                        <button type="button" class="btn counter-btn theme-cl btn-number"
                                                            data-type="plus" data-field="quant[2]">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="payment-method.html"
                                            class="btn reservation btn-radius theme-btn full-width mrg-top-10">Submit
                                            Request</a>
                                    </div>
                                </div> --}}
                                <!-- End: Schedule a Tour -->
                                <!-- end author-verified-badge -->
                                <div class="sidebar">
                                    <br><br><br><br>
                                    <div class="widget-boxed mt-33 mt-5">
                                        <div class="section-title">
                                            <h3>Informacion Del </h3>
                                            <h2>Contacto</h2>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="sidebar-widget author-widget2">
                                                <div class="author-box clearfix">
                                                    <img src="{{ asset('/fotos_documentos/' . $property[0]->seller->foto) }}" /></span>

                                                    <h4 class="author__title">{{ $property[0]->seller->name }}</h4>
                                                    <p class="author__meta">Bienes raíces</p>
                                                </div>
                                                <ul class="author__contact">
                                                    <li><span class="la la-phone"><i class="fa fa-phone"
                                                                aria-hidden="true"></i></span><a
                                                            href="#">{{ $property[0]->seller->celular }}</a></li>
                                                    <li><span class="la la-envelope-o"><i class="fa fa-envelope"
                                                                aria-hidden="true"></i></span><a
                                                            href="#">{{$property[0]->seller->email }}</a></li>
                                                </ul>

                                            </div>
                                        </div>





                                        <div class="container-fluid p-2 py-0 pb-3">
                                            <div class="row p-0 p-md-2 py-0 py-md-0">
                                                <div class="col-12">
                                                    <div class="">
                                                        <style>
                                                            .fa {
                                                                margin: 0 auto;
                                                                max-width: 500px;

                                                            }
                                                            .fa ul li {
                                                                display: inline-flex;


                                                            }
                                                            .fa ul li a {
                                                                padding: 30px;

                                                                margin: 1px;
                                                                font-size: 30px;
                                                                color: #FF385C;


                                                            }
                                                        </style>
                                                       <div class="section-title">
                                                        <h3>Compartelo en tus</h3>
                                                        <h2>Redes Sociales</h2>
                                                    </div>
                                                        <div class="fa">
                                                            {!! $share_buttons !!}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-search-field-2">
                                        {{-- <div class="widget-boxed mt-5">
                                            <div class="widget-boxed-header">
                                                <h4>Recent Properties</h4>
                                            </div>
                                            <div class="widget-boxed-body">
                                                <div class="recent-post">
                                                    <div class="recent-main">
                                                        <div class="recent-img">
                                                            <a href="blog-details.html"><img
                                                                    src="{{ asset('cliente/images/feature-properties/fp-1.jpg') }}"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="info-img">
                                                            <a href="blog-details.html">
                                                                <h6>Family Home</h6>
                                                            </a>
                                                            <p>$230,000</p>
                                                        </div>
                                                    </div>
                                                    <div class="recent-main my-4">
                                                        <div class="recent-img">
                                                            <a href="blog-details.html"><img
                                                                    src="{{ asset('cliente/images/feature-properties/fp-2.jpg') }}"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="info-img">
                                                            <a href="blog-details.html">
                                                                <h6>Family Home</h6>
                                                            </a>
                                                            <p>$230,000</p>
                                                        </div>
                                                    </div>
                                                    <div class="recent-main">
                                                        <div class="recent-img">
                                                            <a href="blog-details.html"><img
                                                                    src="{{ asset('cliente/images/feature-properties/fp-3.jpg') }}"
                                                                    alt=""></a>
                                                        </div>
                                                        <div class="info-img">
                                                            <a href="blog-details.html">
                                                                <h6>Family Home</h6>
                                                            </a>
                                                            <p>$230,000</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-boxed mt-5">
                                            <div class="widget-boxed-header mb-5">
                                                <h4>Feature Properties</h4>
                                            </div>
                                            <div class="widget-boxed-body">
                                                <div class="slick-lancers">
                                                    <div class="agents-grid mr-0">
                                                        <div class="listing-item compact">
                                                            <a href="properties-details.html"
                                                                class="listing-img-container">
                                                                <div class="listing-badges">
                                                                    <span class="featured">$ 230,000</span>
                                                                    <span>For Sale</span>
                                                                </div>
                                                                <div class="listing-img-content">
                                                                    <span class="listing-compact-title">House Luxury <i>New
                                                                            York</i></span>
                                                                    <ul class="listing-hidden-content">
                                                                        <li>Area <span>720 sq ft</span></li>
                                                                        <li>Rooms <span>6</span></li>
                                                                        <li>Beds <span>2</span></li>
                                                                        <li>Baths <span>3</span></li>
                                                                    </ul>
                                                                </div>
                                                                <img src="images/feature-propertie{{ asset('cliente/s/fp') }}-1.jpg"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="agents-grid mr-0">
                                                        <div class="listing-item compact">
                                                            <a href="properties-details.html"
                                                                class="listing-img-container">
                                                                <div class="listing-badges">
                                                                    <span class="featured">$ 6,500</span>
                                                                    <span class="rent">For Rent</span>
                                                                </div>
                                                                <div class="listing-img-content">
                                                                    <span class="listing-compact-title">House Luxury <i>Los
                                                                            Angles</i></span>
                                                                    <ul class="listing-hidden-content">
                                                                        <li>Area <span>720 sq ft</span></li>
                                                                        <li>Rooms <span>6</span></li>
                                                                        <li>Beds <span>2</span></li>
                                                                        <li>Baths <span>3</span></li>
                                                                    </ul>
                                                                </div>
                                                                <img src="{{ asset('cliente/images/feature-properties/fp-2.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="agents-grid mr-0">
                                                        <div class="listing-item compact">
                                                            <a href="properties-details.html"
                                                                class="listing-img-container">
                                                                <div class="listing-badges">
                                                                    <span class="featured">$ 230,000</span>
                                                                    <span>For Sale</span>
                                                                </div>
                                                                <div class="listing-img-content">
                                                                    <span class="listing-compact-title">House Luxury <i>San
                                                                            Francisco</i></span>
                                                                    <ul class="listing-hidden-content">
                                                                        <li>Area <span>720 sq ft</span></li>
                                                                        <li>Rooms <span>6</span></li>
                                                                        <li>Beds <span>2</span></li>
                                                                        <li>Baths <span>3</span></li>
                                                                    </ul>
                                                                </div>
                                                                <img src="{{ asset('cliente/images/feature-properties/fp-3.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="agents-grid mr-0">
                                                        <div class="listing-item compact">
                                                            <a href="properties-details.html"
                                                                class="listing-img-container">
                                                                <div class="listing-badges">
                                                                    <span class="featured">$ 6,500</span>
                                                                    <span class="rent">For Rent</span>
                                                                </div>
                                                                <div class="listing-img-content">
                                                                    <span class="listing-compact-title">House Luxury
                                                                        <i>Miami FL</i></span>
                                                                    <ul class="listing-hidden-content">
                                                                        <li>Area <span>720 sq ft</span></li>
                                                                        <li>Rooms <span>6</span></li>
                                                                        <li>Beds <span>2</span></li>
                                                                        <li>Baths <span>3</span></li>
                                                                    </ul>
                                                                </div>
                                                                <img src="{{ asset('cliente/images/feature-properties/fp-4.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="agents-grid mr-0">
                                                        <div class="listing-item compact">
                                                            <a href="properties-details.html"
                                                                class="listing-img-container">
                                                                <div class="listing-badges">
                                                                    <span class="featured">$ 230,000</span>
                                                                    <span>For Sale</span>
                                                                </div>
                                                                <div class="listing-img-content">
                                                                    <span class="listing-compact-title">House Luxury
                                                                        <i>Chicago IL</i></span>
                                                                    <ul class="listing-hidden-content">
                                                                        <li>Area <span>720 sq ft</span></li>
                                                                        <li>Rooms <span>6</span></li>
                                                                        <li>Beds <span>2</span></li>
                                                                        <li>Baths <span>3</span></li>
                                                                    </ul>
                                                                </div>
                                                                <img src="{{ asset('cliente/images/feature-properties/fp-5.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="agents-grid mr-0">
                                                        <div class="listing-item compact">
                                                            <a href="properties-details.html"
                                                                class="listing-img-container">
                                                                <div class="listing-badges">
                                                                    <span class="featured">$ 6,500</span>
                                                                    <span class="rent">For Rent</span>
                                                                </div>
                                                                <div class="listing-img-content">
                                                                    <span class="listing-compact-title">House Luxury
                                                                        <i>Toronto CA</i></span>
                                                                    <ul class="listing-hidden-content">
                                                                        <li>Area <span>720 sq ft</span></li>
                                                                        <li>Rooms <span>6</span></li>
                                                                        <li>Beds <span>2</span></li>
                                                                        <li>Baths <span>3</span></li>
                                                                    </ul>
                                                                </div>
                                                                <img src="{{ asset('cliente/images/feature-properties/fp-6.jpg') }}"
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Start: Specials offer -->
                                        <div class="widget-boxed popular mt-5">
                                            <div class="widget-boxed-header">
                                                <h4>Specials of the day</h4>
                                            </div>
                                            <div class="widget-boxed-body">
                                                <div class="banner"><img
                                                        src="{{ asset('cliente/images/single-property/banner.jpg') }}"
                                                        alt=""></div>
                                            </div>
                                        </div>
                                        <!-- End: Specials offer -->
                                        <div class="widget-boxed popular mt-5">
                                            <div class="widget-boxed-header">
                                                <h4>Popular Tags</h4>
                                            </div>
                                            <div class="widget-boxed-body">
                                                <div class="recent-post">
                                                    <div class="tags">
                                                        <span><a href="#"
                                                                class="btn btn-outline-primary">Houses</a></span>
                                                        <span><a href="#" class="btn btn-outline-primary">Real
                                                                Home</a></span>
                                                    </div>
                                                    <div class="tags">
                                                        <span><a href="#"
                                                                class="btn btn-outline-primary">Baths</a></span>
                                                        <span><a href="#"
                                                                class="btn btn-outline-primary">Beds</a></span>
                                                    </div>
                                                    <div class="tags">
                                                        <span><a href="#"
                                                                class="btn btn-outline-primary">Garages</a></span>
                                                        <span><a href="#"
                                                                class="btn btn-outline-primary">Family</a></span>
                                                    </div>
                                                    <div class="tags">
                                                        <span><a href="#" class="btn btn-outline-primary">Real
                                                                Estates</a></span>
                                                        <span><a href="#"
                                                                class="btn btn-outline-primary">Properties</a></span>
                                                    </div>
                                                    <div class="tags no-mb">
                                                        <span><a href="#"
                                                                class="btn btn-outline-primary">Location</a></span>
                                                        <span><a href="#"
                                                                class="btn btn-outline-primary">Price</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- START SIMILAR PROPERTIES -->
                    {{-- <section class="similar-property featured portfolio p-0 bg-white-inner">
                        <div class="container">
                            <h5>Similar Properties</h5>
                            <div class="row portfolio-items">
                                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                                    <div class="project-single">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button alt featured">Featured</div>
                                                    <div class="homes-tag button alt sale">For Sale</div>
                                                    <div class="homes-price">$9,000/mo</div>
                                                    <img src="{{ asset('cliente/images/blog/b-11.jpg') }}" alt="home-1"
                                                        class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i
                                                        class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i
                                                        class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="single-property-1.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                        NYC</span>
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
                                            <div class="footer">
                                                <a href="agent-details.html">
                                                    <img src="{{ asset('cliente/images/testimonials/ts-1.jpg') }}"
                                                        alt="" class="mr-2"> Lisa Jhonson
                                                </a>
                                                <span>2 months ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-lg-4 col-md-6 col-xs-12 people">
                                    <div class="project-single">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button sale rent">For Rent</div>
                                                    <div class="homes-price">$3,000/mo</div>
                                                    <img src="{{ asset('cliente/images/blog/b-12.jpg') }}" alt="home-1"
                                                        class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i
                                                        class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i
                                                        class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="single-property-1.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                        NYC</span>
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
                                            <div class="footer">
                                                <a href="agent-details.html">
                                                    <img src="{{ asset('cliente/images/testimonials/ts-2.jpg') }}"
                                                        alt="" class="mr-2"> Karl Smith
                                                </a>
                                                <span>2 months ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes no-pb pbp-3">
                                    <div class="project-single no-mb mbp-3">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="single-property-1.html" class="homes-img">
                                                    <div class="homes-tag button alt sale">For Sale</div>
                                                    <div class="homes-price">$9,000/mo</div>
                                                    <img src="images/blog/b-1.jpg" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="button-effect">
                                                <a href="single-property-1.html" class="btn"><i
                                                        class="fa fa-link"></i></a>
                                                <a href="https://www.youtube.com/watch?v=14semTlwyUY"
                                                    class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                                <a href="single-property-2.html" class="img-poppu btn"><i
                                                        class="fa fa-photo"></i></a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                                            <p class="homes-address mb-3">
                                                <a href="single-property-1.html">
                                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South,
                                                        NYC</span>
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
                                            <div class="footer">
                                                <a href="agent-details.html">
                                                    <img src="{{ asset('cliente/images/testimonials/ts-3.jpg') }}"
                                                        alt="" class="mr-2"> katy Teddy
                                                </a>
                                                <span>2 months ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> --}}
                    <!-- END SIMILAR PROPERTIES -->
                </div>
            </section>
            <!-- END SECTION PROPERTIES LISTING -->



            @include('cliente.body.footer')


            <!-- Date Dropper Script-->
            <script>
                $('#reservation-date').dateDropper();
            </script>
            <!-- Time Dropper Script-->
            <script>
                this.$('#reservation-time').timeDropper({
                    setCurrentTime: false,
                    meridians: true,
                    primaryColor: "#e8212a",
                    borderColor: "#e8212a",
                    minutesInterval: '15'
                });
            </script>

            <script>
                $(document).ready(function() {
                    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                        disableOn: 700,
                        type: 'iframe',
                        mainClass: 'mfp-fade',
                        removalDelay: 160,
                        preloader: false,
                        fixedContentPos: false
                    });
                });
            </script>

            <script>
                $('.slick-carousel').each(function() {
                    var slider = $(this);
                    $(this).slick({
                        infinite: true,
                        dots: false,
                        arrows: false,
                        centerMode: true,
                        centerPadding: '0'
                    });

                    $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                        slider.slick('slickPrev');
                    });
                    $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                        slider.slick('slickNext');
                    });
                });
            </script>

        </div>
        <!-- Wrapper / End -->
    </body>
@endsection
