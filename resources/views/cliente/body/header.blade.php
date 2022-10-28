<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="{{ url('/') }}"><img src="{{ asset('cliente/images/logo-white-1.png') }}"
                            data-sticky-logo="{{ asset('cliente/images/logo-white-1.png') }}" alt=""
                            width="1000"></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1 head-tr">
                    <ul id="responsive">
                        <li><a href="{{ url('/') }}" class="text-dark">Inicio</a>
                        </li>

                        {{-- <li><a class="text-dark" href="{{ route('sellers.grid') }}">Vendedores</a>
                        </li> --}}
                        <li><a class="text-dark" href="{{ route('contact') }}">Contacto</a>
                        </li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="{{ route('login') }}">Unete</a></li>
                        </li>
                        <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a
                                href="add-property.html" class="button border btn-lg btn-block text-center">Add
                                Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
            @php
                use Illuminate\Support\Facades\Auth;
                $userauth = Auth::user();
                $fd = "asset('cliente/images/testimonials/ts-1.jpg')";

            @endphp
            <!-- Right Side Content / End -->
            <div class="header-user-menu user-menu add">
                <div class="header-user-name">

                    @if (!isset(Auth::user()->name))
                        {{-- <span><img src="{{ asset('cliente/images/testimonials/ts-1.jpg') }}" alt=""></span>Hola! --}}
                    @else
                        <span><img src="{{ $userauth->avatar }}"
                                alt=""></span>{{ Auth::user()->name }}
                    @endif
                    <span><img src="{{ $userauth->avatar ?? '[$fd]' }}" alt=""></span>
                    {{ $user->name ?? '' }}
                </div>
                @if (!isset(Auth::user()->name))
                @else
                    <ul>
                        <li><a href="{{ route('dashboard') }}"> Editar perfil</a></li>
                        <li><a href="{{route('billing')}}">Convierte en Vendedor</a></li>
                        <li><a href="{{ route('seller.logout') }}">Cerrar Sesión</a></li>
                    </ul>
                @endif
            </div>
            <!-- Right Side Content / End -->

            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                <div class="header-widget sign-in">
                    @if (!isset(Auth::user()->name))
                        <div class="show-reg-form modal-open"><a
                                href="{{ route('login') }}"class="text-danger"><b>Unete!</b></a></div>
                    @else
                    @endif


                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
