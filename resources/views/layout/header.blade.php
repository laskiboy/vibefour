<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibeFour</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar awal transparan */
        .navbar {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease-in-out;
        }

        /* Navbar saat di-scroll */
        .navbar.scrolled {
            background-color: white !important;
            backdrop-filter: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Warna link navbar */
        .nav-link {
            color: white !important;
            transition: color 0.3s ease-in-out;
        }

        /* Warna link navbar saat di-scroll */
        .navbar.scrolled .nav-link {
            color: black !important;
        }

        /* Warna brand (logo teks) */
        .navbar-brand {
            color: #72B5F6 !important;
        }

        /* Pastikan navbar tetap di atas */
        .navbar-fixed {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-fixed p-3 shadow">
        <div class="container-fluid mx-5">
            <a class="navbar-brand fs-4 fw-bold" href="#">VibeFour</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#">Tentang</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link" href="#">Produk</a>
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
                            style="background-color: #72B5F6; color: #FFF; border-radius: 20px; width: 100px;">Masuk</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('konten')

    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script>
        window.addEventListener('scroll', function() {
            let navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>
