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

        .form-container {
            width: 90% !important;
            display: flex !important;
            align-items: center !important;
        }

        .right .forum,
        .left .forum {
            width: 80% !important;
        }

        .daftar {
            /* padding-top: 10px !important; */
        }

        ul {
            margin-left: -25px !important;
        }

        .left .btn {
            margin-bottom: 0 !important
        }
    }
</style>
@section('konten')
    <div class="container w-100 vh-100 d-flex justify-content-center align-items-center">
        <div class="form-container position-relative" style="width: 75%; height: 70%; margin-top: 70px;">
            <div class="daftar card shadow-sm d-flex flex-row overflow-hidden w-100 h-100" style="border-radius: 20px;">
                <div class="left w-50 h-100 d-flex flex-column justify-content-center align-items-center">
                    <h2 class="mb-5" style="font-weight: 600; color: #72B5F6">Buat Kata Sandi</h2>
                    <span class="w-75 forum mb-2">Masukkan kata sandi baru anda dengan ketentuan :</span>
                    <ul class="mb-4 forum" style="margin-left: -75px">
                        <li>Minimal terdiri dari 8 karakter</li>
                        <li>Mengandung minimal 1 huruf kecil</li>
                        <li>Mengandung minimal 1 digit angka</li>
                    </ul>
                    <form id="buatPasswordForm" method="POST"
                        class="w-100 d-flex justify-content-center align-items-center flex-column">
                        @csrf
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
                                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
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
        $(document).ready(function() {
            // Toggle Show/Hide Password
            $(".toggle-password").click(function() {
                let target = $(this).data("target");
                let input = $("#" + target);
                let icon = $(this).find("i");

                if (input.attr("type") === "password") {
                    input.attr("type", "text");
                    icon.removeClass("fa-eye").addClass("fa-eye-slash");
                } else {
                    input.attr("type", "password");
                    icon.removeClass("fa-eye-slash").addClass("fa-eye");
                }
            });

            // Ajax Validasi Password
            $("#buatPasswordForm").submit(function(e) {
                e.preventDefault(); // Mencegah submit normal

                let formData = $(this).serialize(); // Mengambil data form

                $.ajax({
                    url: "{{ route('pw.register.proses') }}", // Sesuaikan dengan route
                    type: "POST",
                    data: formData,
                    dataType: "json", // Tambahkan ini untuk memastikan respons diparse sebagai JSON
                    success: function(response) {
                        // Jika sukses, cek jika ada URL redirect
                        if (response.success) {
                            // Tampilkan pesan sukses jika ada
                            if (response.message) {
                                $("#successMessage").removeClass("d-none").text(response
                                    .message);
                                $("#errorMessage").addClass("d-none");
                            }

                            // Redirect ke halaman tujuan setelah login
                            window.location.href = response.redirect || "{{ route('oi') }}";
                        }
                    },
                    error: function(xhr) {
                        // Hapus pesan error sebelumnya
                        $(".invalid-feedback").text("");
                        $(".form-control").removeClass("is-invalid");

                        // Coba parse response sebagai JSON
                        try {
                            let response = JSON.parse(xhr.responseText);

                            if (response.errors) {
                                // Handle validation errors
                                if (response.errors.password) {
                                    $("#password").addClass("is-invalid");
                                    $("#passwordError").text(response.errors.password[0]);
                                }
                                if (response.errors.confirm_password) {
                                    $("#confirm_password").addClass("is-invalid");
                                    $("#confirmPasswordError").text(response.errors
                                        .confirm_password[0]);
                                }
                            } else if (response.error) {
                                $("#errorMessage").removeClass("d-none").text(response.error);
                            }
                        } catch (e) {
                            // Fallback ke handling HTML lama
                            let responseHTML = xhr.responseText;

                            if (responseHTML.includes("error")) {
                                $("#errorMessage").removeClass("d-none").text(
                                    "Email Anda tidak ditemukan.");
                            } else {
                                // Cek jika ada validasi Laravel
                                if (responseHTML.includes("The password field is required")) {
                                    $("#password").addClass("is-invalid");
                                    $("#passwordError").text("Password wajib diisi.");
                                }
                                // ... kode validasi lainnya tetap sama
                            }
                        }
                    }
                });
            });
        });
    </script>
@endsection
