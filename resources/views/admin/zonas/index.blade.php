@extends('admin.admin_master')


@section('admin')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Todas las Zonas</h3>
        </div>

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
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Browser: activate to sort column ascending">Fecha
                                        creacion</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                        colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                        Acciones
                                    </th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($zonas as $zona)
                                    <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">{{ $zona->nombre }}</td>
                                        <td>{{ $zona->created_at }}</td>
                                        <td>Acciones</td>
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
