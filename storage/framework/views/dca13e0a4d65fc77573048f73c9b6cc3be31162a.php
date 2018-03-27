 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                Counter
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
</div>
<?php endif; ?>  
            </h1>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content-main'); ?>

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <form action="<?php echo e($action); ?>" method="<?php echo e($method); ?>" enctype="multipart/form-data" role="form">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                Country
                            </label>
                            <input type="number" min="0" class="form-control" id="country" name="country" value="<?php echo e(isset($counter) ? $counter->country : ''); ?>" placeholder="333"required>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                State
                            </label>
                            <input type="number" min="0" class="form-control" id="state" name="state" value="<?php echo e(isset($counter) ? $counter->state : ''); ?>" placeholder="333"required>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                Company
                            </label>
                            <input type="number" min="0" class="form-control" id="company" name="company" value="<?php echo e(isset($counter) ? $counter->company : ''); ?>" placeholder="333"required>
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                Applicant
                            </label>
                            <input type="number" min="0" class="form-control" id="applicant" name="applicant" value="<?php echo e(isset($counter) ? $counter->applicant : ''); ?>" placeholder="333"required>
                        </div>
                    </div>
                </div>

                <div class="btn-container">
                    <a href="#" class="btn btn-danger pull-right">Cancel</a>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>