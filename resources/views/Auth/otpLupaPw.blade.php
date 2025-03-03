@extends('layout.headerAsli')
@section('konten')
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

            .form-container {
                width: 90% !important;
            }

            .right .forum,
            .left .forum {
                width: 80% !important;
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
        }
    </style>
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
                        <h2 class="mb-5" style="font-weight: 600; color: #72B5F6">Verifikasi OTP</h2>
                        <p class="w-75 forum mb-4 text-center">Masukkan kode Verifikasi anda yang telah dikirim ke alamat
                            email
                            anda sebelumnya.</p>
                        @if (session('error'))
                            <p style="color: red" class="w-75 mb-4 forum text-center">
                                {{ session('error') }}
                            </p>
                        @endif
                        <form id="otpForm" action="{{ route('verify.otp') }}" method="POST"
                            class="w-100 d-flex justify-content-center align-items-center flex-column">
                            @csrf
                            {{-- <input type="hidden" name="type" value="pwBaru"> --}}
                            <div class="mb-4 forum w-75 otp-container">
                                @for ($i = 0; $i < 6; $i++)
                                    <input type="text" name="otp[]" class="otp-input" maxlength="1"
                                        oninput="moveNext(this, {{ $i + 1 }})" onkeydown="movePrev(event, this)">
                                @endfor
                            </div>
                            <input type="hidden" name="otp_full" id="otpFull">
                            {{-- </div> --}}
                            <button class="btn forum mb-4 w-75"
                                style="text-decoration: none; color: #fff; background-color: #72B5F6; color: #FFF; font-weight: 500; border-radius: 20px; height: 40px">
                                Verifikasi OTP
                            </button>
                        </form>
                        <div class="daftar otp text-center w-75">
                            @php
                                $lastOtpSentTime = session('last_otp_sent_time');
                                $remainingTime = $lastOtpSentTime
                                    ? max(60 - now()->diffInSeconds($lastOtpSentTime), 0)
                                    : 0;
                            @endphp

                            @if ($remainingTime > 0)
                                <p style="color: gray;">Silakan coba lagi dalam <span
                                        id="cooldown">{{ $remainingTime }}</span>
                                    detik.</p>
                                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                <script>
                                    $(document).ready(function() {
                                        let cooldownTime = parseInt($("#cooldown").text());
                                        let cooldownElement = $("#cooldown");

                                        let interval = setInterval(() => {
                                            if (cooldownTime > 0) {
                                                cooldownElement.text(cooldownTime);
                                                cooldownTime--;
                                            } else {
                                                clearInterval(interval);
                                                location.reload();
                                            }
                                        }, 1000);
                                    });
                                </script>
                            @else
                                <a style="text-decoration: none; color: #000" href="{{ route('resend.otp.baru') }}"
                                    id="resendOtp">Kirim Ulang Kode</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('otpForm').addEventListener('submit', function(event) {
            event.keventDefault(); // Cegah submit langsung

            let otpInputs = document.querySelectorAll('.otp-input');
            let fullOtp = "";

            otpInputs.forEach(input => fullOtp += input.value);
            document.getElementById('otpFull').value = fullOtp; // Simpan hasil gabungan

            this.submit(); // Submit form manual setelah data diperbaiki
        });

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
    </script>
@endsection
