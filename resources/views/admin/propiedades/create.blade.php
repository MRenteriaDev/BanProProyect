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
            <hr>
            <br><br>
            <!-- /.card-header -->

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form id="pform" class="row g-3" method="POST" action="{{ route('propiedades.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre"
                            placeholder="Introduzca Nombre" value="{{ old('nombre') }}">
                        @error('nombre')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" name="precio" class="form-control" id="precio"
                            placeholder="Introduzca Precio" value="{{ old('precio') }}">
                        @error('precio')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tamano_propiedad">Tamaño de la propiedad</label>
                        <input type="text" name="tamano_propiedad" class="form-control" id="tamano_propiedad"
                            placeholder="Tamaño de la propiedad" value="{{ old('tamano_propiedad') }}">
                        @error('tamano_propiedad')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tamano_propiedad_construido">Tamaño de la propiedad construida</label>
                        <input type="text" name="tamano_propiedad_construido" class="form-control"
                            id="tamano_propiedad_construido" placeholder="Tamaño de la propiedad construida"
                            value="{{ old('tamano_propiedad_construido') }}">
                        @error('tamano_propiedad_construido')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="bano">Baño</label>
                        <input type="number" name="bano" class="form-control" id="bano"
                            placeholder="Cantidad de baños" value="{{ old('bano') }}">
                        @error('bano')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="recamaras">Recamaras</label>
                        <input type="number" name="recamaras" class="form-control" id="recamaras"
                            placeholder="Cantidad de recamaras" value="{{ old('recamaras') }}">
                        @error('recamaras')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="col-md-6">
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
                    <br><br>
                </div> --}}


                <div class="col-md-10">
                    <div class="form-floathing">
                        <label for="descripcion">Descripcion</label>
                        <textarea name="descripcion" id="descripcion" placeholder="Escriba caracteristicas" class="form-control"
                            cols="5" rows="2">
                            {{ old('descripcion') }}
                        </textarea>
                        @error('descripcion')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <br>
                    <br>
                </div>



                <div class="col-md-3">
                    <div class="form-group">
                        <label>Seleccionar Estatus de la Propiedad</label>
                        <select class="form-control select2" name="estatus_propiedad_id"
                            style="width: 100%;height: 100%;">
                            <option selected="selected" value="">Seleccionar</option>
                            @foreach ($estatuspropiedad as $estatupropiedad)
                                <option value={{ $estatupropiedad->id }}>{{ $estatupropiedad->nombre }}
                                </option>
                            @endforeach
                            @error('estatus_propiedad_id')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Seleccionar Tipo de propiedad</label>
                        <select class="form-control select2" name="tipo_propiedad_id" style="width: 100%;height: 100%;">
                            <option selected="selected" value="">Seleccionar</option>
                            @foreach ($tipopropiedades as $tipopropiedad)
                                <option value={{ $tipopropiedad->id }}>{{ $tipopropiedad->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Seleccionar Locacion</label>
                        <select class="form-control select2" name="locacion_id" style="width: 100%;height: 100%;">
                            <option selected="selected" value="">Seleccionar</option>
                            @foreach ($locacion as $locacion)
                                <option value={{ $locacion->id }}>{{ $locacion->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Seleccionar asesor</label>
                        <select class="form-control select2" name="seller_id" style="width: 100%;height: 100%;">
                            <option selected="selected" value="">Seleccionar</option>
                            @foreach ($seller as $seller)
                                <option value={{ $seller->id }}>{{ $seller->name }}</option>
                            @endforeach
                        </select>
                        @error('seller_id')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <br>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ubicacion">Ubicacion</label>
                        <input type="text" name="ubicacion" class="form-control" id="ubicacion"
                            placeholder="Introduzca link de ubicacion">
                        @error('ubicacion')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <br>
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
                    <ul class="gallery" id="image-list-sports"></ul>
                    <div class="col-12">
                        <button type="button" onclick="remove_image();change();" class="btn btn-primary btn-sm">Borrar
                            Fotos</button>
                    </div>
                    <br>
                </div>


                <!-- INTENTO DE JQEUERY -->





                <script>
                    function readFile(input) {
                        $("#status").html('Processing...');
                        counter = input.files.length;
                        let f1 = 0;
                        for (x = 0; x < counter; x++) { // for cuando x es menor que el numero de archivos cargados
                            if (input.files && input.files[x]) {
                                var index_fotos = x-1;


                                var reader = new FileReader();
                                file = input.files[x];
                                reader.name = file.name;
                                console.log("name outside:", reader.name);
                                reader.onload = function(e) {
                                    console.log('name inside:', e.target.name);
                                    $("#image-list-sports").append(
                                        '<li name="imagen" id="' + e.target.name +
                                        '" class="acomodo" ><img src="' + e.target
                                        .result +
                                        '" class="img-thumbnail" id="image-list-sports"></li>');
                                };


                                reader.readAsDataURL(input.files[x]);
                            }
                        }



                        f1 = 1;
                        console.log(f1);

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
                        document.getElementById("image-list-sports").innerHTML = "";
                        console.log("se borro");

                    }

                    function change() {
                        var ab = document.getElementById('nombre_archivo').value;
                        document.getElementById('nombre_archivo').value = "";

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
                        <button type="button" onclick="remove_blueprint();clear();"
                            class="btn btn-primary btn-sm">Borrar
                            Fotos</button>
                    </div>
                    <br>
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





                <div class="col-md-12">
                    <div class="form-floathing">
                        <label for="nearbys">Especifica si hay lugares de interés cerca</label>
                        <textarea name="nearbys" id="nearbys" placeholder="Escribe lugares cercanos" class="form-control" cols="5"
                            rows="2">
                            {{ old('nearbys') }}
                        </textarea>
                        @error('nearbys')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <br>
                </div>
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
