@extends('Layouts.app')
@section('content')
    {{-- banner --}}
    <div class="banner">
        <h3 class="text">Bakmi Mbah Mo</h3>
        <img src="{{ asset('assets/wilayah/mbakmi mbah2.jpg') }}" alt="banner">
    </div>
    {{-- end banner --}}
    <br>
    <br>
    {{-- Teks --}}
    <div>
        <h3 class="judul">Bakmi Mbah Mo</h3>
    </div>
    <br>
    <div>
        <h4 class="isi-wisata2">Bakmi Mbah Mo sudah didirikan sejak tahun 1986, sebuah warung kuliner desa di kampung Code, Trirenggo, Bantul. Kira-kira 11 kilometer dari pusat Kota Yogyakarta. Warung ini sampai sekarang masih mempertahankan kesederhanaannya dengan prasarana berupa kursi lincak, meja kayu panjang, dinding dari anyaman bambu, dan tungku arang atau anglo untuk memasak.
        </h4>
    </div>
    {{-- end Teks --}}
    <br>
    <br>
    {{-- Deskripsi --}}
    <div class="body2">
        <div class="card2">
            <p class="card-content2">Buka pukul 17.00 - 23.00 WIB.</p>
            <p class="card-content2">Menyediakan berbagai macam menu makanan
               bakmie yang terdiri dari beberapa jenis berbeda dan minuman.</p>
            <p class="card-content2">Biaya Booking VIP = Rp 1.000.000 ( 5-10 Orang ).</p>
        </div>
    </div>
    {{-- end Deskripsi --}}
    <br>
    {{-- Dokumentasi --}}
    <div class="body2">
        <div class="card2">
            <img class="card-dokum" src="assets/wilayah/mbakmi mbah3.jpg" alt="foto">
            <img class="card-dokum" src="assets/wilayah/mbakmi mbah4.jpg" alt="foto">
            <img class="card-dokum" src="assets/wilayah/mbakmi mbah5.jpg" alt="foto">
            <img class="card-dokum" src="assets/wilayah/mbakmi mbah6.jpg" alt="foto">
        </div>
    </div>
    {{-- endDokumentasi --}}
    {{-- Menu --}}
    <div class="container2">
        <div class="card-kuliner-2">
            <p class="card-kuliner2">Menu</p>
            <div class="card-content2">
                <img class="card-dokum2" src="assets/wilayah/mbakmi mbah7.jpg" alt="foto">
                <button onclick="window.location.href='wbakmimbah2'" class="btn-kuliner2">Detail</button>
            </div>
        </div>
    </div>
    {{-- end Menu --}}
@endsection