 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1 class="page-header">
        <div class="row">
            <div class="col-xs-10">
                Blog ( Trash )
            </div>
            <div class="col-xs-2">
            <a href="<?php echo e(route('blog.index')); ?>"><button class="btn"><i class="fa fa-arrow-left" style="color:black"> &nbsp; Go Back</i></button></a>
            </div>
        </div>
    </h1>
</section>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content-main'); ?>
<section class="content page-news">
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
                    <?php $__currentLoopData = $blog_trash; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($single_blog->title); ?></td>
                        <?php $__currentLoopData = $single_blog->author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e($single_blogs->name); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <td><?php echo e(Carbon\Carbon::parse($single_blog->date)->toFormattedDateString()); ?></td>
                        <td>
                            
                            <a href="<?php echo e(route('blog.restoretrash', $single_blog->id)); ?>" class="btn btn-info">
                                Restore
                            </a>

                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>