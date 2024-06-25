@extends('Layouts.app')
@section('content')
    {{-- banner --}}
    <div class="banner">
        <h3 class="text">Lemongrass</h3>
        <img src="{{ asset('assets/banner/foto lemongrass 2.jpg') }}" alt="banner">
    </div>
    {{-- end banner --}}
    <br>
    <br>
    {{-- Teks --}}
    <div>
        <h3 class="judul">Lemongrass</h3>
    </div>
    <br>
    <div>
        <h4 class="isi-wisata2">Lemongrass Bogor yang tidak jarang menjadi resto andalan para 
            pencinta kuliner ini adalah satu destinasi yang harus dikunjungi 
            saat mampir ke Kota Hujan. Letaknya yang dekat dari pusat kota, 
            tepatnya di Jl. Raya Pajajaran No. 21, Bogor Utara, membuatnya 
            mudah untuk ditemukan.
        </h4>
    </div>
    {{-- end Teks --}}
    <br>
    <br>
    {{-- Deskripsi --}}
    <div class="body2">
        <div class="card2">
            <p class="card-content2">Buka pukul 17.00 - 22.00 WIB.</p>
            <p class="card-content2">Menyediakan berbagai macam menu makanan
                yang terdiri dari makanan domestik hingga 
                manca negara, serta makanan tradisional dan
                modern.</p>
            <p class="card-content2">Biaya Booking VIP = Rp 4.000.000 ( 5-10 Orang )</p>
        </div>
    </div>
    {{-- end Deskripsi --}}
    <br>
    {{-- Dokumentasi --}}
    <div class="body2">
        <div class="card2">
            <img class="card-dokum" src="assets/wisata/foto lemongrass.jpg" alt="foto">
            <img class="card-dokum" src="assets/wisata/foto lemongrass 2.jpg" alt="foto">
            <img class="card-dokum" src="assets/wisata/foto lemongrass 3.jpg" alt="foto">
            <img class="card-dokum" src="assets/wisata/foto lemongrass 4.jpg" alt="foto">
        </div>
    </div>
    {{-- endDokumentasi --}}
    {{-- Menu --}}
    <div class="container2">
        <div class="card-kuliner-2">
            <p class="card-kuliner2">Menu</p>
            <div class="card-content2">
                <img class="card-dokum2" src="assets/wisata/foto lemongrass 5.jpg" alt="foto">
                <button onclick="window.location.href='wkuliner3'" class="btn-kuliner2">Detail</button>
            </div>
        </div>
    </div>
    {{-- end Menu --}}
@endsection