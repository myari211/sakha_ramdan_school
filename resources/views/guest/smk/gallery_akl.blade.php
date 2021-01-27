@extends('guest.smk.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-long">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ asset('img/vector.jpg') }}" style="width:250px; height:150px;">
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <h5 class="text-center text-danger">Akuntansi Dasar</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ asset('img/network.jpg') }}" style="width:250px; height:150px;">
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <h5 class="text-center text-danger">Perbankan Dasar</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ asset('img/code.png') }}" style="width:220px; height:150px;">
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <h5 class="text-center text-danger">Akuntansi Keuangan</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="row mt-2">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ asset('img/vector.jpg') }}" style="width:250px; height:150px;">
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <h5 class="text-center text-danger">Komputer Akuntansi</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ asset('img/network.jpg') }}" style="width:250px; height:150px;">
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <h5 class="text-center text-danger">Administrasi Pajak</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ asset('img/code.png') }}" style="width:220px; height:150px;">
                    </div>
                    <div class="row mt-2 mb-2">
                        <div class="col-lg-12">
                            <h3 class="text-center text-danger" style="font-size:14px;">Akuntansi Jasa, Dagang, dan Manufaktur</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="row mt-2 d-flex justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <img src="{{ asset('img/vector.jpg') }}" style="width:250px; height:150px;">
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-12">
                            <h5 class="text-center text-danger">Akuntansi Lembaga/Instansi Pemerintah</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection