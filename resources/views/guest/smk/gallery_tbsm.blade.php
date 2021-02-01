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
                            <h5 class="text-center text-success">Gambar <br>Teknik Otomotif</h5>
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
                            <h5 class="text-center text-success">Teknologi <br>Dasar Otomotif</h5>
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
                            <h5 class="text-center text-success">Pekerjaan Dasar <br>Teknik Otomotif</h5>
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
                            <h5 class="text-center text-success">Pemeliharaan Mesin <br>Sepeda Motor</h5>
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
                            <h5 class="text-center text-success">Pemeliharaan Sasis <br>Sepeda Motor</h5>
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
                            <h5 class="text-center text-success">Pemeliharaan Listrik <br>Sepeda Motor</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection
@section('responsive')
<div class="container">
    <div class="row mt-long">
        <div class="col-sm-12">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="row d-flex justify-content-center">
                                    <img src="{{ asset('img/vector.jpg') }}" style="width:250px; height:150px;">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <h5 class="text-center text-success">Gambar <br>Teknik Otomotif</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="row d-flex justify-content-center">
                                    <img src="{{ asset('img/network.jpg') }}" style="width:250px; height:150px;">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <h5 class="text-center text-success">Teknologi <br>Dasar Otomotif</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="row d-flex justify-content-center">
                                    <img src="{{ asset('img/code.png') }}" style="width:220px; height:150px;">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <h5 class="text-center text-success">Pekerjaan Dasar <br>Teknik Otomotif</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <div class="row mt-2">
        <div class="col-sm-12">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="row d-flex justify-content-center">
                                    <img src="{{ asset('img/vector.jpg') }}" style="width:250px; height:150px;">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <h5 class="text-center text-success">Pemeliharaan Mesin <br>Sepeda Motor</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="row d-flex justify-content-center">
                                    <img src="{{ asset('img/network.jpg') }}" style="width:250px; height:150px;">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <h5 class="text-center text-success">Pemeliharaan Sasis <br>Sepeda Motor</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-sm-12">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="row d-flex justify-content-center">
                                    <img src="{{ asset('img/code.png') }}" style="width:220px; height:150px;">
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <h5 class="text-center text-success">Pemeliharaan Listrik <br>Sepeda Motor</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection
