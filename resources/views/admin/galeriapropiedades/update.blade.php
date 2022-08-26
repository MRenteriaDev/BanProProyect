@extends('admin.admin_master')

@section('admin')
    <section class="content-header" style="margin-top: 10px">
        <title>Galerias Propiedades | BanPro</title>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Galeria propiedades</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                        <a class="btn btn-success btn-md" href="{{ route('galeriapropiedad.index') }}"><i class="fas fa-arrow-left"></i>
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
                <h3 class="card-title">Creación de Galeria propiedades</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('galeriapropiedad.update', $galeriapropiedades->id) }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre_archivo">Nombre del archivo</label>
                            <input type="text" value={{$galeriapropiedades->nombre_archivo}} name="nombre_archivo" class="form-control" id="nombre_archivo"
                                placeholder="Enter name">
                            @error('nombre_archivo')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Seleccionar Propiedad</label>
                            <select class="form-control select2" name="propiedad_id" style="width: 100%;height: 100%;" disabled>
                                <option disabled>Seleccionar</option>
                                @foreach ($propiedades as $propiedad)
                                    <option value={{ $propiedad->id }}>{{ $propiedad->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floathing">
                            <label for="nombre_archivo">Documentación de Propiedades</label>
                            <input type="file" name="nombre_archivo[]" class="form-control" multiple>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <a href="{{ route('galeriapropiedad.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
