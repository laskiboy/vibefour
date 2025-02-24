@extends('layout.headerAsli')
<style>
    @media (max-width: 768px) {
        #masuk-card #login-img-div {
            display: none !important;
        }

        #daftar-card #register-img-div {
            display: none !important;
        }

        .form-container {
            width: 90% !important;
        }

        .right .forum,
        .left .forum {
            width: 80% !important;
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

        .daftar {
            text-align: center;
        }
    }
</style>
@section('konten')
    <div class="container w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="form-container position-relative" style="width: 75%; height: 70%; margin-top: 70px;">
            <!-- Login Card -->
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
                        <h2 class="mb-5" style="font-weight: 600; color: #72B5F6">Lupa Kata Sandi</h2>
                        <p class="w-75 forum mb-4 text-center">Masukkan email Anda yang telah terdaftar. Kami akan
                            mengirimkan
                            email untuk
                            melakukan reset kata
                            sandi.</p>
                        <div class="mb-4 forum w-75">
                            <input type="email" class="ps-3 form-control" placeholder="Masukkan Email">
                        </div>
                        <a class="btn mb-4 forum w-75"
                            style="text-decoration: none; color: #fff; background-color: #8854BB; color: #FFF; font-weight: 500; border-radius: 20px; height: 40px"
                            href="{{ route('otp-lupa-pw') }}">Lupa Kata
                            Sandi
                        </a>
                        <div class="daftar forum w-75">
                            <a style="text-decoration: none; color: #000" href="{{ route('login') }}">Kembali ke login? </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
