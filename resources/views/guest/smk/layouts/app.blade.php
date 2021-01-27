<html>
    <head>
        @include('master.css')
    </head>
    <body>
        <div class="fixed-top">
            <div class="row">
                <div class="col-lg-12 bg-success d-flex justify-content-between align-items-center">
                    <div class="row d-flex align-items-center ml-3">
                        <img src="{{ asset('img/logo.png') }}" class="logo">
                        <h3 class="text-white ml-3 mt-1">
                            <strong>Yayasan Pendidikan Sakha Ramdan Aditya</strong>
                        </h3>
                    </div>
                    <div class="mr-4">
                        <button type="button" class="btn btn-md z-depth-0 p-1">
                            <i class="fab fa-facebook text-white" style="font-size:20px;" onclick="window.open('https://www.facebook.com/1096706560507678/')"></i>
                        </button>
                        <button type="button" class="btn z-depth-0 btn-md p-1" onclick="window.open('https://instagram.com/smk_gemakaryabahana?igshid=1159lsnmwwql4')">
                            <i class="fab fa-instagram text-white" style="font-size:20px;"></i>
                        </button>
                        <button type="button" class="btn z-depth-0 lighten-1 btn-md p-1">
                            <i class="fab fa-twitter text-white" style="font-size:20px;"></i>
                        </button>                    
                    </div>
                </div>
            </div>
            <div class="row warning-color-dark" style="height:7px;"></div>
            <nav class="navbar navbar-expand-lg navbar-dark amber d-flex justify-content-between pt-0 pb-0">
                <div class="row">
                    <ul class="navbar-nav">
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="{{ route('home') }}">
                                <i class="fas fa-home"></i>
                                Beranda
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="{{ route('facilities') }}">
                                <i class="fas fa-school"></i>
                                Facilities
                            </a>
                        </li>
                        <li class="nav-item dropdown mr-3">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-graduation-cap"></i>
                                Profile
                            </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item menu-hover" href="/smp">SMP</a>
                                <a class="dropdown-item menu-hover" href="/smk">SMK Gema Karya Bahana</a>
                                <a class="dropdown-item menu-hover" href="#">Universitas Terbuka</a>
                            </div>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link" href="#">
                                <i class="fas fa-image"></i>
                                Galery
                            </a>
                        </li>
                        <li class="nav-item mr-3">
                            <a class="nav-link">
                                <i class="fas fa-calendar"></i>
                                Event
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="fas fa-building"></i>
                                Yayasan
                            </a>
                        </li>
                    <ul>
                </div>
                <div>
                    <button type="button" class="btn btn-success btn-sm" onclick="location.href='/forms';">Daftar</button>
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#login">Log In</button>
                </div>
            </nav>
        </div>
        @yield('content')            
            <footer class="page-footer font-small amber pt-4 mt-5">
                <div class="container-fluid text-center text-md-left">
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-between align-items-center">
                            <div>
                                <small>Jl. Raya Pekayon 45-43, RT.004/RW.001,
                                    <br />Pekayon Jaya, Kecamatan Bekasi Selatan, 
                                    <br />Kota Bekasi, Jawa Barat 17148
                                    <br />No Telp : 021 - 82760417
                                    <br />Email : smkgemakaryabahana.kotabekasi@gmail.com
                                </small>
                            </div>
                            <div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63455.37127205936!2d106.94792447910156!3d-6.268898500000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698dc89e3b8d71%3A0x221f2d3a28522545!2sYayasan%20Sakha%20Ramdan%20Aditya!5e0!3m2!1sid!2sid!4v1611593878288!5m2!1sid!2sid" width="250" height="100" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background-color:#fafafa;">
                    <div class="modal-body pb-5">
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <h4>Log In</h4>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center mt-4">
                            <div class="col-lg-10">
                                <div class="md-form md-outline">
                                    <input type="text" name="username" class="form-control" id="username">
                                    <label for="username">Username</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10">
                                <div class="md-form md-outline mt-0">
                                    <input type="password" name="password" class="form-control" id="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-10 d-flex justify-content-between">
                                <button type="submit" class="btn btn-amber btn-md btn-block">Log In</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>