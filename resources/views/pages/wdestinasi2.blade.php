@extends('Layouts.app')
@section('content')
    {{-- banner --}}
    <div class="banner">
        <h3 class="text">Raja Ampat</h3>
        <img src="{{ asset('assets/banner/foto rajaampat 2.jpg') }}" alt="banner">
    </div>
    {{-- end banner --}}
    <br>
    <br>
    {{-- Teks --}}
    <div>
        <h3 class="judul">Raja Ampat</h3>
    </div>
    <br>
    <div>
        <h4 class="isi-wisata2">Adalah sebuah kabupaten yang merupakan bagian dari 
            Provinsi Papua Barat. Untuk mencapai Kepulauan ini, kita harus 
            menginjakkan kaki di kota Sorong terlebih dahulu. Biasanya para
            wisatawan banyak menggunakan penerbangan untuk sampai ke kota ini. 
            Setelah sampai kota Sorong, kita dapat menggunakan sejenis kapal cepat 
            yang biasa berlayar dua kali sehari menuju Waisai, ibukota kabupaten 
            Raja Ampat. Perjalanan hanya akan memakan waktu sekitar 2-3 jam saja 
            dari pelabuhan Sorong, hingga sampai di pelabuhan Waisai Raja Ampat.
        </h4>
    </div>
    {{-- end Teks --}}
    <br>
    <br>
    {{-- Deskripsi --}}
    <div class="body2">
        <div class="card2">
            <p class="card-content2">Raja Ampat terbagi menjadi 4 pulau utama Waigeo, Batanta, Salawati, Misool.</p>
            <p class="card-content2">Ada sejumlah pantai berpasir putih, gugusan pulau karst dan flora fauna endemik.</p>
            <p class="card-content2">Biaya Destinasi 1 Orang = Rp 4.000.000.</p>
            <p class="card-content2">Biaya Masuk 1 Orang = Rp 250.000.</p>
        </div>
    </div>
    {{-- end Deskripsi --}}
    <br>
    {{-- Dokumentasi --}}
    <div class="body2">
        <div class="card2">
            <img class="card-dokum" src="assets/wisata/foto RajaAmpat.jpg" alt="foto">
            <img class="card-dokum" src="assets/wisata/foto rajaampat 2.jpg" alt="foto">
            <img class="card-dokum" src="assets/wisata/foto rajaampat 3.jpg" alt="foto">
            <img class="card-dokum" src="assets/wisata/foto rajaampat 4.jpg" alt="foto">
        </div>
    </div>
    {{-- endDokumentasi --}}
    <br>
    <br>
    <br>
@endsection