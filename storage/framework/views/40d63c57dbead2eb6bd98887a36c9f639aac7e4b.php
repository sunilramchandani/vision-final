<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <h1 class="page-header">
            News
        </h1>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content-main'); ?>
    <section class="content page-news">
        <div class="row">
            <div class="col-xs-12">
            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?> <?php if(Session::has('ok')): ?>
            <div class="alert alert-info">
                <?php echo e(Session::get('ok')); ?>

            </div>
            <?php endif; ?>


                <?php $__currentLoopData = $featuredimage_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featuredimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Page Name</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <td><?php echo e($featuredimage->page_name); ?></td>
                    <td><?php echo e($featuredimage->image); ?></td>
                    <td><?php echo e($featuredimage->description); ?></td>
                    <td><a href="<?php echo e(route('featuredimage.edit', $featuredimage->id)); ?>" class="btn btn-warning">
                        Hello
                    </a></td>
                </table>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>