@extends('Layouts.app')
@section('content')
    <div class="container-fluid tentang">
        <h1 class="text-center">Tentang Kami</h1>
        <div class="wrapper-digital">
            <div class="card mb-5">
                <div class="card-body">
                    <div class="title">
                        <h3>Desa Digital</h3>
                    </div>
                    <p>Program pemberdayaan masyarakat desa melalui layanan digital dengan
                        pemanfaatan teknologi digital dan internet dalam pengembangan potensi
                        desa,pemasaran, percepatan akses serta pelayanan informasi guna membangun
                        usaha usaha mikro desa yang terhubung ke dunia luar sehingga terciptanya
                        lapangan pekerjaan di desa. <br><br>Sesuai dengan namanya, Desa Digital diharapkan bisa membantu dan
                        memberi
                        dampak positif bagi desa. Dalam penerapan Teknologi Informasi dapat membantu
                        desa dalam pendataan permasalahan dan persoalan yang berkaitan dengan
                        pelayanan dan pendataan administrasi di desa dan pemberdayaan sumber daya
                        yang menjadi unggulan desa menggunakan teknologi. <br><br>Dalam pelaksanaan pemerintahan desa,
                        pemerintah desa dituntut untuk
                        mempercepat dan pemerataan pembangunan dan ekonomi, efisiensi pelayanan,
                        penyediaan informasi publik dan transparan dalam pengelolaan keuangan desa.
                        Maka dari itu dengan Aplikasi Desa Digital pemerintah desa dapat melakukan
                        hal-hal tersebut dengan dasar data yang dimiliki desa. Dengan data tersebut
                        desa dapat menentukan arah kebijakan pembangunan demi kepentingan desa
                        dan masyarakat.</p>
                </div>
            </div>
            <div class="card-img">
                <img class="img-thumbnail rounded" src="{{ asset('assets/hotel/bandung.jpg') }}" alt="">
            </div>
        </div>
        <div class="wrapper-wisata">
            <div class="card-img mb-5">
                {{-- <img class="img-thumbnail rounded" src="{{ asset('assets/hotel/bandung.jpg') }}" alt=""> --}}
                <iframe class="order-2" height="100%" src="https://www.youtube.com/embed/qcb39pKShAA?si=vJRY-zHdkx06qrgk"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="title">
                        <h3>Desa Wisata</h3>
                    </div>
                    <p>
                        Pembentukan desa wisata ini adalah untuk meningkatkan posisi dan peran
                        masyarakat sebagai pelaku penting dalam pembangunan sektor pariwisata
                        dan dapat bersinergi dan bermitra dengan pemangku kepentingan terkait dalam
                        meningkatkan kualitas perkembangan kepariwisataan didaerah membangun
                        dan menumbuhkan sikap dukungan positif dari masyarakat desa sebagai tuan
                        rumah melalui perwujudan nilai-nilai sapta pesona bagi tumbuh. <br><br>
                        Selain pengembangan Desa Digital – DEDI,  Provinsi Bengkulu memiliki
                        banyak tempat Exotik Wisata yang dapat menjadi objek pilihan para
                        wisatawan lokal dan mancanegara . Guna memfasilitasi dan mengembangkan
                        objek wisata kami membangun website desa wisata bengkulu sebagai etalase
                        online dalam memperkenalkan objek wisata dan keunikan desa dalam
                        mewujudkan program Desa Wisata – DEWI Provinsi Bengkulu. <br>
                    </p>
                    <span>5 Komponen DEWI Prov. Bengkulu</span>
                    <ul>
                        <li>Memiliki Attraction/atraksi wisata unggulan</li>
                        <li>Memiliki Amenities/Kelembagaan</li>
                        <li>Memiliki Aksesibilitas/Sarana-Prasarana yang memadai</li>
                        <li>Memiliki Ancilliries/Akomodasi wisata pendukung</li>
                        <li>Memiliki Community Involvement/Keterlibatan Masyarakat</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
