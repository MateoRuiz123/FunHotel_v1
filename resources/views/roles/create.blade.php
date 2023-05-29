@extends('layouts.app')
@section('content')
<!-- start page title -->
<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">Datos servicios</h6>
        </div>

        <div class="col-md-4">
            <div class="float-end d-none d-md-block">

                @include('servicios.create')
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreate">
                    Registrar <i class="bi bi-plus-circle"></i>
                </button>

            </div>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Botones</h4>



        </div>
    </div>
</div> <!-- end col -->
@endsection