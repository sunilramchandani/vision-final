<?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1 class="page-header">
        <div class="row">
            <div class="col-xs-10">
                FAQ
            </div>
            <div class="col-xs-2">
            <a href="<?php echo e(route('faq.trash')); ?>"><button class="btn"><i class="fa fa-trash" style="color:black;"> &nbsp; View Trash</i></button></a>
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
   <a href="<?php echo e(route('faq.adminIndex')); ?>"> <?php echo e(Session::get('ok')); ?></a>
</div>
<?php endif; ?>

    <section class="content page-news">
        <div class="row">
            <div class="col-xs-12">

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th colspan="2">Action</th>
                        </tr> 
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $faq_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($faq->faq_type); ?></td>
                                <td><?php echo e(strip_tags($faq->question)); ?></td>
                                <td><?php echo e(strip_tags($faq->answer)); ?></td>
                                <td>
                                    <a
                                        href="<?php echo e(route('faq.adminEdit', $faq->faq_id)); ?>"
                                        class="btn btn-info">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    
                                    
                                    <a
                                        href="<?php echo e(route('faq.adminDelete', $faq->faq_id)); ?>"
                                        class="btn btn-danger">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12 text-center">
                <?php echo e($faq_table->links()); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>