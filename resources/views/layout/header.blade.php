<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibeFour</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');

        body {
            font-family: 'Inter';
        }

        .navbar {
            z-index: 10;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 shadow position-fixed w-100 top-0 z-index-5">
        <div class="container-fluid mx-5">
            <a class="navbar-brand fs-4 fw-bold" style="color: #72B5F6;" href="#">VibeFour</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-3">
                        <a class="nav-link text-dark" href="#">Beranda</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link text-dark" href="#">Tentang</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link text-dark" href="#">Kontak</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link text-dark" href="#">Produk</a>
                    </li>
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="languageDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/indo.png') }}" width="25" height="25"
                                class="border rounded-pill" alt="">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li>
                                <a class="dropdown-item" href="#"><img src="{{ asset('img/indo.png') }}"
                                        width="25" height="25" class="border rounded-pill" alt="">
                                    Indonesia</a>
                            </li>
                            <li><a class="dropdown-item" href="#"><img src="{{ asset('img/inggrisjpeg.jpeg') }}"
                                        width="25" height="25" class="border rounded-pill" alt="">
                                    English</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-3">
                        <button class="btn ms-3"
                            style="background-color: #72B5F6; color: #FFF; border-radius: 20px; width: 100px;">Masuk</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('konten')

    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>

</html>
