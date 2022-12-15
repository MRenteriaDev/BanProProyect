    @php
        $route = Route::current()->getName();
    @endphp

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('admin/img/BanProBlanco.png') }}" alt="BanPro" id="logo" class="w-50"
                style="margin-left:4rem" style="opacity: .8">
        </a>
        <br>
        <br>

        <!-- Sidebar -->
        <div class="sidebar">

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                    <li class="nav-item has-treeview">
                        <a href="{{ route('tipopropiedad.index') }}"
                            class="nav-link {{ $route == 'tipopropiedad.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-building-wheat"></i>
                            <p>
                                Tipo de propiedad
                            </p>
                        </a>

                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('zonas.index') }}"
                            class="nav-link {{ $route == 'zonas.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-magnifying-glass-location"></i>
                            <p>
                                Zonas
                            </p>
                        </a>
                    </li> --}}
                    <li class="nav-item has-treeview">
                        <a href="{{ route('locacion.index') }}"
                            class="nav-link {{ $route == 'locacion.index' ? 'active' : '' }} ">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>
                                Locacion
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('statuspropiedad.index') }}"
                            class="nav-link {{ $route == 'statuspropiedad.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-building-circle-check"></i>
                            <p>
                                Estatus Propiedad
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="{{ route('propiedades.index') }}"
                            class="nav-link {{ $route == 'propiedades.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-building"></i>
                            <p>
                                Propiedades
                            </p>
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="{{ route('review.index') }}"
                            class="nav-link {{ $route == 'review.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-pen-nib"></i>
                            <p>
                                Reviews
                            </p>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item has-treeview">
                        <a href="{{ route('reviewsellers.index') }}"
                            class="nav-link {{ $route == 'reviewsellers.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-keyboard"></i>
                            <p>
                                Review Seller
                            </p>
                        </a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a href="{{ route('solicitudvendedor.index') }}"
                            class="nav-link {{ $route == 'solicitudvendedor.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-file-pen"></i>
                            <p>
                                Solicitud Vendedor
                            </p>
                        </a>
                    </li> --}}

                    <li class="nav-item">
                        <a href="{{ route('sellers.index') }}"
                            class="nav-link {{ $route == 'sellers.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-person-shelter"></i>
                            <p>
                                Asesores
                            </p>
                        </a>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="{{ route('metodospagos.index') }}"
                            class="nav-link {{ $route == 'metodospagosindex.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-credit-card"></i>
                            <p>
                                Metodos de pago
                            </p>
                        </a>
                    </li> --}}

                    <li class="nav-item has-treeview">
                        <a href="{{ route('contact.index') }}"
                            class="nav-link {{ $route == 'contact.index' ? 'active' : '' }}">
                            <i class="fa-regular fa-id-badge"></i>
                            <p>
                                Contactos
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="{{ route('reportes.index') }}"
                            class="nav-link {{ $route == 'reportes.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-pen"></i>
                            <p>
                                Reportes
                            </p>
                        </a>
                    </li>

                    <li class="nav-item has-treeview">
                        <a href="{{ route('banner.index') }}"
                            class="nav-link {{ $route == 'bannerr.index' ? 'active' : '' }}">
                            <i class="fa-solid fa-image"></i>
                            <p>
                                Banner
                            </p>
                        </a>
                    </li>



            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
