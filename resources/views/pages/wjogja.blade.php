@extends('Layouts.app')
@section('content')
    {{-- banner --}}
    <div class="banner">
        <h3 class="text">ke mana kamu <br>ingin pergi?</h3>
        <img src="{{ asset('assets/wilayah/jogjakarta.jpg') }}" alt="banner">
    </div>
    {{-- end banner --}}
    <br>
    <br>
    {{-- Teks --}}
    <div>
        <h3 class="judul">Yogyakarta</h3>
    </div>
    <br>
    <div>
        <h3 class="isi">Berikut rekomendasi terbaik dari platform kami di wilayah ini</h3>
    </div>
    {{-- end Teks --}}
    <br>
    <br>
    {{-- Destinasi Wisata --}}
    <div>
        <h3 class="judul">Destinasi Wisata</h3>
    </div>
    <div class="main-card-wilayah2">
        <!-- Nested Card 1 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Pasar Malioboro</h3>
            <img src="assets/wilayah/malioboro.jpg" width="300px" height="300px" alt="image 1">
            <div class="nested-card-body-wilayah2">
                <button onclick="window.location.href='wmalioboro'">Detail</button>
            </div>
        </div>
        <!-- Nested Card 2 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Kraton Yogyakarta</h3>
            <img src="assets/wilayah/kraton yogya.jpeg" width="300px" height="300px" alt="image 2">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
        <!-- Nested Card 3 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Candi Prambanan</h3>
            <img src="assets/wilayah/candi prambanan.jpg" width="300px" height="300px" alt="image 3">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
         <!-- Nested Card 4 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Taman Sari</h3>
            <img src="assets/wilayah/taman sari.jpg" width="300px" height="300px" alt="image 4">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
         <!-- Nested Card 5 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Pantai Parangtritis</h3>
            <img src="assets/wilayah/pantai parangtritis.jpg" width="300px" height="300px" alt="image 5">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
    </div>
    {{-- end Destinasi Wisata --}}
    <br>
    <br>
    {{-- Penginapan --}}
    <div>
        <h3 class="judul">Penginapan</h3>
    </div>
    <div class="main-card-wilayah2">
        <!-- Nested Card 1 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Khayangan Resort</h3>
            <img src="assets/wilayah/khayangan resort.jpg" width="300px" height="300px" alt="image 1">
            <div class="nested-card-body-wilayah2">
                <button onclick="window.location.href='wkhayangan'">Detail</button>
            </div>
        </div>
        <!-- Nested Card 2 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">d'Omah Hotel Yogya</h3>
            <img src="assets/wilayah/domah.jpg" width="300px" height="300px" alt="image 2">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
        <!-- Nested Card 3 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Abhayagiri - SWH Resort</h3>
            <img src="assets/wilayah/Abhayagiri.jpg" width="300px" height="300px" alt="image 3">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
         <!-- Nested Card 4 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Ostic House</h3>
            <img src="assets/wilayah/ostic.jpg" width="300px" height="300px" alt="image 4">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
         <!-- Nested Card 5 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Omah Pakem Resort</h3>
            <img src="assets/wilayah/omahresort.jpg" width="300px" height="300px" alt="image 5">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
    </div>
    {{-- end Penginapan --}}
    <br>
    <br>
    {{-- Kuliner --}}
    <div>
        <h3 class="judul">Kuliner</h3>
    </div>
    <div class="main-card-wilayah2">
        <!-- Nested Card 1 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Bakmi Mbah Mo</h3>
            <img src="assets/wilayah/mbakmi mbah.jpg" width="300px" height="300px" alt="image 3">
            <div class="nested-card-body-wilayah2">
                <button onclick="window.location.href='wbakmimbah'">Detail</button>
            </div>
        </div>
        <!-- Nested Card 2 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Sate Klatak Pak Bari</h3>
            <img src="assets/wilayah/sate klatak.jpg" width="300px" height="300px" alt="image 2">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
        <!-- Nested Card 3 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Mie Ayam Bu Tumini</h3>
            <img src="assets/wilayah/mie ayam.jpg" width="300px" height="300px" alt="image 1">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
         <!-- Nested Card 4 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Angkringan Pak Jabrik</h3>
            <img src="assets/wilayah/angkringan.jpg" width="300px" height="300px" alt="image 4">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
         <!-- Nested Card 5 -->
        <div class="nested-card-wilayah2">
            <h3 class="nested-card-text-wilayah2">Kupat Gule Bang Doel</h3>
            <img src="assets/wilayah/kupat.jpg" width="300px" height="300px" alt="image 5">
            <div class="nested-card-body-wilayah2">
                <button>Detail</button>
            </div>
        </div>
    </div>
    {{-- end Kuliner --}}
    <br>
    <br>
@endsection