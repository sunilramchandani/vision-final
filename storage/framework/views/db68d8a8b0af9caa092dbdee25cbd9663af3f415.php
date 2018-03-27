<?php $__env->startSection('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/application-form.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

<hr style="padding-bottom: 20%"></hr>
<div class = "row">
<div class ="col-md-10 col-md-offset-2"
<center><h3 style="color: blue; font-size: 100px; ">Link Not found</h3></center>
</div>
<div class ="col-md-4 col-md-offset-8">
        <a href="/" class="back">
            <h3> Return to Home</h3>
        </a>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>