<style>
    @media (max-width: 768px) {
        .mai .main {
            width: 90% !important;
            padding: 10px !important;
            margin: 0 !important;
        }
    }
</style>
<?php $__env->startSection('konten'); ?>
    <div class="d-flex mai justify-content-center mb-5">
        <div class="ms-5 main w-50" style="margin-top: 100px; font-size: 14px">
            <nav aria-label="breadcrumb" class="mb-5">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"><?php echo app('translator')->get('header.beranda'); ?></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo e(url('berita')); ?>"><?php echo app('translator')->get('footer.berita'); ?></a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo e($berita->judul); ?></li>
                </ol>
            </nav>
            <div class="d-flex flex-column">
                <span class="fs-1 mb-4 " style="font-weight: 500"><?php echo e($berita->judul); ?></span>
                <span class="fs-5 mb-5" style="color: #ABABAB">
                    <?php echo e(\Carbon\Carbon::parse($berita->created_at)->translatedFormat('d F Y')); ?>

                </span>

                <img class="shadow" src="<?php echo e(asset('storage/images/' . $berita->gambar)); ?>"
                    style="border-radius: 20px; width: 100%; height: 25rem; object-fit: cover; margin-bottom: 50px"
                    alt="">
                <?php echo $berita->isi_berita; ?>

            </div>
        </div>
    </div>
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.headerAsli', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VibeFourWebsite\resources\views/berita/detailBerita.blade.php ENDPATH**/ ?>