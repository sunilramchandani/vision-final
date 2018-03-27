<?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1 class="page-header">
        <div class="row">
            <div class="col-xs-10">
                Page Step
            </div>
        </div>
    </h1>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-main'); ?>
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
   <a href="<?php echo e(route('page_step.adminIndex')); ?>"> <?php echo e(Session::get('ok')); ?></a>
</div>
<?php endif; ?>

    <section class="content page-news">
        <div class="row">
            <div class="col-xs-12">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                             <th>Page Name</th>
                            <th>Step Number</th>
                            <th>Image Title</th>
                            <th>Description</th>
                            <th colspan="2">Action</th>
                        </tr> 
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $page_step_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page_step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($page_step->page_name); ?></td>
                                <td><?php echo e($page_step->step_number); ?></td>
                                <td><?php echo e($page_step->image_title); ?></td>
                                <td><?php echo e($page_step->description); ?></td>
                                <td>
                                    <a
                                        href="<?php echo e(route('page_step.adminEdit', $page_step->id)); ?>"
                                        class="btn btn-info">
                                        Edit
                                    </a>
                  
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12 text-center">
                <?php echo e($page_step_table->links()); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>