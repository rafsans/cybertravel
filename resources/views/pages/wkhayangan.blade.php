@extends('Layouts.app')
@section('content')
    {{-- banner --}}
    <div class="banner">
        <h3 class="text">Khayangan Resort</h3>
        <img src="{{ asset('assets/wilayah/khayangan resort2.jpg') }}" alt="banner">
    </div>
    {{-- end banner --}}
    <br>
    <br>
    {{-- Teks --}}
    <div>
        <h3 class="judul">Hotel Khayangan Resort</h3>
    </div>
    <br>
    <div>
        <h4 class="isi-wisata2">Hotel Khayangan Resort, akomodasi ini adalah pilihan yang pas jika Anda mencari liburan yang tenang dan jauh dari keramaian. Pengalaman menginap Anda tak akan terlupakan berkat pelayanan istimewa yang disertai oleh berbagai fasilitas pendukung untuk kenyamanan Anda.
        </h4>
    </div>
    {{-- end Teks --}}
    <br>
    <br>
    {{-- Deskripsi --}}
    <div class="body2">
        <div class="card2">
            <p class="card-content2">Hotel Khayangan Resort Yogyakarta berada di Ngaglik.</p>
            <p class="card-content2">Menyediakan fasilitas tempat tidur, kamar mandi,
                kolam berenang, restoran, gym sportation, wifi,
                karaoke, dan kids station.</p>
            <p class="card-content2">Biaya Penginapan = Rp 2.000.000 / Malam.</p>
        </div>
    </div>
    {{-- end Deskripsi --}}
    <br>
    {{-- Dokumentasi --}}
    <div class="body2">
        <div class="card2">
            <img class="card-dokum" src="assets/wilayah/khayangan resort3.jpg" alt="foto">
            <img class="card-dokum" src="assets/wilayah/khayangan resort4.jpg" alt="foto">
            <img class="card-dokum" src="assets/wilayah/khayangan resort5.jpg" alt="foto">
            <img class="card-dokum" src="assets/wilayah/khayangan resort6.jpg" alt="foto">
        </div>
    </div>
    {{-- endDokumentasi --}}
    <br>
    <br>
    <br>
@endsection