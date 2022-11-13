<section class="user-page section-padding pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                <div class="user-profile-box mb-0">
                    <div class="img-fluid"><img src="{{ asset('cliente/images/logo-white-1.png') }}">
                    </div>

                            <div class="header clearfix">
                                <img alt="avatar" class="img-fluid profile-img"
                                    src="{{ asset('/fotos_documentos/' . $user->avatar ?? '') }}" />
                            </div>
                            <div class="active-user">
                                <h2>{{ $user->name }}</h2>
                            </div>

                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a href="dashboard.html">
                                            <i class="fa fa-map-marker"></i> Perfil
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboard.html">
                                            <i class="fa fa-map-marker"></i> Informacion De Pago
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboard.html">
                                            <i class="fa fa-map-marker"></i> Mis Propiedades
                                        </a>
                                    </li>
                                </ul>
                            </div>


                </div>
            </div>

        </div>
    </div>
</section>
