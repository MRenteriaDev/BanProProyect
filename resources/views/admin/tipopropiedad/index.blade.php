@extends('admin.admin_master')
@section('admin')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tipo propiedad </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                        <button class="btn btn-primary">Crear
                        </button>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                        aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">Nombre
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Fecha creacion</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">
                                    Acciones
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($tipo_propiedades as $tipo_propiedad)
                                <tr class="odd">
                                    <td class="dtr-control sorting_1" tabindex="0">{{ $tipo_propiedad->nombre }}</td>
                                    <td>{{ $tipo_propiedad->created_at }}</td>
                                    <th class="row">
                                        <div class="btn-group" role="group" aria-label="Basic example">

                                            <a class="btn btn-md btn-success" href=""><i class="fa fa-pencil"
                                                    aria-hidden="true"></i>
                                            </a>

                                            <a class="btn btn-md btn-danger" id="delete" href=""><i
                                                    class="fa fa-trash" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                    </th>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
