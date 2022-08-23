<nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route ('admin.dashboard')}}" class="nav-link">
                <h5>Panel</h5>
            </a>
        </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar  -->
        <div class="container">
            <div class="dropdown">
                <img class="btn dropdown-toggle" src={{ asset('admin/img/BanProBlanco.png')  }}
                    alt="dropdown image" data-toggle="dropdown" class="img-responsive" width="60px" height="50px">
                <div class="row">
                    <ul class="dropdown-menu">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <div class="d-flex flex-column">
                                <div class="fw-bolder d-flex align-items-center fs-5"><strong>OCTACODE</strong></div>
                                <a href="#" class="fw-bold text-muted text-hover-primary fs-7">
                                    CONTACTO@OCTACODE.MX
                                </a>
                            </div>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a style="cursor: pointer" class="dropdown-item d-flex align-items-center"
                                        :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </ul>
</nav>
