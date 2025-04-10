<style>
    @media (max-width: 768px) {
        body .main {
            width: 90% !important;
            padding: 10px !important;
        }

        .main p {
            margin-bottom: 20px !important;
        }

        .accordion {
            margin-bottom: 50px !important;
        }
    }
</style>
<?php $__env->startSection('konten'); ?>
    <div class="container main w-75 p-5 mb-5">
        <p class="fs-2 fw-bold d-flex justify-content-center" style="color: #72B5F6; margin-top: 100px; margin-bottom: 80px">
            <?php echo e(__('faq.judul')); ?></p>
        <div class="accordion accordion-flush" id="accordionPanelsStayOpenExample">
            <?php $__currentLoopData = $faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapse<?php echo e($faq->id); ?>" aria-expanded="false"
                            aria-controls="collapse<?php echo e($faq->id); ?>">
                            <strong><?php echo e($faq->pertanyaan); ?></strong>
                        </button>
                    </h2>
                    <div id="collapse<?php echo e($faq->id); ?>" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <?php echo $faq->jawaban; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>
    
    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.headerAsli', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\VibeFourWebsite\resources\views/faq.blade.php ENDPATH**/ ?>