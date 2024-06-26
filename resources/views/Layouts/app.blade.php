<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} - Cybers Travel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('build/assets/app-D-6KuuWz.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js', 'public/css/app.css']) --}}
</head>

<body>
    <nav class="navbar navbar-expand-lg d-flex align-items-sm-center">
        <a href="#" class="navbar-brand m-lg-5">
            <img src="{{ asset('assets/img/Logo.png') }}" class="img-fluid " alt="Cybertravel">
        </a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
            aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-lg-flex justify-content-evenly" id="nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/wisata') }}">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/wilayah') }}">Wilayah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/review') }}">Review</a>
                </li>
            </ul>
            @auth
                <div class="btn-group">
                    <button class="btn btn-info dropdown-toggle" type="button" id="defaultDropdown"
                        data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                        <span class="fw-bold">Selamat datang, {{ Auth::user()->username }}!</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                        <li><a class="dropdown-item" href="{{ url('dashboard') }}">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ url('logout') }}">Logout</a></li>
                    </ul>
                </div>
            @else
                <div class="button-cust">
                    <button>
                        <a href="{{ url('/login') }}">Login</a>
                    </button>
                </div>
            @endauth
        </div>
    </nav>

    @yield('content')


    <div class="footer col-md-12 d-flex justify-content-center">
        <div class="logo col-md-3">
            <a href="#"><img src="{{ asset('assets/img/Logo.png') }}" alt="Cybertravel"></a>
        </div>
        <div class="office d-1 col-md-3">
            <h3>Office</h3>
            <div class="text">
                <p class="col-md-8">Perkantoran Pemda Provinsi Bengkulu.
                    JL. Pembangunan No. 01, Padang Harapan, Kota Bengkulu 38225</p>
            </div>
            <div class="email">
                <p>kontak@cyberstravel.id</p>
            </div>
            <div class="phone-number">
                <p>+62877-5812-3440</p>
            </div>
        </div>

        <div class="company col-md-3">
            <h3>Company Links</h3>
            <ul>
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Wisata</a>
                </li>
                <li>
                    <a href="">Wilayah</a>
                </li>
                <li>
                    <a href="">Tentang Kami</a>
                </li>
                <li>
                    <a href="">Kontak</a>
                </li>
                <li>
                    <a href="">Review</a>
                </li>
            </ul>
        </div>
        <div class="newsletter col-md-3">
            <h3>Newsletter</h3>
            <p>Cybers Travel adalah platform pemesanan dan pencarian tempat liburan anda dengan banyak fasilitas pilihan
                wisata yang menarik dari seluruh penjuru Indonesia.</p>
        </div>
    </div>
</body>
<script src="{{ asset('js/app.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


</html>

<form action="{{ url('/views/login') }}" method="POST">
