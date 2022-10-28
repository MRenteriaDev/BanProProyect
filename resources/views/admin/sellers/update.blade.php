@extends('admin.admin_master')

@section('admin')
    <section class="content-header" style="margin-top: 10px">
        <title>Sellers | BanPro</title>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Seller</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                        <a class="btn btn-success btn-md" href="{{ route('sellers.index') }}"><i class="fas fa-arrow-left"></i>
                            &nbsp; Volver a Inicio
                        </a>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="col-md-12">
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Actualización de Seller</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('sellers.update', $seller->id) }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" name="name" value="{{ $seller->name }}" class="form-control"
                            id="name" placeholder="Introduzca Nombre">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Correo</label>
                        <input type="text" name="email" value="{{ $seller->email }}" class="form-control"
                            id="email" placeholder="Introduzca Correo">
                        @error('email')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="celular">Celular</label>
                        <input type="number" name="celular" value="{{ $seller->celular }}"  class="form-control"
                            id="celular" placeholder="Introduzca Celular">
                        @error('celular')
                            <span class="number-danger"> {{ $message }} </span>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <div class="form-floathing">
                            <label for="foto">Foto</label>

                            <input type="file" onchange="readfoto(this);" id="foto" name="foto"
                                class="form-control">

                        </div>
                        <br>
                        <div id="area"></div>
                        <div id="fotos" class="row"></div>
                        <div class="col-12">
                            <button type="button" onclick="remove_foto();clean();"
                                class="btn btn-primary btn-sm">Borrar
                                Fotos</button>
                        </div>
                    </div>

                    <script>
                        function readfoto(input) {
                            $("#area").html('Processing...');
                            counter = input.files.length;
                            for (x = 0; x < counter; x++) {
                                if (input.files && input.files[x]) {

                                    var reader = new FileReader();

                                    reader.onload = function(e) {
                                        $("#fotos").append('<div class="col-md-3 col-sm-3 col-xs-3"><img src="' + e.target.result +
                                            '" class="img-thumbnail" onclick="remove_foto();clean" id="img"></div>');
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







                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <a href="{{ route('sellers.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
