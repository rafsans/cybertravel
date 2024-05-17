@section('nav')
    <nav class="navbar navbar-expand-lg">
        <a href="#" class="navbar-brand"><img src="{{ asset('assets/img/Logo.png') }}" alt="Cybertravel"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Wilayah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Review</a>
                </li>
            </ul>
        </div>
        <div class="button-cust">
            <button>Login</button>
        </div>
    </nav>
@endsection
