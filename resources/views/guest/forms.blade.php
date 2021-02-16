@extends('guest.layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-long d-flex justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Data Siswa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Data Ayah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Data Ibu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-step-tab" data-toggle="pill" href="#pills-step" role="tab"
                                        aria-controls="pills-step" aria-selected="false">Data Wali</a>
                                    </li>
                                </ul>
                            </div>
                        </div>    
                        <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                @include('guest.general')
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                @include('guest.father')
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                @include('guest.mother')
                            </div>
                            <div class="tab-pane fade" id="pills-step" role="tabpanel" aria-labelledby="pills-step-tab">
                                @include('guest.step')
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10 d-flex justify-content-end">
                                <button type="button" class="btn btn-amber btn-md">
                                    Download Formulir
                                </button>
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
<div class="row">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                                        aria-controls="pills-home" aria-selected="true">Data Siswa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">Data Ayah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                                        aria-controls="pills-contact" aria-selected="false">Data Ibu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-step-tab" data-toggle="pill" href="#pills-step" role="tab"
                                        aria-controls="pills-step" aria-selected="false">Data Wali</a>
                                    </li>
                                </ul>
                            </div>
                        </div>    
                        <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                @include('guest.general-responsive')
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                @include('guest.father')
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                @include('guest.mother')
                            </div>
                            <div class="tab-pane fade" id="pills-step" role="tabpanel" aria-labelledby="pills-step-tab">
                                @include('guest.step')
                            </div>
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10 d-flex justify-content-end">
                                <button type="button" class="btn btn-amber btn-md">
                                    Download Formulir
                                </button>
                            </div>
                        </div>
                    </div>
@endsection