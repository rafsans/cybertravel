@extends('Layouts.home')

@section('content')
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
                    <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Prima House</h5>
                        <p class="card-text">Excellent</p>
                        <div class="card-item">
                            <p class="price">Rp. 500.000/night </p>
                            <a href="#" class="button">View Avaibility</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4 m-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Prima House</h5>
                        <p class="card-text">Excellent</p>
                        <div class="card-item">
                            <p class="price">Rp. 500.000/night </p>
                            <a href="#" class="button">View Avaibility</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4 m-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Prima House</h5>
                        <p class="card-text">Excellent</p>
                        <div class="card-item">
                            <p class="price">Rp. 500.000/night </p>
                            <a href="#" class="button">View Avaibility</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4 m-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Prima House</h5>
                        <p class="card-text">Excellent</p>
                        <div class="card-item">
                            <p class="price">Rp. 5.000.000 /night </p>
                            <a href="#" class="button">View Avaibility</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4 m-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Prima House</h5>
                        <p class="card-text">Excellent</p>
                        <div class="card-item">
                            <p class="price">Rp. 2.500.000 /night </p>
                            <a href="#" class="button">View Avaibility</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4 m-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Prima House</h5>
                        <p class="card-text">Excellent</p>
                        <div class="card-item">
                            <p class="price">Rp. 500.000/night </p>
                            <a href="#" class="button">View Avaibility</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4 m-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Prima House</h5>
                        <p class="card-text">Excellent</p>
                        <div class="card-item">
                            <p class="price">Rp. 500.000/night </p>
                            <a href="#" class="button">View Avaibility</a>
                        </div>
                    </div>
                </div>
                <div class="card col-md-4 m-2" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                    <div class="card-body">
                        <h5 class="card-title">Hotel Prima House</h5>
                        <p class="card-text">Excellent</p>
                        <div class="card-item">
                            <p class="price">Rp. 500.000/night </p>
                            <a href="#" class="button">View Avaibility</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end recomended for you --}}
@endsection

