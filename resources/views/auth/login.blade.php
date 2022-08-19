@extends('cliente.cliente_master')

@section('cliente')
<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Login</h1>
            <h2><a href="{{url('/')}}">Home </a> &nbsp;/&nbsp; login</h2>
        </div>
    </div>
</section>
<!-- START SECTION LOGIN -->
<div id="login">
    <div class="login">
        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="access_social">
                <a href="#0" class="social_bt facebook">Login with Facebook</a>
                <a href="#0" class="social_bt google">Login with Google</a>
                <a href="#0" class="social_bt linkedin">Login with Linkedin</a>
            </div>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email" value="usuario@gmail.com">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="password">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="fl-wrap filter-tags clearfix add_bottom_30">
                <div class="checkboxes float-left">
                    <div class="filter-tags-wrap">
                        <input id="check-b" type="checkbox" name="check">
                        <label for="check-b">Remember me</label>
                    </div>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <button type="submit" href="#0" class="btn_1 rounded full-width">Login to Find Houses</button>
            <div class="text-center add_top_10">New to Find Houses? <strong><a href="register.html">Sign up!</a></strong></div>
        </form>
    </div>
</div>
<!-- END SECTION LOGIN -->
@include('cliente.body.footer')
@endsection
