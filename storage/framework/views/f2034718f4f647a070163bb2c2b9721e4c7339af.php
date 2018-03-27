 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1 class="page-header">
        <div class="row">
            <div class="col-xs-10">
                News 
            </div>
            <div class="col-xs-2">
            <a href="<?php echo e(route('news.trash')); ?>"><button class="btn"><i class="fa fa-trash" style="color:black;"> &nbsp; View Trash</i></button></a>
            </div>
        </div>
    </h1>
</section>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content-main'); ?> <?php if(count($errors) > 0): ?>
<div class="alert alert-danger">
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php endif; ?> <?php if(Session::has('ok')): ?>
<div class="alert alert-success">
   <a href="<?php echo e(route('news.trash')); ?>"> <?php echo e(Session::get('ok')); ?></a>
</div>
<?php endif; ?>
<section class="content page-news">
    <div class="row">
        <div class="col-xs-12">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $news_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($news->title); ?></td>
                        <?php $__currentLoopData = $news->author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($newss->name); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e(Carbon\Carbon::parse($news->date)->toFormattedDateString()); ?></td>
                        <td>
                            <a href="<?php echo e(route('news.edit', $news->id)); ?>" class="btn btn-warning">
                                Edit
                            </a>

                            <a href="<?php echo e(route('mainnewsimage.view', $news->id)); ?>" class="btn btn-info">
                                Main News Image
                            </a>
                            
                            <a href="<?php echo e(route('news.destroy', $news->id)); ?>" class="btn btn-danger">
                                Delete
                            </a>

                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
        <div class="col-xs-12 text-center">
            <?php echo e($news_table->links()); ?>

        </div>
    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>