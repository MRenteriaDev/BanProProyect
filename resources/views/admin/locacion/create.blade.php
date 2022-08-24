@extends('admin.admin_master')

@section('admin')
    <section class="content-header" style="margin-top: 10px">
        <title>Locacion | BanPro</title>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Locaciones</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                        <a class="btn btn-success btn-md" href="{{ route('locacion.index') }}"><i class="fas fa-arrow-left"></i>
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
                <h3 class="card-title">Creación de Locacion</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('locacion.store') }}">
                @csrf
                <div class="card-body col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre"
                                placeholder="Enter name">
                            @error('nombre')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Seleccionar Zona</label>
                            <select class="form-control select2" name="zona_id" style="width: 100%;height: 100%;">
                                <option selected="selected">Seleccionar</option>
                                @foreach ($zonas as $zona)
                                    <option value={{ $zona->id }}>{{ $zona->zona_nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <a href="{{ route('locacion.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
