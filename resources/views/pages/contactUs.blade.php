@extends('Layouts.app')
@section('content')
    <div class="container container-contact d-flex justify-content-center">
        <div class="card mx-5 contact">
            <div class="card-body ">
                <h2 class="mb-1">Informasi Kontak</h2>
                <div class="wrapper-text">
                    <i class="bi bi-telephone"></i>
                    <div class="text">
                        <span>Nomor Telepon</span>
                        <p>+62877-5812-3440</p>
                    </div>
                </div>
                <div class="wrapper-text">
                    <i class="bi bi-envelope"></i>
                    <div class="text">
                        <span>Email</span>
                        <p>kontak@cyberstravel.id</p>
                    </div>
                </div>
                <div class="wrapper-text">
                    <i class="bi bi-geo-alt"></i>
                    <div class="text">
                        <span>Lokasi</span>
                        <p class="location">Perkantoran Pemda Provinsi Bengkulu.
                            JL. Pembangunan No. 01, Padang Harapan Kota Bengkulu 38225</p>
                    </div>
                </div>
                <div class="social-media">
                    <h5>Social Media :</h5>
                </div>
            </div>
        </div>
        <div class="card mx-5 message">
            <div class="card-body">
                <h2 class="mb-4">Kirim Pesan</h2>
                <form action="">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control mx-2 rounded-1" placeholder="Nama Lengkap*" required>
                        <input type="text" class="form-control mx-2 rounded-1" placeholder="Nomor Telepon*" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control mx-2 rounded-1" placeholder="Alamat Email*" required>
                    </div>
                    <div class="input-group">
                        <textarea class="form-control mx-2 rounded-1" placeholder="Ketik Pesan*" required></textarea>
                    </div>
                    <a class="btn btn-danger mx-2 mt-2 rounded-1" href="#" type="submit">Kirim</a>
                </form>
            </div>
        </div>
    </div>
@endsection
