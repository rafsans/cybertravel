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
    {{-- Makanan --}}
    <div>
        <h3 class="judul-kuliner3">Makanan</h3>
    </div>
    <div class="container-kuliner3">
        <div class="row">
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Bakmie Godog</h3>
                <img class="card-image-kuliner3" src="assets/wilayah/bakmi godog.jpg" alt="Foto 1">
            </div>
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Bakmie Goreng</h3>
                <img class="card-image-kuliner3" src="assets/wilayah/bakmi goreng.jpg" alt="Foto 2">
            </div>
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Bakmie Nyemek</h3>
                <img class="card-image-kuliner3" src="assets/wilayah/bakmi nyemek.jpg" alt="Foto 3">
            </div>
        </div>
    </div>
    {{-- end Makanan --}}
    <br>
    {{-- Minuman --}}
    <div>
        <h3 class="judul-kuliner3">Minuman</h3>
    </div>
    <div class="container-kuliner3">
        <div class="row">
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Es Teh Manis</h3>
                <img class="card-image-kuliner3" src="assets/wilayah/es teh manis.jpg" alt="Foto 4">
            </div>
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Teh Manis</h3>
                <img class="card-image-kuliner3" src="assets/wilayah/teh manis.jpg" alt="Foto 5">
            </div>
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Kopi</h3>
                <img class="card-image-kuliner3" src="assets/wilayah/kopi.jpg" alt="Foto 6">
            </div>
        </div>
        <div class="row">
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Air Jeruk</h3>
                <img class="card-image-kuliner3" src="assets/wilayah/jeruk.jpg" alt="Foto 6">
            </div>
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Air Mineral</h3>
                <img class="card-image-kuliner3" src="assets/wilayah/air mineral.jpg" alt="Foto 6">
            </div>
            <div class="card-kuliner3">
                <h3 class="card-title-kuliner3">Wedang Jahe</h3>
                <img class="card-image-kuliner3" src="assets/wilayah/wedang jahe.jpg" alt="Foto 6">
            </div>
        </div>
    </div>
    {{-- end Minuman --}}
    <br>
    <br>
@endsection