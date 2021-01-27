@extends('guest.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-long">
        <div class="col-lg-12">
            <!-- TBSM -->
            <div class="card bg-success animated slideInLeft">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <h3 class="text-success text-center">TBSM</h3>
                                </div>  
                            </div>
                        </div>
                        <div class="col-lg-10 d-flex align-items-center justify-content-between">
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-between">
                                    <h2 class="text-white">Teknik dan Bisnis Sepeda Motor</h2>
                                </div>
                            </div>
                            <button type="button" class="btn btn-amber btn-md" onclick="location.href='/gallery/tbsm';">Click Disini</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-12">
            <!-- TKJ -->
            <div class="card bg-primary animated slideInRight">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <h3 class="text-primary text-center">TKJ</h3>
                                </div>  
                            </div>
                        </div>
                        <div class="col-lg-10 d-flex align-items-center justify-content-between">
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-between">
                                    <h2 class="text-white">Teknik Komputer dan Jaringan</h2>
                                </div>
                            </div>
                            <button type="button" class="btn btn-amber btn-md" onclick="location.href='/gallery/tkj';">Click Disini</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-12">
            <!-- AKL -->
            <div class="card bg-danger animated slideInLeft">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-center">
                                    <h3 class="text-danger text-center">AKL</h3>
                                </div>  
                            </div>
                        </div>
                        <div class="col-lg-10 d-flex align-items-center justify-content-between">
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-between">
                                    <h2 class="text-white">Akuntansi dan Keuangan Lembaga</h2>
                                </div>
                            </div>
                            <button type="button" class="btn btn-amber btn-md" onclick="location.href='/gallery/akl';">Click Disini</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection