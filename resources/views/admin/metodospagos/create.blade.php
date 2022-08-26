@extends('admin.admin_master')

@section('admin')
    <section class="content-header" style="margin-top: 10px">
        <title>Pagos | BanPro</title>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Metodos de Pago</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                        <a class="btn btn-success btn-md" href="{{ route('metodospagos.index') }}"><i class="fas fa-arrow-left"></i>
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
                <h3 class="card-title">Creación de Metodo de Pago</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('metodospagos.store') }}">
                @csrf
                <div class="card-body col-md-12">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="nombre"
                                placeholder="Enter nombre">
                            @error('nombre')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="numero_tarjeta">Numero De Tarjeta</label>
                            <input type="number" name="numero_tarjeta" class="form-control" id="numero_tarjeta"
                                placeholder="Enter numero de tarjeta">
                            @error('numero_tarjeta')
                                <span class="number-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ml-4">
                    <div class="form-group">
                        <label for="fecha_vencimiento">Fecha de vencimiento</label>
                        <input type="date" name="fecha_vencimiento" class="form-control" id="fecha_vencimiento"
                            placeholder="Enter fecha de vencimiento">
                        @error('fecha_vencimiento')
                            <span class="date-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 ml-4">
                    <div class="form-group">
                        <label for="nip">Nip</label>
                        <input type="number" name="nip" class="form-control" id="nip"
                            placeholder="Enter nip">
                        @error('nip')
                            <span class="number-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                    <div class="col-md-6 ml-4">
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
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <a href="{{ route('metodospagos.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection

