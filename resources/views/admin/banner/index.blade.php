@extends('admin.admin_master')
@section('admin')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <title>Banner | BanPro</title>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><b>Banners</b> </h1>
                </div>
                 <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                         <a class="btn btn-primary btn-md" href="{{ route('banner.create') }}"><i
                                class="fas fa-plus-circle"></i>

                            &nbsp; Agregar banner
                        </a>
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
                                <th class="text-center"  class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">Nombre del archivo
                                </th>
                                <th class="text-center"  class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending"> Imagen</th>
                                <th class="text-center"  class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Fecha creacion</th>
                                <th class="text-center"  class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">
                                    Acciones
                                </th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($imagenes as $img)
                                <tr class="odd">
                                    <td class="dtr-control sorting_1 text-center" tabindex="0">{{ $img->nombre_archivo }}</td>

                                    <td class="text-center" ><img src="{{ asset('cliente/images/banner/thumb/'. "resized-" .$img->nombre_archivo)}}" width="300px" height="100px" ></td>
                                    <td class="text-center" >{{ $img->created_at }}</td>
                                    <th class="text-center">

                                        <div  class="btn-group " role="group" aria-label="Basic example">
                                            <a class="btn btn-md btn-danger"
                                                href="{{ route('banner.destroy', $img->id) }}" id="delete"><i
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
