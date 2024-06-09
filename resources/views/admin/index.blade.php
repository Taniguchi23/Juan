@extends('layouts.app-admin')
@section('content')
    <div class="page-title-box">
        <h4 class="page-title">Dashboard</h4>
    </div>
    <div class="row">
        <div class="col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class=" d-flex justify-content-between">
                        <div class="align-self-center mx-auto">
                            <img src="/assets/images/logo.jpg" alt="" class="thumb-md mr-2">
                        </div>
                    </div>
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!-- end col-->
        <div class="col-xl-9">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <img src="/assets/images/saludo.png" alt="" class="thumb-md rounded-circle mr-2">
                        <div class="media-body align-self-center">
                            <h4 class="mt-0 mb-1">Bienvenido de nuevo, {{ Auth::user()->nombres }}</h4>
                        </div><!--end media-body-->
                    </div><!--end media-->
                </div><!--end card-body-->
            </div><!--end card-->
        </div><!-- end col-->
    </div><!--end row-->
@endsection

