<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ url('/') }}" class="nav-link">
                <h5>Inicio</h5>
            </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('contact') }}" class="nav-link">
                <h5>Contacto</h5>
            </a>
        </li>
        @if (Route::has('register'))
            @auth
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('SellerPropiedad.index') }}"class="nav-link">
                        <h5>Mis propiedades</h5>
                    </a>
                </li>
            @endauth
        @endif
    </ul>
    <div class="ml-auto">
        @php
            use Illuminate\Support\Facades\Auth;
            $userauth = Auth::user();
            $fd = "asset('cliente/images/testimonials/ts-1.jpg')";

        @endphp
        <!-- Right Side Content / End -->
        <li class="nav-item d-none d-sm-inline-block">
            <div class="col align-self-end">
                <div class="dropdown">
                   {{ $userauth->name }}

                    <img class="btn dropdown-toggle" src="{{ asset('/fotos_documentos/' . $userauth->foto) }}"
                        alt="dropdown image" data-toggle="dropdown" class="img-responsive" width="60px"
                        height="50px">


                    @if (!isset(Auth::user()->name))
                    @else
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('dashboard') }}"> Editar perfil</a></li>
                            <li><a href="{{ route('billing') }}">Convierte en Vendedor</a></li>
                            <li><a href="{{ route('seller.logout') }}">Cerrar Sesión</a></li>
                        </ul>
                    @endif
                </div>
            </div>
        </li>
    </div>

</nav>
