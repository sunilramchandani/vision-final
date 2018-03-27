 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1>
        <?php echo e(ucwords(request()->route()->getActionMethod())); ?> Internship Company
    </h1>
</section>
<?php $__env->stopSection(); ?>   <?php $__env->startSection('content-main'); ?>
<section class="content page-news">
    <div class="row">
        <div class="col-xs-12">
            <form action="<?php echo e(route('internshipcompany.store_qualification', $company->id)); ?>" method="post" role="form"  enctype="multipart/form-data"> 
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="form-group">
                    <label for="company_name">
                        Company Name
                    </label>
                    <input type="textarea" row="5" class="form-control" id="qualification" name="qualification" placeholder="Some Title">
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