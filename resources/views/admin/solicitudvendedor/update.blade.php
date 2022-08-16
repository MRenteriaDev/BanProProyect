@extends('admin.admin_master')

@section('admin')
    <section class="content-header" style="margin-top: 10px">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Solicitud Vendedor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-md-right">
                        <a class="btn btn-success btn-md" href="{{ route('solicitudvendedor.index') }}"><i
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
                <h3 class="card-title">Edición de Solicitud Vendedor</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{ route('solicitudvendedor.update',$solicitud_vendedor->id) }}">
                @csrf
                <div class="card-body col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" value="{{$solicitud_vendedor->nombre}}" class="form-control" id="nombre"
                                    placeholder="Enter name">
                                @error('nombre')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ingresar Telefóno</label>
                                <input type="text" name="telefono" value="{{$solicitud_vendedor->telefono}}" class="form-control" id="nombre"
                                    placeholder="telefono">
                                @error('telefono')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Correo</label>
                                <input type="email" name="correo" value="{{$solicitud_vendedor->correo}}" class="form-control" id="nombre"
                                    placeholder="Enter Correo">
                                @error('correo')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mensaje</label>
                                <input type="text" name="mensaje" value="{{$solicitud_vendedor->mensaje}}" class="form-control" id="nombre"
                                    placeholder="mensaje">
                                @error('telefono')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Vendedor</label>
                                <select class="form-control select2" name="seller_id" style="width: 100%;height: 100%;">
                                    <option selected="selected">{{$solicitud_vendedor->seller_id}}</option>
                                    @foreach ($sellers as $seller)
                                        <option value={{ $seller->id }}>{{ $seller->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                    <a href="{{ route('solicitudvendedor.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
