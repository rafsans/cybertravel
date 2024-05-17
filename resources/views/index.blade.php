<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Cybers Travel</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-sm">
        <a href="#" class="navbar-brand"><img src="{{ asset('assets/img/Logo.png') }}" alt="Cybertravel"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Review</a>
                </li>
            </ul>
        </div>
        <div class="button-cust">
            <button>Login</button>
        </div>
    </nav>
    {{-- end navbar --}}

    {{-- banner --}}
    <div class="banner">
        <h3 class="text">ke mana kamu <br>ingin pergi?</h3>
        <img src="{{ asset('assets/banner/banner.jpg') }}" alt="banner">
    </div>
    {{-- endbanner --}}

    {{-- search --}}
    <div class="search">
        <div class="container">
            <ul class="search-nav">
                <li class="search-item">Hotel</li>
                <li class="search-item">Tour</li>
                <li class="search-item">Activity</li>
                <li class="search-item">Restaurant</li>
            </ul>
        </div>
        <div class="card">
            <ul class="name">
                <li>tes</li>
            </ul>
            <ul class="field">
                <input type="text">
            </ul>
        </div>
    </div>
    {{-- end search --}}

    {{-- top destinations --}}
    <div class="top-destinations">
        <div class="col-md-10">
            <div class="wrapper">
                <h2>Top Destinations</h2>
                <button class="btn">See More</button>
            </div>
            <div class="card-wrapper">
                <div class="card active">
                    <h3>Aceh Darussalam</h3>
                    <img src="{{ asset('assets/provinsi/Nanggroe Aceh Darussalam.jpg') }}" alt="Aceh Darussalam">
                </div>
                <div class="card">
                    <img src="{{ asset('assets/provinsi/Sumatera Barat.jpg') }}" alt="Aceh Darussalam">
                </div>
                <div class="card">
                    <img src="{{ asset('assets/provinsi/Sumatera Selatan.jpg') }}" alt="Aceh Darussalam">
                </div>
                <div class="card">
                    <img src="{{ asset('assets/provinsi/Sumatera Utara.jpg') }}" alt="Aceh Darussalam">
                </div>
            </div>
        </div>
    </div>
    {{-- end top destinations --}}

    {{-- recomended for you --}}
    {{-- end recomended for you --}}

</body>

</html>
