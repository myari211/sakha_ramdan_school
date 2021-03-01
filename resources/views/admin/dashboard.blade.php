@extends('admin.layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body orange pb-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <span class="font-header text-white">
                                            Pendaftaran
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="font-card text-white">
                                            {{ $pendaftaran_total }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 d-flex justify-content-end">
                                <i class="fas fa-user icon-card"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection