<html>
    <head>
        @include('master.css')
    </head>
    <body>
    <div class="d-none d-lg-block">
        <div class="fixed-top">
            <div class="row">
                <div class="col-lg-12 teal darken-3 d-flex justify-content-between align-items-center">
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
            <div class="row orange" style="height:7px;"></div>
            <nav class="navbar navbar-expand-lg navbar-dark orange lighten-2 d-flex justify-content-between pt-0 pb-0">
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
                            <div class="dropdown-menu dropdown-primary p-2" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item menu-hover" href="/sd">SD</a>
                                <a class="dropdown-item menu-hover" href="/smp">SMP</a>
                                <a class="dropdown-item menu-hover" href="/smk">SMK Gema Karya Bahana</a>
                                <a class="dropdown-item menu-hover" href="/ut">Universitas Terbuka</a>
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
                    <button type="button" class="btn teal darken-3 btn-sm text-white" data-toggle="modal" data-target="#login">Log In</button>
                    <button type="button" class="btn teal darken-3 btn-sm text-white" onclick="openRegis();" id="regis">Daftar</button>
                </div>
            </nav>
        </div>
            @yield('content')           
        </div>
        <div class="d-block d-md-none">
            <!--Navbar-->
            <div class="fixed-top">
            <div class="row">
                <div class="col-lg-12 teal darken-3 d-flex justify-content-between align-items-center">
                    <div class="row d-flex align-items-center ml-3">
                        <img src="{{ asset('img/logo.png') }}" style="width:70px; height:70px;">
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
            <div class="row orange" style="height:7px;"></div>
            <nav class="navbar navbar-expand-lg navbar-dark orange lighten-2 d-flex justify-content-between pt-0 pb-0">
        

            <!-- Navbar brand -->
            <div class="row d-flex justify-content-between">
            <!-- Collapse button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div type="d-flex justify-content-end">
                    <button type="button" class="btn btn-md teal darken-3 text-white" data-toggle="modal" data-target="#login">Log In</button>
                    <button type="button" class="btn btn-md teal darken-3 text-white" onclick="openRegis();" id="regis">Daftar</button>
                </div>
            </div>
                
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
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
                                <a class="dropdown-item menu-hover" href="/sd">SD</a>
                                <a class="dropdown-item menu-hover" href="/smp">SMP</a>
                                <a class="dropdown-item menu-hover" href="/smk">SMK Gema Karya Bahana</a>
                                <a class="dropdown-item menu-hover" href="/ut">Universitas Terbuka</a>
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
            <!-- Links -->
            </div>
            <!-- Collapsible content -->

            </nav>
        </div>
            <!--/.Navbar-->
            @yield('responsive')
        </div>
        @include('master.js')
        @include('guest.layouts.footer')
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
                            <div class="col-lg-10">
                                <button type="submit" class="btn btn-amber btn-md btn-block">Log In</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>