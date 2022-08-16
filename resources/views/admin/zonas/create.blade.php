@extends('admin.admin_master')

@section('admin')
    <section class="content-header" style="margin-top: 10px">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Zonas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                        <a class="btn btn-success btn-md" href="{{ route('zonas.index') }}"><i class="fas fa-arrow-left"></i>
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
                <h3 class="card-title">Creación de Zona</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('zonas.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Enter name">
                        @error('nombre')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <a href="{{ route('zonas.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
