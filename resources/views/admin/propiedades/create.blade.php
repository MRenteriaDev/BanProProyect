@extends('admin.admin_master')

@section('admin')
    <section class="content-header" style="margin-top: 10px">
        <title>Propiedades | BanPro</title>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Propiedades</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                        <a class="btn btn-success btn-md" href="{{ route('propiedades.index') }}"><i
                                class="fas fa-arrow-left"></i>
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
                <h3 class="card-title">Creación de Propiedad</h3>
            </div>
            <br>
            <!-- /.card-header -->


            <form class="row g-3" method="POST" action="{{ route('propiedades.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre"
                            placeholder="Introduzca Nombre">
                        @error('nombre')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" class="form-control" id="precio"
                            placeholder="Introduzca Precio">
                        @error('precio')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tamano_propiedad">Tamaño de la propiedad</label>
                        <input type="text" name="tamano_propiedad" class="form-control" id="tamano_propiedad"
                            placeholder="Tamaño de la propiedad">
                        @error('tamano_propiedad')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tamano_propiedad_construido">Tamaño de la propiedad construida</label>
                        <input type="text" name="tamano_propiedad_construido" class="form-control"
                            id="tamano_propiedad_construido" placeholder="Tamaño de la propiedad construida">
                        @error('tamano_propiedad_construido')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bano">Baño</label>
                        <input type="number" name="bano" class="form-control" id="bano"
                            placeholder="Cantidad de baños">
                        @error('bano')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recamaras">Recamaras</label>
                        <input type="number" name="recamaras" class="form-control" id="recamaras"
                            placeholder="Cantidad de recamaras">
                        @error('recamaras')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="fecha_construccion">Fecha de construccion</label>
                        <input type="date" name="fecha_construccion" class="form-control" id="fecha_construccion"
                            placeholder="Introduzca fecha de construccion">
                        @error('fecha_construccion')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="aire_condicionado">Aire acondicionado</label>
                        <input type="checkbox" value="1" name="aire_condicionado" class="form-control"
                            id="aire_condicionado" placeholder="">
                        @error('aire_condicionado')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="balcon">Balcon</label>
                        <input type="checkbox" value="2" name="balcon" class="form-control" id="balcon"
                            placeholder="Enter name">
                        @error('balcon')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="internet">Internet</label>
                        <input type="checkbox" value="3" name="internet" class="form-control" id="internet"
                            placeholder="Enter name">
                        @error('internet')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Cable">Cable</label>
                        <input type="checkbox" value="4" name="cable" class="form-control" id="cable"
                            placeholder="Enter name">
                        @error('cable')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alberca">Alberca</label>
                        <input type="checkbox" value="5" name="alberca" class="form-control" id="alberca"
                            placeholder="Enter name">
                        @error('alberca')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lavaplatos">Lavaplatos</label>
                        <input type="checkbox" value="6" name="lavaplatos" class="form-control" id="lavaplatos"
                            placeholder="Enter name">
                        @error('lavaplatos')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="estacionamiento">Estacionamiento</label>
                        <input type="checkbox" value="7" name="estacionamiento" class="form-control"
                            id="estacionamiento" placeholder="Enter name">
                        @error('estacionamiento')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="refrigerador">Refrigerador</label>
                        <input type="checkbox" value="8" name="refrigerador" class="form-control"
                            id="refrigerador" placeholder="Enter name">
                        @error('refrigerador')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floathing">
                        <label for="nearbys">Especifica si hay lugares de interés cerca</label>
                        <textarea name="nearbys" class="form-control" cols="10" rows="2"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Seleccionar Solicitud del vendedor</label>
                        <select class="form-control select2" name="solicitud_vendedor_id"
                            style="width: 100%;height: 100%;">
                            <option selected="selected">Seleccionar</option>
                            @foreach ($solicitudvendedor as $solicitudvendedo)
                                <option value={{ $solicitudvendedo->id }}>{{ $solicitudvendedo->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Seleccionar Review</label>
                        <select class="form-control select2" name="review_id" style="width: 100%;height: 100%;">
                            <option selected="selected">Seleccionar</option>
                            @foreach ($reviews as $review)
                                <option value={{ $review->id }}>{{ $review->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Seleccionar Estatus de la Propiedad</label>
                        <select class="form-control select2" name="estatus_propiedad_id"
                            style="width: 100%;height: 100%;">
                            <option selected="selected">Seleccionar</option>
                            @foreach ($estatuspropiedad as $estatupropiedad)
                                <option value={{ $estatupropiedad->id }}>{{ $estatupropiedad->nombre }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Seleccionar Tipo de propiedad</label>
                        <select class="form-control select2" name="tipo_propiedad_id" style="width: 100%;height: 100%;">
                            <option selected="selected">Seleccionar</option>
                            @foreach ($tipopropiedades as $tipopropiedad)
                                <option value={{ $tipopropiedad->id }}>{{ $tipopropiedad->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Seleccionar Locacion</label>
                        <select class="form-control select2" name="locacion_id" style="width: 100%;height: 100%;">
                            <option selected="selected">Seleccionar</option>
                            @foreach ($locacion as $locacion)
                                <option value={{ $locacion->id }}>{{ $locacion->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- <div class="col-md-12">
                    <div class="form-group">
                        <label for="video_propiedad">Videos de la propiedad</label>
                        <input type="text" name="video_propiedad" class="form-control" id="video_propiedad"
                            placeholder="Cargar video">
                        <br>
                        <script>
                            function convertYoutube(video_propiedad) {
                                return preg_replace(
                                    "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
                                    "<iframe src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
                                    video_propiedad
                                );
                            }
                        </script>
                        <br>
                        <iframe id="myFrame" width="420" height="345">fgh
                        </iframe>
                        <script>
                            function showVideo() {
                                var videoUrl = document.getElementById("video_propiedad").value
                                document.getElementById("myFrame").src = videoUrl
                            }
                        </script>
                        @error('video_propiedad')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div> --}}
                <div class="col-md-12">
                    <div class="form-floathing">
                        <label for="imagenes"> Imágenes</label>

                        <input type="file" onchange="readFile(this);" id="nombre_archivo" name="nombre_archivo[]"
                            class="form-control" multiple>

                    </div>
                    <br>
                    <div id="status"></div>
                    <div id="photos" class="row"></div>
                    <div class="col-12">
                        <button type="button" onclick="remove_image();change();" class="btn btn-primary btn-sm">Borrar
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

                <br>
                <div class="col-md-12">
                    <div class="form-floathing">
                        <label for="planos"> Planos</label>

                        <input type="file" onchange="readblueprint(this);" id="planos" name="planos"
                            class="form-control">

                    </div>
                    <br>
                    <div id="area"></div>
                    <div id="blueprint" class="row"></div>
                    <div class="col-12">
                        <button type="button" onclick="remove_blueprint();clear();" class="btn btn-primary btn-sm">Borrar
                            Fotos</button>
                    </div>
                </div>



                <script>
                    function readblueprint(input) {
                        $("#area").html('Processing...');
                        counter = input.files.length;
                        for (x = 0; x < counter; x++) {
                            if (input.files && input.files[x]) {

                                var reader = new FileReader();

                                reader.onload = function(e) {
                                    $("#blueprint").append('<div class="col-md-3 col-sm-3 col-xs-3"><img src="' + e.target.result +
                                        '" class="img-thumbnail" onclick="remove_blueprint()" id="imagen"></div>');
                                };

                                reader.readAsDataURL(input.files[x]);
                            }
                        }
                        if (counter == x) {
                            $("#area").html('');
                        }

                    }

                    function remove_blueprint() {
                        var images = document.getElementsByTagName('imagen');
                        var l = images.length;
                        for (var i = 0; i < l; i++) {
                            images[0].parentNode.removeChild(images[0]);
                        }
                    }

                    function clear() {
                        var ab = document.getElementById('planos').value;
                        document.getElementById('planos').value = "";
                        $('#planos').val('dsds');
                    }
                </script>

                <br>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <a href="{{ route('propiedades.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
            {{-- <button onclick="showVideo();convertYoutube();">Check</button> --}}
        </div>
    </div>
@endsection
