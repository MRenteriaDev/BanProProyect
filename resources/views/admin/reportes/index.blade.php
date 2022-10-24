@extends('admin.admin_master')
@section('admin')
    @php
        $tipo_propiedades = DB::table('tipo_propiedads')->get();
        $sellers = DB::table('sellers')->get();
    @endphp
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <title>Reportes | BanPro</title>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reportes </h1>
                </div>
            </div>
        </div>
    </section>
    <div class="row col-sm-12">
        <div class="card card-primary col-sm-3">
            <div class="card-header">
                <h3 class="card-title">Reportes por Fecha</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="reportes-form" name="reportesform" method="POST" action="{{ route('reportes.generar') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="fechainicio">Fecha Inicio</label>
                        <input type="date" name="fechainicio" class="form-control" id="fechainicio">
                    </div>
                    <div class="form-group">
                        <label for="fechafinal">Fecha Final</label>
                        <input type="date" name="fechafinal" class="form-control" id="fechafinal">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Generar</button>
                </div>
            </form>
        </div>
        <div class="card card-primary col-sm-3">
            <div class="card-header">
                <h3 class="card-title">Reportes por Tipo</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="reportes-form" method="POST" action="{{ route('reportes.tipe') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="tipo_propiedad_id">Tipo</label>
                        <select class="form-control select2" style="width: 100%;height: 100%;">
                            <option selected="selected">Seleccionar</option>
                            @foreach ($tipo_propiedades as $tipo_propiedad)
                                <option name="tipo_propiedad_id" value={{ $tipo_propiedad->id }}>
                                    {{ $tipo_propiedad->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Generar</button>
                </div>
            </form>
        </div>
        <div class="card card-primary col-sm-3">
            <div class="card-header">
                <h3 class="card-title">Reportes por Vendedor</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="reportes-form" method="POST" action="{{ route('reportes.seller') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="fechainicio">Fecha Inicio</label>
                        <input type="date" name="fechainicio" class="form-control" id="fechainicio">
                    </div>
                    <div class="form-group">
                        <label for="fechafinal">Fecha Final</label>
                        <input type="date" name="fechafinal" class="form-control" id="fechafinal">
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Generar</button>
                </div>
            </form>
        </div>

        <div class="card card-primary col-sm-3">
            <div class="card-header">
                <h3 class="card-title">Reportes por Vendedor y Propiedades</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="reportes-form" method="POST" action="{{ route('reportes.propiedadesSeller') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="seller_id">Vendedor Propiedades </label>
                        <select class="form-control select2" style="width: 100%;height: 100%;">
                            <option selected="selected">Seleccionar</option>
                            @foreach ($sellers as $seller)
                                <option name="seller_id" value={{ $seller->id }}>
                                    {{ $seller->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Generar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
