@extends('dashboard-cliente')


@section('cliente-registrado-dashboard')
    @php
        if(Auth::user()->seller_active == 1){
            $estado_membresia = "Pagado";
        }
        elseif(Auth::user()->seller_active == 0){
            $estado_membresia = "Pago pendiente, realiza el pago de la membresia para acceder a las funciones de vendedor";
        }


    @endphp
    <div class="widget-boxed-header">
        <h4>Detalles Del Perfil</h4>
    </div>
    <div class="sidebar-widget author-widget2">
        <div class="author-box clearfix">

            <img src="{{ asset('/fotos_documentos/'. Auth::user()->foto)}}">
            <h4 class="author__title">{{ Auth::user()->name }}</h4>
            <p class="author__meta">Usuario</p>
            <p class="author__meta">Estado de membresia: {{$estado_membresia}}</p>
        </div>
        <ul class="author__contact">
            <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a
                    href="#">{{ Auth::user()->email }}</a></li>
        </ul>
        {{-- <div class="agent-contact-form-sidebar">
            <h4>Realizar Cambio </h4>
            <form autocomplete="off" method="POST" action="{{ route('user.update', Auth::user()->id) }}">
                @csrf

                <input type="text" id="name" name="name" placeholder="Nombre" required />
                <input type="email" id="email" name="email" placeholder="Correo" required />
                <input type="text" id="password" name="password" placeholder="Contraseña" required />
                <button type="submit" class="btn btn-primary">Realizar Cambio </button>

            </form>
        </div> --}}
    </div>
@endsection
