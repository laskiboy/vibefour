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
        .daftar #register-img-div {
            display: none !important;
        }

        .container {
            margin: 0 !important;
            padding: 0 !important;
        }

        .form-container {
            width: 90% !important;
        }

        .right .forum,
        .left .forum {
            width: 80% !important;
        }

        .daftar .left {
            width: 100% !important;
        }

        .otp-input {
            width: 35px !important;
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

        .left .otp {
            margin-bottom: 0 !important;
        }
    }
</style>
@section('konten')
    <div class="container w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="form-container position-relative" style="width: 75%; height: 70%; margin-top: 70px;">
            <div class="daftar card shadow-sm d-flex flex-row overflow-hidden w-100 h-100" style="border-radius: 20px;">
                <div class="left w-50 h-100 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-5" style="font-weight: 600; color: #72B5F6">Verifikasi OTP</h2>
                    <p class="w-75 mb-4 forum text-center">Masukkan kode Verifikasi anda yang telah dikirim ke alamat email
                        anda sebelumnya.</p>
                    <div class="mb-4 forum w-75 otp-container">
                        <input type="text" class="otp-input form-control" maxlength="1" oninput="moveNext(this, 1)"
                            onkeydown="movePrev(event, this)">
                        <input type="text" class="otp-input form-control" maxlength="1" oninput="moveNext(this, 2)"
                            onkeydown="movePrev(event, this)">
                        <input type="text" class="otp-input form-control" maxlength="1" oninput="moveNext(this, 3)"
                            onkeydown="movePrev(event, this)">
                        <input type="text" class="otp-input form-control" maxlength="1" oninput="moveNext(this, 4)"
                            onkeydown="movePrev(event, this)">
                        <input type="text" class="otp-input form-control" maxlength="1" oninput="moveNext(this, 5)"
                            onkeydown="movePrev(event, this)">
                        <input type="text" class="otp-input form-control" maxlength="1" oninput="moveNext(this, 6)"
                            onkeydown="movePrev(event, this)">
                    </div>
                    <a class="btn forum mb-4 w-75"
                        style="text-decoration: none; color: #fff; background-color: #8854BB; color: #FFF; font-weight: 500; border-radius: 20px; height: 40px"
                        href="{{ route('pw-baru-register') }}">
                        Verifikasi OTP
                    </a>
                    <div class="daftar otp text-center w-75">
                        <a style="text-decoration: none; color: #000" href="{{ route('login') }}">Kirim Ulang Kode</a>
                    </div>
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

    <script>
        function moveNext(input, index) {
            let nextInput = document.querySelectorAll('.otp-input')[index];
            if (input.value && nextInput) {
                nextInput.focus();
            }
        }

        function movePrev(event, input) {
            if (event.key === "Backspace" && !input.value) {
                let prevInput = input.previousElementSibling;
                if (prevInput) {
                    prevInput.focus();
                }
            }
        }

        function submitOTP() {
            let otp = "";
            document.querySelectorAll('.otp-input').forEach(input => {
                otp += input.value;
            });
            alert("Kode OTP: " + otp);
        }
    </script>
@endsection
