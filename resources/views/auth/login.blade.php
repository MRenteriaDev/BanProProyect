@extends('cliente.cliente_master')

@section('cliente')

    <body class="inner-pages hd-white">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- START SECTION HEADINGS -->
            <!-- Header Container
                                                    ================================================== -->
            @include('cliente.body.header')
            <div class="clearfix"></div>
            <!-- Header Container / End -->
            <br>
            <br>
            <br>
            <section class="headings">
                <div class="text-heading text-center">
                    <div class="container">
                        <h1>Login</h1>
                        <h2><a href="{{ url('/') }}">Home </a> &nbsp;/&nbsp; login</h2>
                    </div>
                </div>
            </section>
            <!-- END SECTION HEADINGS -->

            <!-- START SECTION LOGIN -->
            <div class="row">
                <div class="col-6" id="login">
                    <div class="login">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="access_social">
                                {{-- <a href="{{ url('auth/facebook') }}" class="social_bt facebook">Login with Facebook</a> --}}
                                <a href="{{ url('auth/google') }}" class="social_bt google">Login with Google</a>
                            </div>
                            <div class="divider"><span>Or</span></div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email">
                                <i class="icon_mail_alt"></i>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="">
                                <i class="icon_lock_alt"></i>
                            </div>
                            <div class="fl-wrap filter-tags clearfix add_bottom_30">
                                <div class="checkboxes float-left">
                                    <div class="filter-tags-wrap">
                                        <input id="check-b" type="checkbox" name="check">
                                        <label for="check-b">Remember me</label>
                                    </div>
                                </div>
                                <a class="float-right mt-1"><a id="forgot" href="{{ route('password.request2') }}">Forgot
                                        Password?</a></a>
                            </div>
                            <button type="submit" href="#0" class="btn_1 rounded full-width">Accesar a BanPro</button>
                            <div class="text-center add_top_10">Nuevo en nuestro sitio? <strong><a
                                        href="{{ route('register') }}">Registrate Aquí!</a></strong></div>
                        </form>
                    </div>
                </div>

                <div class="col-6">
                    <div class="section-title">
                        <div class="col-12 align-self-center mx-5">
                            <h3>Conviertete En </h3>
                            <h2>Vendedor Aqui</h2>
                        </div>

                        <div class="col-12 align-self-center mx-5 my-5">
                            <a href="#">
                                <img src="{{ asset('cliente/images/vendedor.jpg') }}" class="rounded-circle" style="width: 30%" />
                            </a>
                        </div>
                    </div>
                </div>




            </div>



        </div>
        <!-- Wrapper / End -->
    </body>
    @include('cliente.body.footer')
@endsection
