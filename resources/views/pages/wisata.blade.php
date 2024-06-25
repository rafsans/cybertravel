@extends('Layouts.app')
@section('content')
    {{-- banner --}}
    <div class="banner">
        <h3 class="text">Cari tempat wisata</h3>
        <img src="{{ asset('assets/banner/banner malioboro.jpg') }}" alt="banner">
    </div>
    {{-- end banner --}}
    <br>
    <br>
    {{-- destinasi wisata --}}
    <div>
        <h3 class="judul">Destinas Wisata</h3>
    </div>
    <br>
    <div>
        <h3 class="isi">Kunjungi berbagai tempat untuk menikmati liburan anda</h3>
    </div>
    <br>
    <div class="container-wisata">
        <div class="wisata card-wrapper">
            <div class="card">
                <img src="assets/wisata/foto alam.jpg" alt="Card Image 1">
            </div>
            <button class="btn-wisata" onclick="window.location.href='wdestinasi1'">Alam</button>
        </div>
        <div class="wisata card-wrapper">
            <div class="card">
                <img src="assets/wisata/foto mall.jpg" alt="Card Image 2">
            </div>
            <button class="btn-wisata" onclick="buttonClicked()">Mall</button>
        </div>
        <div class="wisata card-wrapper">
            <div class="card">
                <img src="assets/wisata/foto dufan.jpg" alt="Card Image 3">
            </div>
            <button class="btn-wisata" onclick="buttonClicked()">Lainnya</button>
        </div>
    </div>
    {{-- end destinasi wisata --}}
    <br>
    <br>
    {{-- Penginapan --}}
    <div>
        <h3 class="judul">Penginapan</h3>
    </div>
    <br>
    <div>
        <h3 class="isi">Cari tempat penginapan yang nyaman dan aman selama liburan</h3>
    </div>
    <br>
    <div class="container-wisata">
        <div class="wisata card-wrapper">
            <div class="card">
                <img src="assets/wisata/foto hotel.jpg" alt="Card Image 1">
            </div>
            <button class="btn-wisata" onclick="window.location.href='wpenginapan1'">Hotel</button>
        </div>
        <div class="wisata card-wrapper">
            <div class="card">
                <img src="assets/wisata/foto homestay.jpeg" alt="Card Image 2">
            </div>
            <button class="btn-wisata" onclick="buttonClicked()">Homestay</button>
        </div>
        <div class="wisata card-wrapper">
            <div class="card">
                <img src="assets/wisata/foto villa.jpg" alt="Card Image 3">
            </div>
            <button class="btn-wisata" onclick="buttonClicked()">Villa</button>
        </div>
    </div>
    {{-- end Penginapan --}}
    <br>
    <br>
    {{-- Kuliner --}}
    <div>
        <h3 class="judul">Kuliner</h3>
    </div>
    <br>
    <div>
        <h3 class="isi">Nikmati berbagai macam kuliner terbaik dalam liburan anda</h3>
    </div>
    <br>
    <div class="container-wisata">
        <div class="wisata card-wrapper">
            <div class="card">
                <img src="assets/wisata/foto restoran.jpg" alt="Card Image 1">
            </div>
            <button class="btn-wisata" onclick="window.location.href='wkuliner1'">Restaurant</button>
        </div>
        <div class="wisata card-wrapper">
            <div class="card">
                <img src="assets/wisata/foto streetfood.jpg" alt="Card Image 2">
            </div>
            <button class="btn-wisata" onclick="buttonClicked()">Streetfood</button>
        </div>
        <div class="wisata card-wrapper">
            <div class="card">
                <img src="assets/wisata/foto coffeshop.jpg" alt="Card Image 3">
            </div>
            <button class="btn-wisata" onclick="buttonClicked()">Coffeshop</button>
        </div>
    </div>
    {{-- end Kuliner --}}
    <br>
    <br>
@endsection