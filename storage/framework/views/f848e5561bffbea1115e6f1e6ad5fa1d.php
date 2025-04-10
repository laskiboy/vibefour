<style>
    .position-relative {
        position: relative;
    }

    .floating-label {
        position: absolute;
        left: 5px;
        top: 50%;
        transform: translateY(-50%);
        transition: all 0.3s ease-in-out;
        background: white;
        padding: 0 5px;
        color: #888;
    }

    .position-relative input:focus+.floating-label,
    .position-relative input:not(:placeholder-shown)+.floating-label {
        top: -15px;
        /* Label keluar dari input */
        font-size: 12px;
        color: #007bff;
    }

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
<?php $__env->startSection('konten'); ?>
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
                            src="<?php echo e(asset('img/logkin.jpg')); ?>" alt="">
                        <div class="kata text-white text-center" style="position: absolute;">
                            <h1 style="color: #72B5F6; font-weight: 600"><?php echo app('translator')->get('lupa.nama_brand'); ?></h1>
                            <p><?php echo app('translator')->get('lupa.slogan'); ?></p>
                        </div>
                    </div>
                    <div class="right w-50 h-100 d-flex flex-column justify-content-center align-items-center">
                        <h2 class="mb-5" style="font-weight: 600; color: #72B5F6"><?php echo app('translator')->get('lupa.judul_lupa'); ?></h2>
                        <p class="w-75 forum mb-4 text-center"><?php echo app('translator')->get('lupa.ket'); ?>.</p>
                        <form id="lupaPwForm" action="<?php echo e(route('lupa-password-proses')); ?>" method="POST"
                            class="w-100 d-flex justify-content-center align-items-center flex-column">
                            <?php echo csrf_field(); ?>
                            <div class="mb-4 forum w-75">
                                <div class="position-relative">
                                    <input id="customInput1" placeholder=" " name="email" type="email"
                                        class="ps-3 form-control">
                                    <label for="customInput1" class="floating-label"><?php echo app('translator')->get('lupa.input_email'); ?></label>
                                    <div class="invalid-feedback d-block" id="emailError" style="display: none;"></div>
                                    <?php if(session('error')): ?>
                                        <div class="text-danger"><?php echo e(session('error')); ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <button type="submit" id="daftar" class="btn mb-4 forum w-75"
                                style="text-decoration: none; color: #fff; background-color: #72B5F6; color: #FFF; font-weight: 500; border-radius: 20px; height: 40px">
                                <?php echo app('translator')->get('lupa.btn_lupa'); ?>
                            </button>
                        </form>
                        <div class="daftar forum w-75" style="text-align: center">
                            <a style="text-decoration: none; color: #000;" href="<?php echo e(route('login')); ?>"><?php echo app('translator')->get('lupa.back'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            // Menyembunyikan pesan error saat inisialisasi
            $('#emailError').hide();

            // Handler untuk submit form
            $('#lupaPwForm').submit(function(e) {
                e.preventDefault();

                // Ambil data form
                const email = $('input[name="email"]').val();

                // Reset validasi
                $('input[name="email"]').removeClass('is-invalid');
                $('#emailError').hide();

                // Validasi dasar form
                if (!email) {
                    $('input[name="email"]').addClass('is-invalid');
                    $('#emailError').html('<p class="text-danger mb-0">Email tidak boleh kosong</p>')
                        .show();
                    return;
                }

                // Submit form langsung ke kontroler
                this.submit();
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.headerAsli', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VibeFourWebsite\resources\views/auth/lupaPassword.blade.php ENDPATH**/ ?>