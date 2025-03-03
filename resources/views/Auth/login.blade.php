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

        .right .botom,
        .left .botom {
            text-align: left !important;
        }

        .right .forum .lupa {
            float: right;
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
                        <div id="message"></div>
                        <form id="loginForm" class="w-100 d-flex justify-content-center align-items-center flex-column">
                            <div class="mb-4 forum w-75">
                                <input type="text" class="ps-3 form-control" name="usernameAndEmail"
                                    placeholder="Masukkan email atau username">
                            </div>
                            <div class="mb-4 forum w-75">
                                <input type="password" name="password" class="ps-3 form-control"
                                    placeholder="Masukkan Password">
                            </div>
                            <div class="w-75 forum mb-4">
                                <a class="ms-1 lupa" style="text-decoration: none; color: #000"
                                    href="{{ route('lupa-password') }}">Lupa Password?</a>
                            </div>
                            <button type="submit" class="btn forum mb-4 w-75"
                                style="background-color: #72B5F6; color: #FFF; font-weight: 500; border-radius: 20px; height: 40px">
                                Masuk</button>
                        </form>
                        <div class="daftar botom forum text-end w-75">
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
                    <form id="registerForm" action="{{ route('register.process') }}" method="POST"
                        class="w-100 d-flex justify-content-center align-items-center flex-column">
                        @csrf
                        <div class="mb-4 forum w-75">
                            <input name="username" type="text" class="ps-3 form-control" placeholder="Masukkan Username">
                            <div class="invalid-feedback d-block" id="usernameError" style="display: none;"></div>
                        </div>

                        <div class="mb-4 forum w-75">
                            <input name="nama" type="text" class="ps-3 form-control" placeholder="Masukkan Nama">
                        </div>

                        <div class="mb-4 forum w-75">
                            <input name="email" type="email" class="ps-3 form-control" placeholder="Masukkan Email">
                            <div class="invalid-feedback d-block" id="emailError" style="display: none;"></div>
                        </div>

                        <button type="submit" id="daftar" class="btn mb-4 forum w-75"
                            style="background-color: #72B5F6; color: #FFF; font-weight: 500; border-radius: 20px; height: 40px">
                            Daftar
                        </button>
                    </form>

                    <div class="masuk botom forum text-end w-75">
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

        $('#loginForm').submit(function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ url('/login') }}",
                type: "POST",
                data: $(this).serialize(),
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log("Success response:", response); // Debug respons
                    if (response.trim() === 'success') { // Trim untuk menghilangkan spasi/enter
                        window.location.href = "/oi"; // Redirect jika sukses
                    } else {
                        $('#message').html('<p class="text-danger">Username atau password salah.</p>');
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Error response:", xhr.responseText); // Debug jika ada error
                    $('#message').html('<p class="text-danger">Isi semua kolom terlebih dahulu</p>');
                }
            });
        });

        $(document).ready(function() {
            // Menyembunyikan pesan error saat inisialisasi
            $('#usernameError, #emailError').hide();

            // Handler untuk submit form registrasi
            $('#registerForm').submit(function(e) {
                e.preventDefault();

                // Ambil data form
                const username = $('input[name="username"]').val();
                const email = $('input[name="email"]').val();
                const nama = $('input[name="nama"]').val();
                const token = $('input[name="_token"]').val();

                // Reset validasi
                $('input[name="username"], input[name="email"]').removeClass('is-invalid');
                $('#usernameError, #emailError').hide();

                // Validasi dasar form
                let isValid = true;

                if (!username) {
                    $('input[name="username"]').addClass('is-invalid');
                    $('#usernameError').html('<p class="text-danger mb-0">Username tidak boleh kosong</p>')
                        .show();
                    isValid = false;
                }

                if (!email) {
                    $('input[name="email"]').addClass('is-invalid');
                    $('#emailError').html('<p class="text-danger mb-0">Email tidak boleh kosong</p>')
                        .show();
                    isValid = false;
                }

                if (!nama) {
                    $('input[name="nama"]').addClass('is-invalid');
                    isValid = false;
                }

                if (!isValid) {
                    return false;
                }

                // Periksa username dan email sebelum submit
                $.when(
                    // Cek username
                    $.ajax({
                        url: "/check-username",
                        type: "POST",
                        data: {
                            username: username,
                            _token: token
                        }
                    }),
                    // Cek email
                    $.ajax({
                        url: "/check-email",
                        type: "POST",
                        data: {
                            email: email,
                            _token: token
                        }
                    })
                ).done(function(usernameResponse, emailResponse) {
                    // Cek hasil validasi username
                    if (usernameResponse[0].exists) {
                        $('input[name="username"]').addClass('is-invalid');
                        $('#usernameError').html(
                            '<p class="text-danger mb-0">Username sudah digunakan</p>').show();
                        isValid = false;
                    }

                    // Cek hasil validasi email
                    if (emailResponse[0].exists) {
                        $('input[name="email"]').addClass('is-invalid');
                        $('#emailError').html(
                            '<p class="text-danger mb-0">Email sudah digunakan</p>').show();
                        isValid = false;
                    }

                    // Jika semua validasi berhasil, submit form
                    if (isValid) {
                        // Submit form dengan AJAX
                        $.ajax({
                            url: $('#registerForm').attr('action'),
                            type: "POST",
                            data: $('#registerForm').serialize(),
                            success: function(response) {
                                // Redirect setelah berhasil mendaftar
                                window.location.href = response.redirect ||
                                    '/verify-otp';
                            },
                            error: function(xhr) {
                                console.error("Terjadi kesalahan saat mendaftar");
                            }
                        });
                    }
                });
            });
        });
    </script>
@endsection
