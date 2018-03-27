 <?php $__env->startSection('content-header'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/image-preview.css')); ?>">
<section class="content-header">
    <div class="row">
    <h1 class="page-header">
        <div class="col-xs-10">
            <?php echo e($news->title); ?>

        </div>
        <div class="col-xs-2">
            
                <a href="<?php echo e(route('news.index')); ?>">
                    <button class="btn">
                        <i class="fa fa-arrow-left" style="color:black;"> &nbsp; Go Back</i>
                    </button>
                </a>
            
        </div>
        </h1>
    </div>
</section>
<?php $__env->stopSection(); ?>  <?php $__env->startSection('content-main'); ?>
<section class="content page-opportunities">
    <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?> <?php if(Session::has('ok')): ?>
    <div class="alert alert-success">
        <?php echo e(Session::get('ok')); ?>

    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">
            <h2> Image Preview </h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <?php $__currentLoopData = $main_upload; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image_preview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <a href="#" class="pop">
                <div class="img-wrap">
                    <a href="<?php echo e(route ('mainnewsimage.delete', $image_preview->id)); ?>" onclick="return ConfirmDelete();">
                        <span class="close">&times;</span>
                    </a>

                    <img height="200px" width="200px" src="<?php echo e(URL::asset('image/uploaded_main_news_image')); ?>/<?php echo e($image_preview->image_name); ?>"
                        class="img-preview" alt="Company Banner">
                </div>
            </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>




    <form action="<?php echo e(route('mainnewsimage.save', $news->id)); ?>" method="post" role="form" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <br>

        <input type="file" class="form-control-file" name="upload_news_main_image" id="upload_news_main_image">
        <Br>
        <button type="Submit">Upload</button>
    </form>






</section>

<?php $__env->stopSection(); ?> <?php $__env->startSection('scripts'); ?>
<script>
    function ConfirmDelete() {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }
</script>

<script>
$(function() {  
 $('#multiselect').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            filterPlaceholder: 'Search for something...'
        }); 
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>