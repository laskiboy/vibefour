@extends('layout.headerAsli')
@section('konten')
    <div class="container w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="form-container position-relative" style="width: 75%; height: 70%; margin-top: 70px;">
            <div class="daftar card shadow-sm d-flex flex-row overflow-hidden w-100 h-100" style="border-radius: 20px;">
                <div class="left w-50 h-100 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-5" style="font-weight: 600; color: #72B5F6">Perbarui Kata Sandi</h2>
                    <span class="w-75 mb-2">Masukkan kata sandi baru anda dengan ketentuan :</span>
                    <ul class="mb-4" style="margin-left: -30px">
                        <li>Minimal terdiri dani 8 karakter</li>
                        <li>Mengandung minimal 1 huruf kapital</li>
                        <li>Mengandung minimal 1 huruf kecil</li>
                        <li>Mengandung minimal 1 huruf digit angka</li>
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
                <div id="register-img-div"
                    class="right w-50 h-100 d-flex flex-column justify-content-center align-items-center">
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
@endsection
