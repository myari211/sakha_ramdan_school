@extends('guest.layouts.app')
@section('content')
    <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    <div class="carousel-caption">
        <h3 class="h3-responsive">Selamat Datang</h3>
        <p>Yayasan Pendidikan Sakha Ramdan Aditya</p>
    </div>  
    <div class="view">
        <img class="d-block w-100 h-100" src="{{ asset('img/slider.jpg') }}" 
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 h-100" src="{{ asset('img/slide1.jpg') }}"
          alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">SMK Gema Karya Bahana</h3>
        <p>Teknik Komputer dan Jaringan</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 h-100" src="{{ asset('img/slide3.jpg') }}"
          alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
    <!-- <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-center">
                <h2 class="oswald">Yayasan Pendidikan Sakha Ramdan Aditya</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('img/slider.JPG') }}" style="width:300px; height:150px;">
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <h5 class="text-center">Sekolah Menengah Pertama</h5>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10 d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-amber btn-block" data-toggle="modal" data-target="#smp">Daftar Disini</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('img/slider.JPG') }}" style="width:300px; height:150px;">
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <h5 class="text-center">SMK Gema Karya Bahana</h5>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <button type="button" class="btn btn-sm btn-amber m-0 btn-block">Daftar Disini</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('img/slider.jpg') }}" style="width:300px; height:150px;">
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <h5 class="text-center">Universitas <br>Terbuka</h5>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <button type="button" class="btn btn-sm btn-amber btn-block m-0" onclick="window.open('https://sia.ut.ac.id');">Daftar Disini</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
        <div class="modal fade" id="advertisment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ini Iklan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                </div>
            </div>
        </div>
@include('master.js')
@endsection

@section('responsive')
<div class="row" style="margin-top:110px;"></div>
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" style="height:40%;">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    <div class="carousel-caption">
        <h3 class="h3-responsive">Selamat Datang</h3>
        <p>Yayasan Pendidikan Sakha Ramdan Aditya</p>
    </div>  
    <div class="view">
        <img class="d-block w-100 h-100" src="{{ asset('img/slider.jpg') }}" 
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 h-100" src="{{ asset('img/slide1.jpg') }}"
          alt="Second slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">SMK Gema Karya Bahana</h3>
        <p>Teknik Komputer dan Jaringan</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 h-100" src="{{ asset('img/slide3.jpg') }}"
          alt="Third slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-12 d-flex justify-content-center">
                <h2 class="oswald text-center">Yayasan Pendidikan Sakha Ramdan Aditya</h2>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-12">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('img/slider.JPG') }}" style="width:300px; height:150px;">
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <h5 class="text-center">Sekolah Menengah Pertama</h5>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10 d-flex justify-content-end">
                                <button type="button" class="btn btn-sm btn-amber btn-block" data-toggle="modal" data-target="#smp">Daftar Disini</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('img/slider.JPG') }}" style="width:300px; height:150px;">
                        </div>
                        <div class="row mt-4 d-flex justify-content-center">
                            <div class="col-lg-10">
                                <h5 class="text-center">SMK Gema Karya Bahana</h5>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <button type="button" class="btn btn-sm btn-amber m-0 btn-block">Daftar Disini</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-lg-4">
                <div class="card rounded-0">
                    <div class="card-body">
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('img/slider.jpg') }}" style="width:300px; height:150px;">
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <h5 class="text-center">Universitas <br>Terbuka</h5>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <button type="button" class="btn btn-sm btn-amber btn-block m-0" onclick="window.open('https://sia.ut.ac.id');">Daftar Disini</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="smp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header success-color-dark">
                        <h5 class="modal-title text-white" id="exampleModalLabel">SMP</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="{{ asset('img/slider.jpg') }}" style="width:380px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>Sekolah Menengah Pertama</h4>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus cursus lectus, eget porttitor odio placerat a. Ut varius aliquam maximus. Nulla metus turpis, lobortis nec enim ut, auctor auctor velit. Quisque imperdiet, neque dignissim aliquet dapibus, dui purus mollis sapien, in finibus ex velit eget lectus. Duis ac massa viverra, sodales ligula id, finibus ante. Nullam faucibus fermentum elit, et interdum mi fringilla eleifend</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="smk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header success-color-dark">
                        <h5 class="modal-title text-white" id="exampleModalLabel">SMK</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="{{ asset('img/slider.jpg') }}" style="width:380px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>SMP BlaBlaBla</h4>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus cursus lectus, eget porttitor odio placerat a. Ut varius aliquam maximus. Nulla metus turpis, lobortis nec enim ut, auctor auctor velit. Quisque imperdiet, neque dignissim aliquet dapibus, dui purus mollis sapien, in finibus ex velit eget lectus. Duis ac massa viverra, sodales ligula id, finibus ante. Nullam faucibus fermentum elit, et interdum mi fringilla eleifend</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ut" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header success-color-dark">
                        <h5 class="modal-title text-white" id="exampleModalLabel">UT</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 d-flex align-items-center">
                                <img src="{{ asset('img/slider.jpg') }}" style="width:380px;">
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4>SMP BlaBlaBla</h4>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec faucibus cursus lectus, eget porttitor odio placerat a. Ut varius aliquam maximus. Nulla metus turpis, lobortis nec enim ut, auctor auctor velit. Quisque imperdiet, neque dignissim aliquet dapibus, dui purus mollis sapien, in finibus ex velit eget lectus. Duis ac massa viverra, sodales ligula id, finibus ante. Nullam faucibus fermentum elit, et interdum mi fringilla eleifend</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="advertising" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@include('master.js')
@endsection