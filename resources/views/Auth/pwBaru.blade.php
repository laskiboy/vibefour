@extends('layout.headerAsli')
<style>
    .otp-input {
        width: 50px;
        height: 50px;
        text-align: center;
        font-size: 24px;
        border: 2px solid #ced4da;
        border-radius: 5px;
        margin: 0 5px;
    }

    .otp-container {
        display: flex;
        justify-content: center;
    }

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

        .kartu {
            padding-top: 10px !important;
        }

        #masuk-card .right {
            width: 100% !important;
        }

        #daftar-card .left {
            width: 100% !important;
        }

        .otp-input {
            width: 35px;
            height: 35px;
            text-align: center;
            font-size: 24px;
            border: 2px solid #ced4da;
            border-radius: 5px;
            margin: 0 5px;
        }

        .otp-container {
            display: flex;
            justify-content: center;
        }

        ul {
            margin-left: 25px !important;
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
                        <h2 class="mb-5" style="font-weight: 600; color: #72B5F6">Perbarui Kata Sandi</h2>
                        <span class="w-75 mb-2">Masukkan kata sandi baru anda dengan ketentuan :</span>
                        <ul class="mb-4" style="margin-left: -30px">
                            <li>Minimal terdiri dani 8 karakter</li>
                            {{-- <li>Mengandung minimal 1 huruf kapital</li>
                            <li>Mengandung minimal 1 huruf kecil</li> --}}
                            <li>Mengandung minimal 1 digit angka</li>
                        </ul>
                        <div class="mb-4 w-75">
                            <input type="password" class="ps-3 form-control" placeholder="Masukkan Password">
                        </div>
                        <div class="mb-4 w-75">
                            <input type="password" class="ps-3 form-control" placeholder="Konfirmasi Password">
                        </div>
                        <a class="btn mb-4 w-75"
                            style="text-decoration: none; color: #fff; background-color: #8854BB; color: #FFF; font-weight: 500; border-radius: 20px; height: 40px"
                            href="{{ route('login') }}">
                            Perbarui Kata Sandi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
