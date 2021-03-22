@extends('admin.layouts.app')
@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/admin/layouts/extraculiculer/upload" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="md-form md-outline">
                                    <input type="text" name="title" class="form-control" id="title">
                                    <label for="title">Title</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="image">
                                    <label class="custom-file-label" for="customFileLang">Upload Here</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <button type="submit" class="btn btn-md amber darken-1 text-white">
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
    <div class="row mt-4">
        @if($extraculiculer_count < 1)
            <div class="col-lg-12 d-flex justify-content-center">
                <h5>Seem's like Your hasn't post anything</h5>
            </div>
        @else
            @foreach($extraculiculer as $data)
                <div class="col-lg-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <img src="{{ asset('img/extraculiculer/'.$data->image) }}" style="width:100%; height:150px;">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <h5>{{ $data->title }}</h5>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <button type="button" class="btn btn-amber darken-1 btn-md">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <button type="submit" class="btn btn-danger btn-md">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
@endsection