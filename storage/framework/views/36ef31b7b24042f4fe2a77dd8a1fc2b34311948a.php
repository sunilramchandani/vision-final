 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1 class="page-header">
        Author
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
                        <th>Name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $author_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($author->name); ?></td>
                            <td>
                                <img height="200px" width "200px" src="<?php echo e(URL::asset('storage/upload_author_image')); ?>/<?php echo e($author->image); ?>"
                                    alt="Image Error" />
                            </td>
                        <td><?php echo e((strip_tags($author->description))); ?></td>
                        <td>


                            <a href="<?php echo e(route('author.save', $author->author_id)); ?>" class="btn btn-warning">
                                Edit
                            </a>



                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div class="col-xs-12 text-center">
            <?php echo e($author_table->links()); ?>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>