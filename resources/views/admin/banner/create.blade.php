@extends('admin.admin_master')

@section('admin')
    <section class="content-header" style="margin-top: 10px">
        <title>Añadir banner | BanPro</title>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Banners</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                        <a class="btn btn-success btn-md" href="{{ route('banner.index') }}"><i class="fas fa-arrow-left"></i>
                            &nbsp; Volver a Inicio
                        </a>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><b>Banners</b></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body col-md-12">
                    <div class="col-md-6">

                        <div class="col-md-12">
                            <div class="form-floathing">
                                <label for="imagenes"> Selecciona la imágen</label>

                                <input type="file" onchange="readFile(this);" id="nombre_archivo" name="nombre_archivo[]"
                                    class="form-control" multiple>

                            </div>
                            <br>
                            <div id="status"></div>
                            <div id="photos" class="row"></div>
                            <div class="col-12">
                                <button type="button" onclick="remove_image();change();"
                                    class="btn btn-primary btn-sm">Borrar
                                    Fotos</button>
                            </div>
                        </div>


                <script>
                    function readFile(input) {
                        $("#status").html('Processing...');
                        counter = input.files.length;
                        for (x = 0; x < counter; x++) {
                            if (input.files && input.files[x]) {

                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    $("#photos").append('<div class="col-md-3 col-sm-3 col-xs-3"><img src="' + e.target.result +
                                        '" class="img-thumbnail" onclick="remove_image()" id="img"></div>');
                                };

                                reader.readAsDataURL(input.files[x]);
                            }
                        }
                        if (counter == x) {
                            $("#status").html('');
                        }

                    }

                    function remove_image() {
                        var images = document.getElementsByTagName('img');
                        var l = images.length;
                        for (var i = 0; i < l; i++) {
                            images[0].parentNode.removeChild(images[0]);
                        }
                    }

                    function change() {
                        var ab = document.getElementById('nombre_archivo').value;
                        document.getElementById('nombre_archivo').value = "";
                        $('#nombre_archivo').val('dsds');
                    }
                </script>



                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <a href="{{ route('banner.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
