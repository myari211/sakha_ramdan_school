@extends('guest.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-long">
        <div class="col-lg-4">
            <img src="{{ asset('img/ut1.jpg') }}" style="width:100%">
        </div>
        <div class="col-lg-4">
            <img src="{{ asset('img/ut2.jpg') }}" style="width:100%">
        </div>
        <div class="col-lg-4">
            <img src="{{ asset('img/ut3.jpg') }}" style="width:100%">
        </div>
    </div>
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-4">
            <button type="button" class="btn btn-amber btn-lg btn-block">Download Formulir Disini</button>
        </div>
    </div>
</div>
@endsection