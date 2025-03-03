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
            /* padding-top: 10px !important; */
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

        ul {
            /* margin-left: 25px !important; */
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
                        <span class="w-75 forum mb-2">Masukkan kata sandi baru anda dengan ketentuan :</span>
                        <ul class="mb-4 forum" style="margin-left: -30px">
                            <li>Minimal terdiri dani 8 karakter</li>
                            <li>Mengandung minimal 1 huruf kecil</li>
                            <li>Mengandung minimal 1 digit angka</li>
                        </ul>
                        <form id="buatPasswordForm" method="POST"
                            class="w-100 d-flex justify-content-center align-items-center flex-column">
                            @csrf
                            {{-- <input type="hidden" name="type" value="pwBaru"> --}}
                            <div class="mb-4 forum w-75">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password" name="password">
                                    <button class="btn btn-outline-secondary toggle-password" type="button"
                                        data-target="password">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </div>
                                <div class="invalid-feedback" id="passwordError"></div>
                            </div>
                            <div class="mb-4 forum w-75">
                                <div class="input-group">
                                    <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password">
                                    <button class="btn btn-outline-secondary toggle-password" type="button"
                                        data-target="confirm_password">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </div>
                                <div class="invalid-feedback" id="confirmPasswordError"></div>
                            </div>
                            <button class="btn forum" type="submit"
                                style="text-decoration: none; color: #fff; background-color: #72B5F6; font-weight: 500; border-radius: 20px; height: 40px; width: 75%">
                                Buat Kata Sandi
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Toggle password visibility
            $('.toggle-password').on('click', function() {
                const targetId = $(this).data('target');
                const passwordInput = $('#' + targetId);

                if (passwordInput.attr('type') === 'password') {
                    passwordInput.attr('type', 'text');
                    $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
                } else {
                    passwordInput.attr('type', 'password');
                    $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
                }
            });

            // Function to validate password
            function validatePassword() {
                const password = $('#password').val();
                let isValid = true;

                // Reset previous error
                $('#password').removeClass('is-invalid');
                $('#passwordError').text('').hide();

                // Validate password
                if (!password) {
                    $('#password').addClass('is-invalid');
                    $('#passwordError').text('Kata sandi tidak boleh kosong.').show();
                    isValid = false;
                } else if (password.length < 8) {
                    $('#password').addClass('is-invalid');
                    $('#passwordError').text('Kata sandi minimal 8 karakter.').show();
                    isValid = false;
                } else if (!/[a-z]/.test(password)) {
                    $('#password').addClass('is-invalid');
                    $('#passwordError').text('Kata sandi harus mengandung huruf.').show();
                    isValid = false;
                } else if (!/[0-9]/.test(password)) {
                    $('#password').addClass('is-invalid');
                    $('#passwordError').text('Kata sandi harus mengandung angka.').show();
                    isValid = false;
                }

                return isValid;
            }

            // Function to validate password confirmation
            function validateConfirmPassword() {
                const password = $('#password').val();
                const confirmPassword = $('#confirm_password').val();
                let isValid = true;

                // Reset previous error
                $('#confirm_password').removeClass('is-invalid');
                $('#confirmPasswordError').text('').hide();

                // Validate password confirmation
                if (!confirmPassword) {
                    $('#confirm_password').addClass('is-invalid');
                    $('#confirmPasswordError').text('Konfirmasi kata sandi tidak boleh kosong.').show();
                    isValid = false;
                } else if (password !== confirmPassword) {
                    $('#confirm_password').addClass('is-invalid');
                    $('#confirmPasswordError').text('Konfirmasi kata sandi tidak cocok.').show();
                    isValid = false;
                }

                return isValid;
            }

            // Validate password on input and blur
            $('#password').on('input blur', function() {
                validatePassword();
                // If confirm password has a value, validate it again
                if ($('#confirm_password').val()) {
                    validateConfirmPassword();
                }
            });

            // Validate confirm password on input and blur
            $('#confirm_password').on('input blur', function() {
                validateConfirmPassword();
            });

            // Handle form submission with Ajax
            $('#buatPasswordForm').on('submit', function(e) {
                e.preventDefault();

                // Perform final validation
                const isPasswordValid = validatePassword();
                const isConfirmPasswordValid = validateConfirmPassword();

                // If all fields are valid, proceed with Ajax submission
                if (isPasswordValid && isConfirmPasswordValid) {
                    $.ajax({
                        url: $(this).attr('action'),
                        type: 'POST',
                        data: $(this).serialize(),
                        dataType: 'json',
                        success: function(response) {
                            // Handle successful response
                            if (response.success) {
                                // If a redirect URL is provided
                                if (response.redirect) {
                                    window.location.href = response.redirect;
                                } else {
                                    alert(response.message || 'Kata sandi berhasil dibuat!');
                                }
                            }
                        },
                        error: function(xhr) {
                            // Handle server errors (if any)
                            // if (xhr.status === 500) {
                            //     alert(
                            //         'Terjadi kesalahan pada server. Silakan coba lagi nanti.'
                            //     );
                            // } else {
                            //     alert('Terjadi kesalahan. Silakan coba lagi.');
                            // }
                        }
                    });
                }
            });

            // Make sure error elements are properly styled
            $('#passwordError, #confirmPasswordError').css({
                'display': 'none',
                'width': '100%',
                'margin-top': '0.25rem',
                'font-size': '0.875em',
                'color': '#dc3545'
            });
        });
    </script>
@endsection
