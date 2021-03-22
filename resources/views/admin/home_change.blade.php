@extends('admin.layouts.app')
@section('content')
<div class="container">
    <form method="post" action="/admin/layouts/home/upload" enctype="multipart/form-data">
        @csrf
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFileLangHTML" name="image">
                    <label class="custom-file-label" for="customFileLangHTML" data-browse="Browse">Upload Image Here...</label>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-amber lighten-3 btn-md text-white d-flex align-items-center">
                    Upload
                    <i class="fas fa-upload ml-2"></i>
                </button>
            </div>
        </div>
    </form>
    <div class="row mt-5">
        <div class="col-lg-12 d-flex justify-content-center">
            <h3>List Carousell</h3>
        </div>
    </div>
    <div class="row mt-2">
        @if($home_count < 1)
            <div class="col-lg-12 d-flex justify-content-center">
                <h5>No Image hasn't posted</h5>
            </div>
        @else
            @foreach($home as $data)
                    <div class="col-lg-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <img src="{{ asset('img/slider/'. $data->name_of_image ) }}" style="width:100%; height:150px;">
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-lg-12">
                                        <button type="button" class="btn btn-md btn-danger btn-block" onclick="event.preventDefault(); document.getElementById('delete-image').submit();">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </div>
                                <form method="post" action="/admin/layouts/home/delete/{{ $data->id }}" id="delete-image">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
            @endforeach
        @endif
    </div>
</div>
@endsection