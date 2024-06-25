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
        <h3 class="judul">Destinas Wisata (Alam)</h3>
    </div>
    <br>
    <div>
        <h3 class="isi">Kunjungi berbagai tempat untuk menikmati liburan anda</h3>
    </div>
    <br>
    <div class="container-wisata2">
    <div class="card-column">
        <div class="card-wisata2">
            <div class="card-body">
                <div class="card-text">
                    <h3 class="card-title">Raja Ampat</h3>
                </div>
                <img src="assets/wisata/foto RajaAmpat.jpg" alt="Raja Ampat">
                <div class="card-footer">
                    <a href="wdestinasi2" class="btn-wisata2">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>    
    <div class="card-column">
        <div class="card-wisata2">
            <div class="card-body">
                <div class="card-text">
                    <h3 class="card-title">Taman Bunga</h3>
                </div>
                <img src="assets/wisata/foto taman Bunga Bogor.jpg" alt="Taman Bunga">
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
                    <h3 class="card-title">Gunung Bromo</h3>
                </div>
                <img src="assets/wisata/foto gunung bromo.jpg" alt="Gunung Bromo">
                <div class="card-footer">
                    <a href="#" class="btn-wisata2">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- end destinasi wisata --}}
    <br>
    <br>
@endsection