<style>
    @media (max-width: 768px) {
        body .main {
            width: 90% !important;
            padding: 10px !important;
            margin-top: 50px;
        }
    }
</style>
<?php $__env->startSection('konten'); ?>
    <div class="container main w-75 p-5">
        <p class="fs-2 fw-bold" style="color: #72B5F6; margin-top: 60px"><?php echo e(__('privacy.judul')); ?></p>
        <p class="mt-4" style="color: #ABABAB"><?php echo e(__('privacy.update')); ?></p>
        <?php echo __('privacy.value'); ?>

    </div>
    
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.headerAsli', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VibeFourWebsite\resources\views/privacy.blade.php ENDPATH**/ ?>