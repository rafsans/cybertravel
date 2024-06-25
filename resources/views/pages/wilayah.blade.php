@extends('Layouts.app')
@section('content')
    {{-- banner --}}
    <div class="banner">
        <h3 class="text">ke mana kamu <br>ingin pergi?</h3>
        <img src="{{ asset('assets/banner/banner.jpg') }}" alt="banner">
    </div>
    {{-- end banner --}}
    <br>
    <br>
    {{-- Wilayah --}}
    <div>
        <h3 class="judul">Wilayah</h3>
    </div>
    <br>
    <div>
        <h3 class="isi">Cari dan kunjungi berbagai tempat di setiap wilayah untuk menikmati liburan anda</h3>
    </div>
    <br>    
    <div class="container-wilayah">
        <!-- Card 1 -->
        <div class="card-wilayah">
            <img src="assets/wilayah/jogjakarta.jpg" class="card-wilayah-img" width="300px" height="300px" alt="image 1">
            <div class="card-body-wilayah">
                <h3 class="card-title-wilayah">Yogyakarta</h3>
                <button class="card-button-wilayah" onclick="window.location.href='wjogja'">Lihat</button>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="card-wilayah">
            <img src="assets/wilayah/jakarta.jpg" class="card-wilayah-img" width="300px" height="300px" alt="image 2">
            <div class="card-body-wilayah">
                <h3 class="card-title-wilayah">Jakarta</h3>
                <button class="card-button-wilayah">Lihat</button>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="card-wilayah">
            <img src="assets/wilayah/bali.jpg" class="card-wilayah-img" width="300px" height="300px" alt="image 3">
            <div class="card-body-wilayah">
                <h3 class="card-title-wilayah">Bali</h3>
                <button class="card-button-wilayah">Lihat</button>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="card-wilayah">
            <img src="assets/wilayah/solo.jpg" class="card-wilayah-img" width="300px" height="300px" alt="image 4">
            <div class="card-body-wilayah">
                <h3 class="card-title-wilayah">Solo</h3>
                <button class="card-button-wilayah">Lihat</button>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="card-wilayah">
            <img src="assets/wilayah/bandung.jpg" class="card-wilayah-img" width="300px" height="300px" alt="image 5">
            <div class="card-body-wilayah">
                <h3 class="card-title-wilayah">Bandung</h3>
                <button class="card-button-wilayah">Lihat</button>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="card-wilayah">
            <img src="assets/wilayah/medan.jpg" class="card-wilayah-img" width="300px" height="300px" alt="image 6">
            <div class="card-body-wilayah">
                <h3 class="card-title-wilayah">Medan</h3>
                <button class="card-button-wilayah">Lihat</button>
            </div>
        </div>
        <!-- Card 7 -->
        <div class="card-wilayah">
            <img src="assets/wilayah/malang.jpg" class="card-wilayah-img" width="300px" height="300px" alt="image 7">
            <div class="card-body-wilayah">
                <h3 class="card-title-wilayah">Malang</h3>
                <button class="card-button-wilayah">Lihat</button>
            </div>
        </div>
        <!-- Card 8 -->
        <div class="card-wilayah">
            <img src="assets/wilayah/semarang.jpg" class="card-wilayah-img" width="300px" height="300px" alt="image 8">
            <div class="card-body-wilayah">
                <h3 class="card-title-wilayah">Semarang</h3>
                <button class="card-button-wilayah">Lihat</button>
            </div>
        </div>
        <!-- Card 9 -->
        <div class="card-wilayah">
            <img src="assets/wilayah/padang.jpg" class="card-wilayah-img" width="300px" height="300px" alt="image 9">
            <div class="card-body-wilayah">
                <h3 class="card-title-wilayah">Padang</h3>
                <button class="card-button-wilayah">Lihat</button>
            </div>
        </div>
    </div>
    {{-- end Wilayah --}}
    <br>
    <br>
@endsection