<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}- Cybers Travel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('build/assets/app-D-6KuuWz.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css']) --}}
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a href="#" class="navbar-brand"><img src="{{ asset('assets/img/Logo.png') }}" alt="Cybertravel"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wilayah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Review</a>
                </li>
            </ul>
            <div class="button-cust">
                <button>Login</button>
            </div>
        </div>
    </nav>

   @yield('content')


  <div class="footer col-md-12 d-flex justify-content-center ">
    <div class="logo col-md-3">
        <a href="#"><img src="{{ asset('assets/img/Logo.png') }}" alt="Cybertravel"></a>
    </div>
    <div class="office col-md-3">
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
<script src="{{ asset('build/assets/app-CI1Bgkaz.js') }}"></script>
</html>
