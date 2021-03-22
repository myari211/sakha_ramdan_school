@extends('guest.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-long">
        <div class="col-lg-12 d-flex justify-content-center">
            <h4>Facilities</h4>
        </div>
    </div>
    <div class="row mt-4">
        @foreach($facilities as $data)
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <h5>{{ $data->title }}</h5>  
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <p>
                                {{ $data->description }}
                            </p>
                        </div>
                        <div class="col-lg-5 d-flex justify-content-center">
                            <img src="{{ asset('img/facilities/'.$data->image ) }}" style="width:200px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row mt-5 d-flex justify-content-center">
        <h4>Extraculiculer</h4>
    </div>
    <div class="row mt-4">
        @foreach($extraculiculer as $data)
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body pb-2">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('img/extraculiculer/'.$data->image) }}" style="width:100%; height:200px;">
                        </div>
                        <div class="row mt-2 d-flex justify-content-center">
                            <h5>
                                <strong>{{ $data->title }}</strong>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection