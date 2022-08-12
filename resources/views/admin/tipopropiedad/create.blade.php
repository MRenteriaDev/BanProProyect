@extends('admin.admin_master')
@section('admin')

<div class="card">
    <div class="card-body">
        <div class="col-sm-6">
            <h3>Crear tipo de propiedad</h3>
        </div>

        <form class="row g-3" method="POST" action="{{ route('tipopropiedad.store') }}">
            @csrf
            <div class="col-md-12">
                <div class="form-floating">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="floatingName"
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