@extends('Layouts.app')
@section('content')
    {{-- banner --}}
    <div class="banner">
        <h3 class="text">The Ritz-Carlton</h3>
        <img src="{{ asset('assets/banner/foto Ritz-Carlton 2.jpg') }}" alt="banner">
    </div>
    {{-- end banner --}}
    <br>
    <br>
    {{-- Teks --}}
    <div>
        <h3 class="judul">The Ritz-Carlton</h3>
    </div>
    <br>
    <div>
        <h4 class="isi-wisata2">Ritz-Carlton adalah sebuah merek hotel dan resor mewah dengan 
            70 properti yang terletak di kota-kota besar dan tempat resor 
            eksklusif di 23 negara di seluruh dunia. Merek The Ritz-Carlton 
            dikelola oleh Ritz-Carlton Hotel Company LLC, sebuah anak 
            perusahaan dari Marriott International. Ritz-Carlton Hotel Company 
            saat ini memiliki 32.000 karyawan.
        </h4>
    </div>
    {{-- end Teks --}}
    <br>
    <br>
    {{-- Deskripsi --}}
    <div class="body2">
        <div class="card2">
            <p class="card-content2">Hotel The Ritz-Carlton terlekat di berbagai kota
                besar di Indonesia, seperti Jakarta dan Bali.</p>
            <p class="card-content2">Menyediakan fasilitas tempat tidur, kamar mandi,
                kolam berenang, restoran, gym sportation,
                karaoke, dan kids station.</p>
            <p class="card-content2">Biaya Penginapan = Rp 4.000.000 / Malam.</p>
        </div>
    </div>
    {{-- end Deskripsi --}}
    <br>
    {{-- Dokumentasi --}}
    <div class="body2">
        <div class="card2">
            <img class="card-dokum" src="assets/wisata/foto Ritz-Carlton.jpg" alt="foto">
            <img class="card-dokum" src="assets/wisata/foto Ritz-Carlton 2.jpg" alt="foto">
            <img class="card-dokum" src="assets/wisata/foto ritz-carlton 3.jpeg" alt="foto">
            <img class="card-dokum" src="assets/wisata/foto ritz-carlton 4.jpg" alt="foto">
        </div>
    </div>
    {{-- endDokumentasi --}}
    <br>
    <br>
    <br>
@endsection