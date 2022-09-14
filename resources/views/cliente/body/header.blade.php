<header id="header-container" class="header head-tr">
    <!-- Header -->
    <div id="header" class="head-tr bottom">
        <div class="container container-header">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="{{url('/')}}"><img src="{{asset('cliente/images/logo-white-1.png')}}"
                            data-sticky-logo="{{asset('cliente/images/logo-white-1.png')}}" alt="" width="1000"></a>
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
                        <li><a href="{{url('/')}}" class="btn btn-sm">Panel</a>
                        </li>
                        <li><a class="text-dark"  href="{{route('properties.grid')}}">Propiedades</a>
                        </li>
                        <li><a class="text-dark" href="{{route('sellers.grid')}}">Vendedores</a>
                        </li>
                        <li><a class="text-dark" href="{{ route('contact')}}">Contacto</a>
                        </li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                        <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a>
                        </li>
                        <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a
                                href="add-property.html"
                                class="button border btn-lg btn-block text-center">Add Listing<i
                                    class="fas fa-laptop-house ml-2"></i></a></li>
                    </ul>
                </nav>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
            @php
            use Illuminate\Support\Facades\Auth;
            $userauth = Auth::user();

            @endphp
            <!-- Right Side Content / End -->
            <div class="header-user-menu user-menu add">
                <div class="header-user-name">
                    <span><img src="{{asset('cliente/images/testimonials/ts-1.jpg')}}" alt=""></span>Hola! {{$user->name ?? ''}}
                </div>
                <ul>
                    <li><a href="user-profile.html"> Edit profile</a></li>
                    <li><a href="add-property.html"> Add Property</a></li>
                    <li><a href="payment-method.html"> Payments</a></li>
                    <li><a href="change-password.html"> Change Password</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </div>
            <!-- Right Side Content / End -->

            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                <!-- Header Widget -->
                <div class="header-widget sign-in">
                    <div class="show-reg-form modal-open"><a href="{{route('login')}}">Unete!</a></div>
                </div>
                <!-- Header Widget / End -->
            </div>
            <!-- Right Side Content / End -->

        </div>
    </div>
    <!-- Header / End -->

</header>
