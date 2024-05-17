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
    <nav class="navbar navbar-expand-lg">
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
            <div class="button-cust">
                <button>Login</button>
            </div>
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
    <div class="search-container">
        <div class="search-box">
            <div class="search-tabs">
                <span class="search-tab p-5 active">Hotel</span>
                <span class="search-tab p-5 ">Tour</span>
                <span class="search-tab p-5 ">Activity</span>
                <span class="search-tab p-5">Restaurant</span>
            </div>
            <div class="search-menu">

            </div>
        </div>
    </div>
    {{-- end search --}}

    {{-- top destinations --}}
    <div class="top-destinations">
        <div class="col-lg-10 col-6">
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
    <div class="recomended">
        <div class="container d-flex flex-column">
            <div class="text">
                <h1>Recomended For You</h1>
            </div>
            <div class="wrapper">
                <div class="d-flex justify-content-center align-content-center">
                    <ul class="d-flex justify-content-center">
                        <li class="list-item item-active">
                            <a href="">Hotel</a>
                        </li>
                        <li class="list-item">
                            <a href="">Tour</a>
                        </li>
                        <li class="list-item">
                            <a href="">Activity</a>
                        </li>
                        <li class="list-item">
                            <a href="">Restaurant</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wrapper-card">
                <div class="row d-flex justify-content-center">
                    <div class="card col-md-4 m-2" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-md-4 m-2" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-md-4 m-2" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-md-4 m-2" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-md-4 m-2" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-md-4 m-2" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-md-4 m-2" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                    <div class="card col-md-4 m-2" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end recomended for you --}}

    {{-- footer --}}
    <div class="footer d-flex justify-content-center ">
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
            <p>Cybers Travel adalah platform pemesanan dan pencarian tempat liburan anda dengan banyak fasilitas pilihan wisata yang menarik dari seluruh penjuru Indonesia.</p>
        </div>
    </div>
    {{-- end footer --}}
</body>

</html>
