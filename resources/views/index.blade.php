@extends('Layouts.app')
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
                <span class="search-tab p-5 active" id="searchHotel">Hotel</span>
                <span class="search-tab p-5" id="searchTour">Tour</span>
                <span class="search-tab p-5" id="searchRestaurant">Restaurant</span>
            </div>
            <div class="search-menu d-flex align-items-center">
                <div class="form-group">
                    <i class="bi bi-geo-alt-fill"></i>
                    <label class="mb-3" for="">Location</label>
                    <input type="text" class="form-control" placeholder="Location">
                </div>
                <div class="form-group">
                    <i class="bi bi-calendar"></i>
                    <label class="mb-3" for="">Check in</label>
                    <input type="date" class="form-control" placeholder="Add Date">
                </div>
                <div class="form-group">
                    <i class="bi bi-calendar"></i>
                    <label class="mb-3" for="">Check Out</label>
                    <input type="date" class="form-control" placeholder="Add Date">
                </div>
                <div class="form-group">
                    <i class="bi bi-person"></i>
                    <label class="mb-3" for="">Guests</label>
                    <input type="text" class="form-control" placeholder="Guests 0">
                </div>
                <div class="form-group">
                    <button class="btn btn-danger">Search</button>
                </div>
            </div>
        </div>
    </div>
    {{-- end search --}}

    {{-- top destinations --}}
    <div class="top-destinations mt-5 mb-5">
        <div class="col-md-8 col-xl-8">
            <div class="wrapper d-flex justify-content-between">
                <h2>Top Destinations</h2>
                <button class="btn">See More</button>
            </div>
            <div class="card-wrapper d-flex justify-content-between">
                <div class="card active">
                    <img src="{{ asset('assets/provinsi/Nanggroe Aceh Darussalam.jpg') }}" alt="Aceh Darussalam">
                    <h3 class="text-center">Aceh Darussalam</h3>
                    <div class="badge">
                        <span class="badge  text-bg-light">1 Hotel</span>
                        <span class="badge text-bg-light">1 Tour</span>
                    </div>
                    <div class="badge">
                        <span class="badge text-bg-light">1 Restaurant</span>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/provinsi/Sumatera Barat.jpg') }}" alt="Aceh Darussalam">
                    <h3 class="text-center">Sumatera Barat</h3>
                    <div class="badge d-none">
                        <span class="badge  text-bg-light">1 Hotel</span>
                        <span class="badge text-bg-light">1 Tour</span>
                    </div>
                    <div class="badge d-none">
                        <span class="badge text-bg-light">1 Restaurant</span>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/provinsi/Sumatera Selatan.jpg') }}" alt="Aceh Darussalam">
                    <h3 class="text-center">Sumatera Selatan</h3>
                </div>
                <div class="card">
                    <img src="{{ asset('assets/provinsi/Sumatera Utara.jpg') }}" alt="Aceh Darussalam">
                    <h3 class="text-center">Sumatera Utara</h3>
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
                            <span>Hotel</span>
                        </li>
                        <li class="list-item">
                            <span>Tour</span>
                        </li>
                        <li class="list-item">
                            <span>Restaurant</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wrapper-card">
                <div class="row d-flex justify-content-center">
                    <div class="card  m-2">
                        <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Prima House</h5>
                            <p class="card-text">Excellent</p>
                            <div class="card-item-recomend d-flex justify-content-between">
                                <p class="price">Rp. 500.000/night </p>
                                <a href="#" class="button-view mx-1">View Avaibility</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  m-2">
                        <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Prima House</h5>
                            <p class="card-text">Excellent</p>
                            <div class="card-item-recomend d-flex justify-content-between">
                                <p class="price">Rp. 500.000/night </p>
                                <a href="#" class="button-view mx-1">View Avaibility</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  m-2">
                        <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Prima House</h5>
                            <p class="card-text">Excellent</p>
                            <div class="card-item-recomend d-flex justify-content-between">
                                <p class="price">Rp. 500.000/night </p>
                                <a href="#" class="button-view mx-1">View Avaibility</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  m-2">
                        <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Prima House</h5>
                            <p class="card-text">Excellent</p>
                            <div class="card-item-recomend d-flex justify-content-between">
                                <p class="price">Rp. 5.000.000 /night </p>
                                <a href="#" class="button-view mx-1">View Avaibility</a>
                            </div>
                        </div>
                    </div>
                    <div class="card  m-2">
                        <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Prima House</h5>
                            <p class="card-text">Excellent</p>
                            <div class="card-item-recomend d-flex justify-content-between">
                                <p class="price">Rp. 2.500.000 /night </p>
                                <a href="#" class="button-view mx-1">View Avaibility</a>
                            </div>
                        </div>
                    </div>
                    <div class="card m-2">
                        <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Prima House</h5>
                            <p class="card-text">Excellent</p>
                            <div class="card-item-recomend d-flex justify-content-between">
                                <p class="price">Rp. 500.000/night </p>
                                <a href="#" class="button-view mx-1">View Avaibility</a>
                            </div>
                        </div>
                    </div>
                    <div class="card m-2">
                        <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Prima House</h5>
                            <p class="card-text">Excellent</p>
                            <div class="card-item-recomend d-flex justify-content-between">
                                <p class="price">Rp. 500.000/night </p>
                                <a href="#" class="button-view mx-1">View Avaibility</a>
                            </div>
                        </div>
                    </div>
                    <div class="card m-2">
                        <img class="card-img-top" src="{{ asset('assets/hotel/bali.jpeg') }}" alt="bali">
                        <div class="card-body">
                            <h5 class="card-title">Hotel Prima House</h5>
                            <p class="card-text">Excellent</p>
                            <div class="card-item-recomend d-flex justify-content-between">
                                <p class="price">Rp. 500.000/night </p>
                                <a href="#" class="button-view mx-1">View Avaibility</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    {{-- end recomended for you --}}
@endsection
