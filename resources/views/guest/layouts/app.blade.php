<html>
    <head>
        @include('master.css')
    </head>
    <body>
        <div class="fixed-top">
            <div class="row">
                <div class="col-lg-12 bg-success d-inline-flex align-items-center">
                    <img src="{{ asset('img/logo.png') }}" class="logo">
                    <h3 class="text-white ml-3 mt-1">
                        <strong>Yayasan Pendidikan Sakha Ramdan Aditya</strong>
                    </h3>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark amber d-flex justify-content-between pt-0 pb-0">
                <div class="row">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="/">
                                <i class="fas fa-home"></i>
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="/facilities">
                                <i class="fas fa-school"></i>
                                Facilities
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" data-toggle="modal" data-target="#submenu">
                                <i class="fas fa-graduation-cap"></i>
                                Profile
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link">
                                <i class="fas fa-image"></i>
                                Galery
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fas fa-calendar"></i>
                                Event
                            </a>
                        </li>
                    <ul>
                </div>
                <div>
                    <button type="button" class="btn btn-success btn-sm">Daftar</button>
                </div>
            </nav>
        </div>
        @yield('content')            
            <footer class="page-footer font-small amber pt-4 mt-5">
                <div class="container-fluid text-center text-md-left">
                    <div class="row">
                        <div class="col-md-6 mt-md-0 mt-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 ml-4">
                                    <h4>Address</h4>
                                    <p>Jl. Raya Pekayon 45-43, RT.004/RW.001,
                                        <br />Pekayon Jaya, Kec. Bekasi Sel., 
                                        <br />Kota Bks, Jawa Barat 17148
                                    </p>
                                </div>
                            </div>
                        </div>
                        <hr class="clearfix w-100 d-md-none pb-3">
                        <div class="col-md-3 mb-md-0 mb-3">
                            
                        </div>
                        <div class="col-md-3 mb-md-0 mb-3">
                            <div class="row">
                                <h4>Social Media</h4>
                            </div>
                            <div class="row">
                                <button type="button" class="btn btn-primary btn-sm">
                                    <i class="fab fa-facebook" style="font-size:15px;" onclick="window.open('https://www.facebook.com/1096706560507678/')"></i>
                                </button>
                                <button type="button" class="btn pink btn-sm" onclick="window.open('https://instagram.com/smk_gemakaryabahana?igshid=1159lsnmwwql4')">
                                    <i class="fab fa-instagram" style="font-size:15px;"></i>
                                </button>
                                <button type="button" class="btn blue lighten-1 btn-sm">
                                    <i class="fab fa-twitter" style="font-size:15px;"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright text-center py-3 success-color-dark mt-4">
                    2021 Copyright &copy; Yayasan Pendidikan Sakha Ramdan Aditya    
                </div>
            </footer>
        @include('master.js')

<!-- Modal -->
    <div class="modal fade" id="submenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <div class="card bg-success">
                                <div class="card-body">
                                    <div class="row mt-2 d-flex justify-content-center">
                                        <i class="fas fa-building font-menu text-white"></i>
                                    </div>
                                    <div class="row d-flex justify-content-center mt-3">
                                        <h6 class="text-white">Sekolah Menengah Kejuruan</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card bg-success">
                                <div class="card-body">
                                    <div class="row mt-2 d-flex justify-content-center">
                                        <i class="fas fa-university font-menu text-white"></i>
                                    </div>
                                    <div class="row d-flex justify-content-center mt-3">
                                    <h6 class="text-white">Universitas Terbuka</h6>
                                </div>
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