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
                <h3 class="card-title">Actualizar Propiedad</h3>
            </div>
            <!-- /.card-header -->


            <div class=navbar navbar-light bg-faded>
                <ul class=nav navbar-nav>
                    <li>
                        <a class=nav-item nav-link active data-toggle=tab href=#start><button type="button"
                                class="btn btn-primary mr-3">Propiedades</button></a>
                    </li>

                    <li>
                        <a class=nav-item nav-link data-toggle=tab href=#form><button type="button"
                                class="btn btn-primary mr-3">Galeria Propiedad</button></a>
                    </li>

                    <li>
                        <a class=nav-item nav-link data-toggle=tab href=#planes><button type="button"
                                class="btn btn-primary mr-3">Planos</button></a>
                    </li>

                    {{-- <li>
                        <a class=nav-item nav-link data-toggle=tab href=#video><button type="button" class="btn btn-primary mr-3">Videos</button></a>
                    </li> --}}

                </ul>
            </div>

            <div class=tab-content>
                <div class=tab-pane active id=start>
                    <form class="row g-3" method="POST" action="{{ route('propiedades.update', $propiedades->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" value="{{ $propiedades->nombre }}" class="form-control"
                                    id="nombre" placeholder="Introduzca Nombre">
                                @error('nombre')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input type="number" name="precio" value="{{ $propiedades->precio }}" class="form-control"
                                    id="precio" placeholder="Introduzca Precio">
                                @error('precio')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tamano_propiedad">Tamaño de la propiedad</label>
                                <input type="text" name="tamano_propiedad" value="{{ $propiedades->tamano_propiedad }}"
                                    class="form-control" id="tamano_propiedad" placeholder="Tamaño de la propiedad">
                                @error('tamano_propiedad')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tamano_propiedad_construido">Tamaño de la propiedad construida</label>
                                <input type="text" name="tamano_propiedad_construido"
                                    value="{{ $propiedades->tamano_propiedad_construido }}" class="form-control"
                                    id="tamano_propiedad_construido" placeholder="Tamaño de la propiedad construida">
                                @error('tamano_propiedad_construido')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bano">Baño</label>
                                <input type="number" name="bano" value="{{ $propiedades->bano }}" class="form-control"
                                    id="bano" placeholder="Cantidad de baños">
                                @error('bano')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="recamaras">Recamaras</label>
                                <input type="number" name="recamaras" value="{{ $propiedades->recamaras }}"
                                    class="form-control" id="recamaras" placeholder="Cantidad de recamaras">
                                @error('recamaras')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fecha_construccion">Fecha de construccion</label>
                                <input type="date" name="fecha_construccion"
                                    value="{{ $propiedades->fecha_construccion }}" class="form-control"
                                    id="fecha_construccion" placeholder="Introduzca fecha de construccion">
                                @error('fecha_construccion')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="aire_condicionado">Aire acondicionado</label>
                                <input type="checkbox" value="1" name="aire_condicionado"
                                    value="{{ $propiedades->aire_condicionado }}" class="form-control"
                                    id="aire_condicionado" placeholder="">
                                @error('aire_condicionado')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="balcon">Balcon</label>
                                <input type="checkbox" value="2" name="balcon" value="{{ $propiedades->balcon }}"
                                    class="form-control" id="balcon" placeholder="Enter name">
                                @error('balcon')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="internet">Internet</label>
                                <input type="checkbox" value="3" name="internet"
                                    value="{{ $propiedades->internet }}" class="form-control" id="internet"
                                    placeholder="Enter name">
                                @error('internet')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Cable">Cable</label>
                                <input type="checkbox" value="4" name="cable" value="{{ $propiedades->cable }}"
                                    class="form-control" id="cable" placeholder="Enter name">
                                @error('cable')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="alberca">Alberca</label>
                                <input type="checkbox" value="5" name="alberca"
                                    value="{{ $propiedades->alberca }}" class="form-control" id="alberca"
                                    placeholder="Enter name">
                                @error('alberca')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lavaplatos">Lavaplatos</label>
                                <input type="checkbox" value="6" name="lavaplatos"
                                    value="{{ $propiedades->lavaplatos }}" class="form-control" id="lavaplatos"
                                    placeholder="Enter name">
                                @error('lavaplatos')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estacionamiento">Estacionamiento</label>
                                <input type="checkbox" value="7" name="estacionamiento"
                                    value="{{ $propiedades->estacionamiento }}" class="form-control"
                                    id="estacionamiento" placeholder="Enter name">
                                @error('estacionamiento')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="refrigerador">Refrigerador</label>
                                <input type="checkbox" value="8" name="refrigerador"
                                    value="{{ $propiedades->refrigerador }}" class="form-control" id="refrigerador"
                                    placeholder="Enter name">
                                @error('refrigerador')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-floathing">
                                <label for="nearbys">Especifica si hay lugares de interés cerca</label>
                                <textarea name="nearbys" id="nearbys" value="{{ $propiedades->nearbys }}" placeholder="Escribe lugares cercanos" class="form-control" cols="10"
                                    rows="2"></textarea>
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
                                <select class="form-control select2" name="tipo_propiedad_id"
                                    style="width: 100%;height: 100%;">
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
                                <select class="form-control select2" name="locacion_id"
                                    style="width: 100%;height: 100%;">
                                    <option selected="selected">Seleccionar</option>
                                    @foreach ($locacion as $locacion)
                                        <option value={{ $locacion->id }}>{{ $locacion->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Seleccionar Seller</label>
                                <select class="form-control select2" name="seller_id" style="width: 100%;height: 100%;">
                                    <option selected="selected">Seleccionar</option>
                                    @foreach ($seller as $seller)
                                        <option value={{ $seller->id }}>{{ $seller->name }}</option>
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



                        {{-- <button onclick="showVideo();convertYoutube();">Check</button> --}}

                </div>
                <div class=tab-pane id=form>
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
                <div class=tab-pane id=planes>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="planos">Planos</label>
                            <input type="file" onchange="readBlueprint(this);" name="planos[]" class="form-control"
                                id="planos" placeholder="Cargar plano">
                            @error('planos')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                        <br>
                        <div id="area"></div>
                        <div id="blueprint" class="row"></div>
                        <div class="col-12">
                            <button type="button" onclick="remove_blueprint();clear();"
                                class="btn btn-primary btn-sm">Borrar
                                Fotos</button>
                        </div>
                    </div>


                    <script>
                        function readBlueprint(input) {
                            $("#area").html('Processing...');
                            counter = input.files.length;
                            for (x = 0; x < counter; x++) {
                                if (input.files && input.files[x]) {

                                    var reader = new FileReader();

                                    reader.onload = function(e) {
                                        $("#blueprint").append('<div class="col-md-3 col-sm-3 col-xs-3"><img src="' + e.target.result +
                                            '" class="img-thumbnail" onclick="remove_blueprint()" id="image"></div>');
                                    };

                                    reader.readAsDataURL(input.files[x]);
                                }
                            }
                            if (counter == x) {
                                $("#area").html('');
                            }

                        }

                        function remove_blueprint() {
                            var images = document.getElementsByTagName('image');
                            var l = images.length;
                            for (var i = 0; i < l; i++) {
                                images[0].parentNode.removeChild(images[0]);
                            }
                        }

                        function clear() {
                            var abs = document.getElementById('planos').value;
                            document.getElementById('planos').value = "";
                            $('#planos').val('dsds');
                        }
                    </script>
                </div>

                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                            <a href="{{ route('propiedades.index') }}" class="btn btn-danger">Cancelar</a>
                        </div>
                {{-- <div class=tab-pane id=video>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="788.54" height="443" type="text/html" src="https://www.youtube.com/embed/flYQ7EnEsME?autoplay=0&fs=1&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=http://youtubeembedcode.com"><div><small><a href="https://youtubeembedcode.com/nl/">youtubeembedcode nl</a></small></div><div><small><a href="https://casinoutanspelpaustrustly.se">casinoutanspelpaustrustly.se</a></small></div><div><small><a href="https://youtubeembedcode.com/de/">youtubeembedcode.com/de/</a></small></div><div><small><a href="https://casinoutansvensklicenszimpler.se">https://casinoutansvensklicenszimpler.se</a></small></div><div><small><a href="https://youtubeembedcode.com/de/">youtubeembedcode.com/de/</a></small></div><div><small><a href="https://casinoutanlicenstrustly.nu">casino utan licens trustly</a></small></div></iframe>
                    </div>
                </div> --}}
            </div>
            </form>
        </div>
    </div>
@endsection
