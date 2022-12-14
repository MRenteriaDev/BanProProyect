@extends('cliente.body.cliente_herencia')

@section('clienteherencia')

    <body class="inner-pages hd-white">
        <div id="wrapper">
            <!-- START SECTION HEADINGS -->
            <!-- Header Container
                                    ================================================== -->
            @include('cliente.body.header')
            <div class="clearfix"></div>
            <!-- Header Container / End -->

            <section class="headings">
                <div class="text-heading text-center">
                    <div class="container">
                        <h1>Registro</h1>

                    </div>
                </div>
            </section>
            <!-- END SECTION HEADINGS -->



            @if ($errors->any())
                <div class="alert alert-danger col-md-12">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- START SECTION 404 -->
            <div id="login">
                <div class="login">
                    <form autocomplete="off" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Nombre completo</label>
                            <input class="form-control" type="text" name="name">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-group">
                            <label>Celular</label>
                            <input class="form-control" type="text" name="celular">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email">
                            <i class="icon_mail_alt"></i>
                        </div>
                        <div class="form-group">
                            <label>Contrase??a</label>
                            <input class="form-control" type="password" id="password1" name="password">
                            <i class="icon_lock_alt"></i>
                        </div>
                        <div class="form-group">
                            <label>Confirmar contrase??a</label>
                            <input class="form-control" type="password" id="password2" name="password_confirmation">
                            <i class="icon_lock_alt"></i>
                        </div>
                        <div class="form-group">
                            <label>Ciudad</label>
                            <input class="form-control" type="text" name="ciudad">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <input class="form-control" type="text" name="estado">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-group">
                            <label>Pais</label>
                            <input class="form-control" type="text" name="pais">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-group">
                            <label>Direcci??n</label>
                            <input class="form-control" type="text" name="direccion">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-group">
                            <label>Codigo Postal</label>
                            <input class="form-control" type="text" name="cp">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-group">
                            <label>Inmobiliaria a la que pertenece:</label>
                            <input class="form-control" type="text" name="inmobiliaria">
                            <i class="ti-user"></i>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>

                            <input type="file" onchange="readfoto(this);" id="foto" name="foto"
                                class="form-control">

                        </div>
                        <br>
                        <div id="area"></div>
                        <div id="fotos" class="row"></div>
                        <div class="col-12 my-5">
                            <button type="button" onclick="remove_foto();clean();" class="btn btn-primary btn-sm">Borrar
                                Fotos</button>
                        </div>


                        <script>
                            function readfoto(input) {
                                $("#area").html('Processing...');
                                counter = input.files.length;
                                for (x = 0; x < counter; x = 1) {
                                    if (input.files && input.files[x]) {

                                        var reader = new FileReader();

                                        reader.onload = function(e) {
                                            $("#fotos").append('<div class="col-md-6 col-sm-6 col-xs-3"><img src="' + e.target.result +
                                                '" class="img-thumbnail" style="width:250px" onclick="remove_foto();clean" id="img"></div>'
                                            );
                                        };

                                        reader.readAsDataURL(input.files[x]);
                                    }
                                }
                                if (counter == x) {
                                    $("#area").html('');
                                }

                            }

                            function remove_foto() {
                                var images = document.getElementsByTagName('img');
                                var l = images.length;
                                for (var i = 0; i < l; i++) {
                                    images[0].parentNode.removeChild(images[0]);
                                }
                            }

                            function clean() {
                                var ab = document.getElementById('foto').value;
                                document.getElementById('foto').value = "";
                                $('#foto').val('dsds');
                            }
                        </script>


                            <div class="text-center add_top_10"><input type="checkbox" name="acepto">He le??do y acepto los <strong><a
                                        href="{{ route('aviso') }}">
                                        t??rminos y condiciones</a></strong>

                            </div>
                        <br>


                        <div id="pass-info" class="clearfix"></div>
                        <button type="submit" class="btn_1 rounded full-width add_top_30">Registrate</button>
                    </form>
                </div>
            </div>


            <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
            <!-- END FOOTER -->
            <!-- Wrapper / End -->

    </body>

    @include('cliente.body.footer')
@endsection
