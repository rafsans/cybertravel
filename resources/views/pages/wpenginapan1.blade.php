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
    {{-- Penginapan --}}
    <div>
        <h3 class="judul">Penginapan (Hotel)</h3>
    </div>
    <br>
    <div>
        <h3 class="isi">Cari tempat penginapan yang nyaman dan aman selama liburan</h3>
    </div>
    <br>
    <div class="container-wisata2">
    <div class="card-column">
        <div class="card-wisata2">
            <div class="card-body">
                <div class="card-text">
                    <h3 class="card-title">The Ritz-Carlton</h3>
                </div>
                <img src="assets/wisata/foto Ritz-Carlton.jpg" alt="Ritz-Carlton">
                <div class="card-footer">
                    <a href="wpenginapan2" class="btn-wisata2">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>    
    <div class="card-column">
        <div class="card-wisata2">
            <div class="card-body">
                <div class="card-text">
                    <h3 class="card-title">Kempinski</h3>
                </div>
                <img src="assets/wisata/foto kempinski.jpg" alt="Kempinski">
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
                    <h3 class="card-title">Grand Hyatt</h3>
                </div>
                <img src="assets/wisata/foto grand hyatt.jpeg" alt="Grand Hyatt">
                <div class="card-footer">
                    <a href="#" class="btn-wisata2">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- end Penginapan --}}
    <br>
    <br>
@endsection