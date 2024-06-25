@extends('Layouts.app')
@section('content')
    {{-- banner --}}
    <div class="banner">
        <h3 class="text">Malioboro</h3>
        <img src="{{ asset('assets/wilayah/malioboro2.jpg') }}" alt="banner">
    </div>
    {{-- end banner --}}
    <br>
    <br>
    {{-- Teks --}}
    <div>
        <h3 class="judul">Pasar Malioboro</h3>
    </div>
    <br>
    <div>
        <h4 class="isi-wisata2">Adalah sebuah pasar yang terdapat di jalan Malioboro Yogyakarta, kawasan dari tiga jalan di kota Yogyakarta yang membentang dari tugu Yogyakarta hingga ke persimpangan titik nol kilometer Yogya. Pasar ini berada di sepanjang jalan Malioboro sampai beberapa kilo dan menjual berbagai hal mulai dari pakaian, makanan minuman, oleh-oleh khas Jogja, dll.</h4>
    </div>
    {{-- end Teks --}}
    <br>
    <br>
    {{-- Deskripsi --}}
    <div class="body2">
        <div class="card2">
            <p class="card-content2">Malioboro menjual berbagai macam oleh-oleh khas Jogja, seperti makanan, pakaian, barang dan pernak-pernik khas Jogja lainnya.</p>
            <p class="card-content2">Terletak di kawasan jalan Malioboro, Jogjakarta.</p>
            <p class="card-content2">Jam operasional pasar 1 x 24 jam.</p>
        </div>
    </div>
    {{-- end Deskripsi --}}
    <br>
    {{-- Dokumentasi --}}
    <div class="body2">
        <div class="card2">
            <img class="card-dokum" src="assets/wilayah/malioboro3.jpg" alt="foto">
            <img class="card-dokum" src="assets/wilayah/malioboro4.jpg" alt="foto">
            <img class="card-dokum" src="assets/wilayah/malioboro5.jpg" alt="foto">
            <img class="card-dokum" src="assets/wilayah/malioboro6.jpg" alt="foto">
        </div>
    </div>
    {{-- endDokumentasi --}}
    <br>
    <br>
    <br>
@endsection