<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibeFour</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: #FFF;
            transition: all 0.3s ease-in-out;
        }

        .nav-link {
            color: black !important;
            transition: color 0.3s ease-in-out;
        }

        .navbar-brand {
            color: #72B5F6 !important;
        }

        .navbar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar .nav-link.active {
            color: #72B5F6 !important;
            font-weight: 500;
        }
    </style>
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-fixed p-3 shadow-sm">
        <div class="container-fluid mx-5">
            <a class="navbar-brand fs-4 fw-bold" href="/">VibeFour</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-3">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}"
                            href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link {{ Request::is('produk') ? 'active' : '' }}"
                            href="{{ url('/produk') }}">Produk</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link {{ Request::is('tentang') ? 'active' : '' }}"
                            href="{{ url('/tentang') }}">Tentang</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}"
                            href="{{ url('/kontak') }}">Kontak</a>
                    </li>
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
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
                            style="background-color: #72B5F6; color: #FFF; border-radius: 20px; width: 100px;"><i
                                class="fa-solid fa-user"></i> Masuk</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('konten')

    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1000,
            delay: 400
        });
        ScrollReveal().reveal('.span-title, .span-sub, .map, .atas', {
            delay: 500,
            origin: 'top'
        });
        ScrollReveal().reveal('.bawah', {
            delay: 500,
            origin: 'bottom'
        });
        ScrollReveal().reveal('.kanan', {
            delay: 500,
            origin: 'right'
        });
        ScrollReveal().reveal('.kiri', {
            delay: 500,
            origin: 'left'
        });
    </script>
</body>

</html>
