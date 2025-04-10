<style>
    @media (max-width: 768px) {
        .atu {
            margin-bottom: 50px !important;
        }

        .span-title {
            margin-left: 30px !important;
            margin-top: 10px !important
        }

        body .container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 !important;
        }

        .berita {
            margin-top: 50px !important;
            width: 100% !important;
            flex-direction: column !important;
        }

        .berita .card {
            width: 90% !important;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 0 !important;
        }

        .card img {
            width: 100%;
        }

        .berita .isi {
            margin-top: 20px;
            width: 80% !important;
            margin-left: 0 !important;
        }

        .isi .span {
            width: 90% !important;
        }
    }
</style>
<?php $__env->startSection('konten'); ?>
    
    <div style="margin-bottom: 130px" class="atu">
        <div id="carouselExample" class="carousel slide" style="margin-top: 80px" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="carousel-item  <?php echo e($key == 0 ? 'active' : ''); ?>">
                        <a href="<?php echo e(route('detail-berita', $item->id)); ?>">
                            <img style="filter: brightness(90%); width: 100%; object-fit: cover;"
                                src="<?php echo e(asset('storage/images/' . $item->gambar)); ?>" height="600" class="d-block w-100"
                                alt="Slide 1">
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    

    
    <span class="fs-2 fw-bold span-title mt-5" style="color: #72B5F6; margin-left: 48px"><?php echo app('translator')->get('berita.jdudl_berita'); ?></span>
    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container m-5">
            <div class="berita d-flex justify-content-center align-items-center" style="margin-top: 120px">
                <div class="card me-5 kiri" style="width: 35%; height: 15rem; border-radius: 20px">
                    <img style="height: 15rem; object-fit: cover; border-radius: 20px"
                        src="<?php echo e(asset('storage/images/' . $items->gambar)); ?>" alt="">
                </div>
                <div class="ms-5 kanan isi d-flex flex-column w-50">
                    <a class="detail-berita text-dark mb-3" style="text-decoration: none"
                        href="<?php echo e(route('detail-berita', $items->id)); ?>">
                        <span class="fs-5 fw-bold"><?php echo e($items->judul); ?></span>
                    </a>
                    <span class="w-50 span mb-3"><?php echo Str::words($items->isi_berita, 29, '...'); ?></span><br><br>
                    <span class="mt-3" style="color: #ABABAB">
                        <?php echo e(\Carbon\Carbon::parse($items->created_at)->translatedFormat('d F Y')); ?>

                    </span>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

    
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.headerAsli', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VibeFourWebsite\resources\views/berita/berita.blade.php ENDPATH**/ ?>