@extends('admin.admin_master')
@section('admin')
    <title>Dashboard | Admin</title>
    <hr>
    <div class="row">
        <div class="card mx-5" style="width: 18rem;">
            <img src=" {{ asset('admin/img/housespec.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title; text-lg-start; fs-6" style="padding-left: 3rem">Propiedades</h3>
                <hr>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <a href="{{ route('propiedades.index') }}"
                    class="btn btn-success btn-lg">@php
                        use App\Models\Propiedades;
                        $ce = Propiedades::count();
                        echo $ce;
                    @endphp</a>
                </div>
            </div>
        </div>

        <div class="card mx-5" style="width: 18rem;">
            <img src=" {{ asset('admin/img/vendedor.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title; text-lg-start; fs-6" style="padding-left: 3rem">Vendedores</h3>
                <hr>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <a href="{{ route('sellers.index') }}"
                    class="btn btn-success btn-lg">@php
                        use App\Models\Seller;
                        $ce = Seller::count();
                        echo $ce;
                    @endphp</a>
                </div>
            </div>
        </div>

        <div class="card mx-5" style="width: 18rem;">
            <img src=" {{ asset('admin/img/revision.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3 class="card-title; text-lg-start; fs-6" style="padding-left: 3rem">Revisiones</h3>
                <hr>
                <div class="d-grid gap-2 col-3 mx-auto">
                    <a href="{{ route('review.index') }}"
                    class="btn btn-success btn-lg">@php
                        use App\Models\Reviews;
                        $ce = Reviews::count();
                        echo $ce;
                    @endphp</a>
                </div>
            </div>
        </div>

    </div>
@endsection
