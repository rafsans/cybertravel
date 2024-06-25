@extends('Layouts.app')
@section('content')
    <div class="container">
        <h1 class="fw-bold text-uppercase text-center my-5">Akun</h1>
        <div class="wrapper d-flex justify-content-evenly my-5">
            <div class="card px-3" style="width: max-content;">
                <div class="card-body my-3">
                    <h5 class="card-title font-weight-bold">Nama Pengguna</h5>
                    <input type="text" value="{{ $user->username }}"disabled>
                </div>
            </div>
            <div class="card px-3" style="width: max-content;">
                <div class="card-body my-3">
                    <h5 class="card-title font-weight-bold">Email</h5>
                    <input type="text" value="{{ $user->email }}"disabled>
                </div>
            </div>
        </div>
        <div class="wrapper d-flex justify-content-evenly my-5">
            <div class="card px-3" style="width: max-content;">
                <div class="card-body my-3">
                    <h5 class="card-title font-weight-bold">Nomor Telephone</h5>
                    <input type="text" value="{{ $user->telepon }}"disabled>
                </div>
            </div>
            <div class="card px-3" style="width: max-content;">
                <div class="card-body my-3">
                    <h5 class="card-title font-weight-bold">Asal Kota</h5>
                    <input type="text" value="{{ $user->asal }}"disabled>
                </div>
            </div>
        </div>
        <div class="wrapper my-5" style="margin-left: 21%">
            <div class="card px-3" style="width: max-content;">
                <div class="card-body my-3">
                    <h5 class="card-title font-weight-bold">Minat Liburan</h5>
                    <input type="text"  value="">
                </div>
            </div>
        </div>
    </div>
@endsection
