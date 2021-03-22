<html>
<head>
    @include('master.css')
</head>
<body>
    @include('sweetalert::alert')
    <div class="sidenav">
        <a href="#" class="d-flex justify-content-center">
            <img src="{{ asset('img/logo.png') }}" style="width:150px;">
        </a>
        <a href="/admin/dashboard" class="mt-5 d-flex justify-content-between align-items-center">
            Dashboard
            <i class="fas fa-chart-pie"></i>
        </a>
        <a href="/admin/pendaftar" class="d-flex justify-content-between">
            Pendaftar
            <i class="fas fa-user"></i>
        </a>
        <a href="/admin/layouts/home" class="d-flex justify-content-between align-items-center">
            Admin Content
            <i class="fas fa-table"></i>
        </a>
        <a href="/admin/layouts/facilites" class="d-flex justify-content-between align-items-center">
            Facilites
            <i class="fas fa-school"></i>
        </a>
        <a href="/admin/layouts/extraculiculer" class="d-flex justify-content-between align-items-center">
            Extraculiculer
            <i class="fas fa-basketball-ball"></i>
        </a>
    </div>
    <div class="main">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success d-flex justify-content-end">
            {{-- <button class="navbar-toggler ml-auto" type="button" data-toggle="dropdown" data-target="#" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name}}
                <span class="navbar-toggler-icon"></span>
            </button> --}}
            {{-- <div class="collapse navbar-collapse" id="basicExampleNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div> --}}
            <button type="button" class="btn btn-md z-depth-0 text-white" data-toggle="modal" data-target="#account" aria-expanded="false">
                {{ Auth::user()->name }}
                <i class="fas fa-chevron-down ml-1"></i>
            </button>
        </nav>
        @yield('content')

        <div class="modal fade right" id="account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-side modal-top-right modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <img src="{{ asset('img/logo.png') }}" style="width:200px;" class="rounded-circle">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <h4>{{ Auth::user()->name }}</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <h6 class="text-muted">{{ Auth::user()->email }}</h4>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-outline-success btn-md btn-block">
                                    Settings
                                    <i class="fas fa-cogs ml-2"></i>
                                </button>
                            </div>
                        </div>
                        <div class="row mt-1">
                            <div class="col-lg-12">
                                <button type="button" class="btn btn-danger btn-md btn-block" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                                    Log Out <i class="fas fa-sign-out-alt ml-2"></i>
                                </button>
                            </div>
                        </div>
                        <form method="post" action="{{ route('logout') }}" id="logout">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('master.js')
</body>
</html>