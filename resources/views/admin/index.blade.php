@extends('admin.admin_master')
@section('admin')
<title>Dashboard | Admin</title>
<hr>
<div class="row" style="padding-left: 250px;">

    <div class="col-lg-3 col-6">

    <div class="small-box bg-info">
    <div class="inner">
    <h3>@php
        use App\Models\Propiedades;
        $ca = Propiedades::count();
        echo($ca);
    @endphp</h3>
    <p>Propiedades registradas</p>
    </div>
    <div class="icon">
        <i class="fa-solid fa-building"></i>
    </div>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-success">
    <div class="inner">
    <h3>@php
        use App\Models\Seller;
        $cr = Seller::count();
        echo($cr);
    @endphp</h3>
    <p>Sellers registrados</p>
    </div>
    <div class="icon">
        <i class="fa-solid fa-user-group"></i>
    </div>
    </div>
    </div>

    <div class="col-lg-3 col-6">

    <div class="small-box bg-warning">
    <div class="inner">
    <h3>@php
        use App\Models\Reviews;
        $ce = Reviews::count();
        echo($ce);
    @endphp</h3>
    <p>Reviews registradas</p>
    </div>
    <div class="icon">
    <i class="fa fa-file-text">
    </i>
    </div>
    </div>
    </div>

    </div>
@endsection


