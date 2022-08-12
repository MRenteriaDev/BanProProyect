@extends('admin.admin_master')
@section('admin')


<div class="card">
    <div class="card-body">
        <div class="col-sm-6">
            <h3>Actualizar tipo de propiedad <span class="text-danger">{{ $tipo_propiedad->nombre}}</span></h3> 
        {{-- action="{{ route('tipopropiedad.update', $tipo_propiedad->id) }}" --}}
        <form class="row g-3" method="POST" >
            @csrf
            <div class="col-md-12">
                <div class="form-floating">
                    <label for="nombre">Nombre</label>
                    <input type="text" value="{{$tipo_propiedad->nombre}}"name="nombre" class="form-control" id="floatingName"
                        placeholder="Ingresar nombre">
                    @error('nombre')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
            </div>

            <div class="text-center my-2 mx-2">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('tipopropiedad.index') }}" type="reset" class="btn btn-secondary">Regresar</a>
            </div>
        </form>
    </div>
</div>
@endsection
