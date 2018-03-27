<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    Testimonial
                </h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-main'); ?>
    <section class="content page-testimonial">
        <div class="row">
            <div class="col-xs-12">
            <p class="testimony">
            <img height="200px" width="200px" src="<?php echo e(URL::asset('image/uploaded_testimony_image')); ?>/<?php echo e($testimonial->image_testimony); ?>"
                        class="img-preview" alt="Company Banner">
            </p>
                <p class="testimony">
                    "<?php echo e($testimonial->testimony); ?>"
                </p>

                <div class="testimony-author">
                    <p class="author">
                        <?php echo e(sprintf('%s %s', $testimonial->first_name, $testimonial->last_name)); ?>

                    </p>
                    <p class="organization">
                        <?php echo e($testimonial->organization); ?>

                    </p>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>