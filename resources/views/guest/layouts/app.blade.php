<html>
    <head>
        @include('master.css')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark success-color-dark d-flex justify-content-between">
            <div class="row">
                <p class="mr-2">Tes</p>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link">
                            Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            Facilities
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="modal" data-target="#submenu">
                            Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            tes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">
                            tes
                        </a>
                    </li>
                <ul>
            </div>
            <div>
                <button type="button" class="btn btn-warning btn-md">Daftar</button>
            </div>
        </nav>
        @yield('content')            
            <footer class="page-footer font-small amber pt-4 mt-5">
                <div class="container-fluid text-center text-md-left">
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="text-uppercase">Yayasan Pendidikan Sakha Ramdan Aditya</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <a class="mr-4">SMP</a>
                                    <a class="mr-4">SMK</a>
                                    <a>Universitas Terbuka</a>
                                </div>
                            </div>
                        </div>
                        <hr class="clearfix w-100 d-md-none pb-3">
                        <div class="col-md-3 mb-md-0 mb-3">
                            
                        </div>
                        <div class="col-md-3 mb-md-0 mb-3">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#!" style="font-size:20px;">
                                        <i class="fab fa-facebook"></i>
                                         Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" style="font-size:20px;">
                                        <i class="fab fa-twitter"></i>
                                        Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" style="font-size:20px;">
                                        <i class="fab fa-instagram"></i>
                                        Instagram
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3 success-color-dark">
                    2021 Copyright &copy; Yayasan Pendidikan Sakha Ramdan Aditya    
                </div>
            </footer>
        @include('master.js')

<!-- Modal -->
<div class="modal fade" id="submenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content amber">
      <div class="modal-body">
        <div class="row">
            <div class="col-lg-4">
                <div class="card bg-success animate">
                    <div class="card-body">
                        <div class="row mt-2 d-flex justify-content-center">
                            <i class="fas fa-school font-menu text-white"></i>
                        </div>
                        <div class="row d-flex justify-content-center mt-3">
                            <h6 class="text-white">Sekolah Menengah Pertama</h6>
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
    </div>
  </div>
</div>
        
    </body>
</html>