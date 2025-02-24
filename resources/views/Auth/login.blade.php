@extends('layout.headerAsli')
<style>
    @media (max-width: 768px) {
        #masuk-card #login-img-div {
            display: none !important;
        }

        #daftar-card #register-img-div {
            display: none !important;
        }

        .container {
            margin: 0 !important;
            padding: 0 !important;
        }

        #masuk-card .right {
            width: 100% !important;
        }

        #daftar-card .left {
            width: 100% !important;
        }
    }
</style>
@section('konten')
    <div class="container w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="form-container position-relative" style="width: 75%; height: 70%; margin-top: 70px;">
            <div class="kartu card shadow-sm w-100 h-100" style="border-radius: 20px;">
                <div id="masuk-card" class="masuk d-flex flex-row overflow-hidden w-100 h-100 position-absolute"
                    style="border-radius: 20px; z-index: 2; transition: opacity 0.5s ease-in-out, z-index 0.1s 0.5s;">
                    <div id="login-img-div"
                        class="left w-50 h-100 d-flex justify-content-center align-items-center position-relative"
                        style="transition: transform 0.8s ease-in-out;">
                        <img class="w-100 h-100"
                            style="border-radius: 20px 0 0 20px; object-fit: cover; filter: brightness(60%);"
                            src="{{ asset('img/logkin.jpg') }}" alt="">
                        <div class="kata text-white text-center" style="position: absolute;">
                            <h1 style="color: #72B5F6; font-weight: 600">VibeFour</h1>
                            <p>Solusi Voting & Penjadwalan Tanpa Ribet!</p>
                        </div>
                    </div>
                    <div class="right w-50 h-100 d-flex flex-column justify-content-center align-items-center">
                        <h2 class="mb-5" style="font-weight: 600; color: #72B5F6">Masuk</h2>
                        <div class="mb-4 w-75">
                            <input type="text" class="ps-3 form-control" placeholder="Masukkan email atau username">
                        </div>
                        <div class="mb-4 w-75">
                            <input type="password" class="ps-3 form-control" placeholder="Masukkan Password">
                        </div>
                        <div class="w-75 mb-4">
                            <a class="ms-1" style="text-decoration: none; color: #000"
                                href="{{ route('lupa-password') }}">Lupa Password?</a>
                        </div>
                        <button class="btn mb-4 w-75"
                            style="background-color: #8854BB; color: #FFF; font-weight: 500; border-radius: 20px; height: 40px">
                            Masuk</button>
                        <div class="daftar text-end w-75 mb-4">
                            <span>Belum punya akun? </span><a href="#" id="show-daftar"
                                style="text-decoration: none; color: #72B5F6">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="daftar-card"
                class="daftar card shadow-sm d-flex flex-row overflow-hidden w-100 h-100 position-absolute top-0"
                style="border-radius: 20px; opacity: 0; z-index: 1; transition: opacity 0.5s ease-in-out, z-index 0.1s 0.5s;">
                <div class="left w-50 h-100 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-5" style="font-weight: 600; color: #72B5F6">Daftar</h2>
                    <div class="mb-4 w-75">
                        <input type="text" class="ps-3 form-control" placeholder="Masukkan Username">
                    </div>
                    <div class="mb-4 w-75">
                        <input type="text" class="ps-3 form-control" placeholder="Masukkan Nama">
                    </div>
                    <div class="mb-4 w-75">
                        <input type="email" class="ps-3 form-control" placeholder="Masukkan Email">
                    </div>
                    <a class="btn mb-4 w-75"
                        style="text-decoration: none; color: #fff; background-color: #8854BB; color: #FFF; font-weight: 500; border-radius: 20px; height: 40px"
                        href="{{ route('otp-register') }}">Daftar</a>
                    <div class="masuk text-end w-75 mb-4">
                        <span>Sudah punya akun? </span><a href="#" id="show-masuk"
                            style="text-decoration: none; color: #72B5F6">Masuk</a>
                    </div>
                </div>
                <div id="register-img-div"
                    class="right w-50 h-100 d-flex flex-column justify-content-center align-items-center position-relative"
                    style="transition: transform 0.8s ease-in-out; transform: translateX(100%);">
                    <img class="w-100 h-100"
                        style="border-radius: 0 20px 20px 0; object-fit: cover; filter: brightness(60%);"
                        src="{{ asset('img/logkin.jpg') }}" alt="">
                    <div class="kata text-white text-center" style="position: absolute;">
                        <h1 style="color: #72B5F6; font-weight: 600">VibeFour</h1>
                        <p>Solusi Voting & Penjadwalan Tanpa Ribet!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const masukCard = document.getElementById('masuk-card');
            const daftarCard = document.getElementById('daftar-card');
            const loginImgDiv = document.getElementById('login-img-div');
            const registerImgDiv = document.getElementById('register-img-div');
            const showDaftarLink = document.getElementById('show-daftar');
            const showMasukLink = document.getElementById('show-masuk');

            loginImgDiv.style.transform = 'translateX(0)';

            showDaftarLink.addEventListener('click', function(e) {
                e.preventDefault();

                loginImgDiv.style.transform = 'translateX(-100%)';

                setTimeout(() => {
                    masukCard.style.opacity = '0';

                    setTimeout(() => {
                        masukCard.style.zIndex = '1';
                        daftarCard.style.zIndex = '2';

                        daftarCard.style.opacity = '1';

                        setTimeout(() => {
                            registerImgDiv.style.transform = 'translateX(0)';
                        }, 100);
                    }, 500);

                }, 400);
            });

            showMasukLink.addEventListener('click', function(e) {
                e.preventDefault();

                registerImgDiv.style.transform = 'translateX(100%)';

                setTimeout(() => {
                    daftarCard.style.opacity = '0';

                    setTimeout(() => {
                        daftarCard.style.zIndex = '1';
                        masukCard.style.zIndex = '2';

                        loginImgDiv.style.transform = 'translateX(-100%)';

                        masukCard.style.opacity = '1';

                        setTimeout(() => {
                            loginImgDiv.style.transform = 'translateX(0)';
                        }, 100);
                    }, 500);

                }, 400);
            });
        });
    </script>
@endsection
