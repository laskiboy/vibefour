<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibeFour</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.1);
            /* backdrop-filter: blur(10px); */
            transition: all 0.3s ease-in-out;
        }

        .navbar.scrolled {
            background-color: white !important;
            backdrop-filter: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .nav-link {
            color: white !important;
            transition: color 0.3s ease-in-out;
        }

        .navbar.scrolled .nav-link {
            color: black !important;
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

<body class="bg">
    <nav class="navbar navbar-expand-lg navbar-fixed p-3 shadow-sm">
        <div class="container-fluid mx-5">
            <a class="navbar-brand fs-4 fw-bold" href="#">VibeFour</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        window.addEventListener('scroll', function() {
            let navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        ScrollReveal({
            reset: true,
            distance: '60px',
            duration: 1000,
            delay: 400
        });
        ScrollReveal().reveal('.span-title, .span-sub, .oi, .slide', {
            delay: 500,
            origin: 'top'
        });
        ScrollReveal().reveal('.card-duwa', {
            delay: 500,
            origin: 'bottom'
        });
        ScrollReveal().reveal('.card, .fitur-2, .card-3, .gambar-1, .kiri-2', {
            delay: 500,
            origin: 'right'
        });
        ScrollReveal().reveal('.fitur, .card-2, .card-1, .gambar-2, .kiri-1', {
            delay: 500,
            origin: 'left'
        });
    </script>
</body>

</html>
