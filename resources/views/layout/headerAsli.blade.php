<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VibeFour</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .nav-link:hover {
            color: #72B5F6 !important;
        }

        .navbar .nav-link.active {
            color: #72B5F6 !important;
            font-weight: 500;
        }

        .btn-login:hover {
            background-color: #72B5F6;
            box-shadow: rgba(17, 17, 26, 0.1) 0px 4px 16px, rgba(17, 17, 26, 0.05) 0px 8px 32px;
        }

        @media (max-width: 768px) {
            body {
                /* width: 100% !important; */
            }

            .navbar {
                width: 100vh;
                max-width: 100vh;
            }

            .container-fluid {
                width: 100% !important;
                padding-left: 10px !important;
                padding-right: 10px !important;
                margin: 0 !important;
            }

            .konten {
                width: 100% !important;
                max-width: 100% !important;
            }

            .container-fluid {
                width: 100% !important;
                padding-left: 10px !important;
                padding-right: 10px !important;
                margin: 0 !important;
            }

            .konten {
                width: 100% !important;
            }

            .navbar-nav {
                text-align: left !important;
                margin-top: 20px !important;
            }

            .nav-item {
                margin-bottom: 10px !important;
            }

            .nav-link,
            .dropdown-item {
                font-size: 20px !important;
            }

            .container-fluid {
                padding: 0 !important;
                margin: 0 !important;
            }

            .btn-login {
                width: 100% !important;
                padding: 8px 15px !important;
                font-size: 20px !important;
            }

            .navbar-brand {
                font-size: 27px !important;
                padding-left: 15px !important;
                font-weight: 600 !important;
            }

            .fa-bars {
                font-size: 27px !important;
                padding-left: 15px !important;
            }

            .navbar-toggler {
                border: none !important;
                outline: none !important;
            }

            .navbar-toggler:focus {
                box-shadow: none !important;
            }

            #languageDropdown {
                margin-bottom: 20px;
            }

            #languageDropdown img {
                width: 30px !important;
                height: 30px !important;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar bg-white navbar-expand-lg position-fixed p-3 shadow-sm w-100"
        style="transition: all 0.3s ease-in-out; top: 0; left: 0; z-index: 1000;">
        <div class="container-fluid mx-5">
            <a style="color: #72B5F6;" class="text-decoration-none fs-4 fw-bold"
                href="{{ route('beranda') }}">VibeFour</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa-solid fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-3">
                        <a style="transition: color 0.3s ease-in-out;"
                            class="text-dark nav-link {{ Request::is('/') ? 'active' : '' }}"
                            href="{{ route('beranda') }}">{{ __('header.beranda') }}</a>
                    </li>
                    <li class="nav-item dropdown ms-3">
                        <a style="transition: color 0.3s ease-in-out;" class="text-dark nav-link dropdown-toggle"
                            href="#" id="produkDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ __('header.produk') }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="produkDropdown">
                            <li>
                                <a class="dropdown-item"
                                    href="{{ route('produk-voting') }}">{{ __('header.voting') }}</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('produk-penjadwalan') }}">{{ __('header.penjadwalan') }}</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item ms-3">
                        <a style="transition: color 0.3s ease-in-out;"
                            class="text-dark nav-link {{ Request::is('tentang') ? 'active' : '' }}"
                            href="{{ route('tentang') }}">{{ __('header.tentang') }}<a>
                    </li>
                    <li class="nav-item ms-3">
                        <a style="transition: color 0.3s ease-in-out;"
                            class="text-dark nav-link {{ Request::is('kontak') ? 'active' : '' }}"
                            href="{{ route('kontak') }}">{{ __('header.kontak') }}<a>
                    </li>
                    <li class="nav-item dropdown ms-3">
                        <a style="transition: color 0.3s ease-in-out;" class="text-dark nav-link dropdown-toggle"
                            href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="{{ asset(session('locale') == 'en' ? 'img/inggrisjpeg.jpeg' : 'img/indo.png') }}"
                                width="25" height="25" class="border rounded-pill" alt="">

                        </a>
                        <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('locale', ['locale' => 'id']) }}"><img
                                        src="{{ asset('img/indo.png') }}" width="25" height="25"
                                        class="shadow-sm rounded-pill" alt="">
                                    Indonesia</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('locale', ['locale' => 'en']) }}"><img
                                        src="{{ asset('img/inggrisjpeg.jpeg') }}" width="25" height="25"
                                        class="shadow-sm rounded-pill" alt="">
                                    English</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-3">
                        <a href="{{ route('login') }}">
                            <button class="btn btn-login"
                                style="transition: all 0.3s ease-in-out; background-color: #72B5F6; color: #FFF; border-radius: 20px; width: 120px;"><i
                                    class="fa-solid fa-door-open me-2"></i>{{ __('header.masuk') }}</button>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('konten')
</body>

<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
    ScrollReveal({
        reset: true,
        distance: '60px',
        duration: 1000,
        delay: 200
    });
    ScrollReveal().reveal('.span-title, .span-sub, .map, .atas', {
        delay: 100,
        origin: 'top'
    });
    ScrollReveal().reveal('.bawah', {
        delay: 100,
        origin: 'bottom'
    });
    ScrollReveal().reveal('.kanan', {
        delay: 100,
        origin: 'right'
    });
    ScrollReveal().reveal('.kiri', {
        delay: 100,
        origin: 'left'
    });
</script>
</body>

</html>
