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
    {{-- Kuliner --}}
    <div>
        <h3 class="judul">Kuliner (Restaurant)</h3>
    </div>
    <br>
    <div>
        <h3 class="isi">Nikmati berbagai macam kuliner terbaik dalam liburan anda</h3>
    </div>
    <br>
    <div class="container-wisata2">
    <div class="card-column">
        <div class="card-wisata2">
            <div class="card-body">
                <div class="card-text">
                    <h3 class="card-title">Lemongrass</h3>
                </div>
                <img src="assets/wisata/foto lemongrass.jpg" alt="Lemongrass">
                <div class="card-footer">
                    <a href="wkuliner2" class="btn-wisata2">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>    
    <div class="card-column">
        <div class="card-wisata2">
            <div class="card-body">
                <div class="card-text">
                    <h3 class="card-title">Solaria</h3>
                </div>
                <img src="assets/wisata/foto solaria.jpeg" alt="Solaria">
                <div class="card-footer">
                    <a href="#" class="btn-wisata2">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-column">
        <div class="card-wisata2">
            <div class="card-body">
                <div class="card-text">
                    <h3 class="card-title">Cretya Lite</h3>
                </div>
                <img src="assets/wisata/foto cretya lite.jpg" alt="Cretya Lite">
                <div class="card-footer">
                    <a href="#" class="btn-wisata2">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- end Kuliner --}}
    <br>
    <br>
@endsection