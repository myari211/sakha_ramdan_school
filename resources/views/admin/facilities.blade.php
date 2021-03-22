@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/admin/layouts/facilities/upload" enctype="multipart/form-data">
                        @csrf
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="md-form md-outline mb-0">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="ex(Field, AC, Computer Lab, etc.)">
                                            <label for="title">Title Description</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="md-form md-outline mt-3">
                                            <textarea id="form7" class="md-textarea form-control" rows="5" name="description"></textarea>
                                            <label for="form7">Description</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLangHTML" name="image">
                                            <label class="custom-file-label" for="customFileLang">Upload image here</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12 d-flex justify-content-center">
                                        <h5>Upload Image Here...</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-md amber darken-3 text-white">
                                    Upload
                                    <i class="fas fa-upload ml-1"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        @if($facilities_count < 1)
            <div class="col-lg-12 d-flex justify-content-center">
                <h5>Seem's Like nothing at here</h5>
            <div>
        @else
            @foreach($facilities as $data)
                <div class="col-lg-6 mb-2 d-flex align-items-stretch">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <img src="{{ asset('img/facilities/'.$data->image) }}" style="width:100%; height:200px;">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <h4>{{ $data->title }}</h4>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12">
                                    <p class="text-center">{{ $data->description }}</h5>
                                </div>
                            </div>
                            <div class="row d-flex">
                                <div class="col-lg-12 d-flex justify-content-end align-items-end">
                                    <button class="btn btn-md btn-amber darken-2" type="button">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <button type="submit" class="btn btn-danger btn-md" onclick="event.preventDefault(); document.getElementById('deleteFacilities').submit();">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                                <form method="post" action="/admin/layouts/facilities/delete/{{ $data->id }}" id="deleteFacilities">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>   
            @endforeach     
        @endif
    </div>
</div>
@endsection