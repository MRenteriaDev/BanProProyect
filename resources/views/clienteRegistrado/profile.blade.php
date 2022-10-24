@extends('dashboard-cliente')


@section('cliente-registrado-dashboard')
    <div class="widget-boxed-header">
        <h4>Detalles Del Perfil</h4>
    </div>
    <div class="sidebar-widget author-widget2">
        <div class="author-box clearfix">

            <img src="{{ Auth::user()->avatar ?? '[$fd]' }}" alt="author-image" class="author__img">
            <h4 class="author__title">{{ Auth::user()->name }}</h4>
            <p class="author__meta">Usuario</p>
        </div>
        <ul class="author__contact">
            <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a
                    href="#">{{ Auth::user()->email }}</a></li>
        </ul>
        <div class="agent-contact-form-sidebar">
            <h4>Solicita un Cambio</h4>
            <form name="contact_form" method="post" action="functions.php">
                <input type="text" id="fname" name="full_name" placeholder="Nombre Completo" required />
                <input type="number" id="pnumber" name="phone_number" placeholder="Numero de telefono" required />
                <input type="email" id="emailid" name="email_address" placeholder="Email" required />
                <textarea placeholder="Message" name="message" required></textarea>
                <input type="submit" name="sendmessage" class="multiple-send-message" value="Enviar solicitud" />
            </form>
        </div>
    </div>
@endsection
