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
    {{-- Makanan --}}
    <div>
        <h3 class="judul-kuliner3">Makanan</h3>
    </div>
    <div>
    <div class="container-kuliner3">
        <div class="row">
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Nasi Goreng Seafood</h3>
                <img class="card-image-kuliner3" src="assets/wisata/foto nasi goreng seafood.jpg" alt="Foto 1">
            </div>
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Bakmie Sapi</h3>
                <img class="card-image-kuliner3" src="assets/wisata/foto bakmi sapi.jpeg" alt="Foto 2">
            </div>
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Sate Kambing</h3>
                <img class="card-image-kuliner3" src="assets/wisata/foto sate kambing.jpg" alt="Foto 3">
            </div>
        </div>
        <div class="row">
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Ayam Barbeque</h3>
                <img class="card-image-kuliner3" src="assets/wisata/foto ayam barbeque.jpg" alt="Foto 4">
            </div>
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Sayur Capcay</h3>
                <img class="card-image-kuliner3" src="assets/wisata/foto sayur capcay.jpg" alt="Foto 5">
            </div>
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Ikan Bakar</h3>
                <img class="card-image-kuliner3" src="assets/wisata/foto ikan bakar.jpg" alt="Foto 6">
            </div>
        </div>
    </div>
    </div>
    {{-- end Makanan --}}
    <br>
    <br>
@endsection