@extends('admin.admin_master')

@section('admin')
    <section class="content-header" style="margin-top: 10px">
        <title>Nearbys | BanPro</title>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Nearbys</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                        <a class="btn btn-success btn-md" href="{{ route('nearby.index') }}"><i class="fas fa-arrow-left"></i>
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
                <h3 class="card-title">Actualización de Nearby</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('nearby.update', $nearby->id) }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" value="{{ $nearby->nombre }}" class="form-control"
                            id="nombre" placeholder="Enter nombre">
                    </div>
                    <div class="form-group">
                        <label for="nombre">Distancia</label>
                        <input type="text" name="distancia_km" value="{{ $nearby->distancia_km }}" class="form-control"
                            id="distancia_km" placeholder="Enter distance">
                        @error('distancia_km')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Crear</button>
                        <a href="{{ route('nearby.index') }}" class="btn btn-danger">Cancelar</a>
                    </div>
            </form>
        </div>
    </div>
@endsection
