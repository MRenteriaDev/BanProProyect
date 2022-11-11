@php
    $route = Route::current()->getName();
@endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index.page') }}">
        <img src="{{ asset('cliente/images/logo-white-1.png') }}" style="width: 100%">
    </a>
    <br>
    <br>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                {{-- <li class="nav-item has-treeview">
                    <a href="{{ route('tipopropiedad.index') }}"
                        class="nav-link {{ $route == 'tipopropiedad.index' ? 'active' : '' }}">
                        <i class="fa-solid fa-building-wheat"></i>
                        <p>
                            Tipo de propiedad
                        </p>
                    </a>
                </li> --}}
            </ul>




        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
