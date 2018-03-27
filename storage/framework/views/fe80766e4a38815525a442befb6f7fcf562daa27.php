 <?php $__env->startSection('content-header'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/image-preview.css')); ?>">
<section class="content-header">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                Blogs
            </h1>
        </div>
    </div>
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
    <?php echo e(Session::get('ok')); ?>

</div>
<?php endif; ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <form action="<?php echo e(route('author.update', $author->author_id)); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="name">
                                Author Name
                            </label>
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Name..." value="<?php echo e($author->name); ?>">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="author">
                                Author Image
                            </label>
                            <input type="file" class="form-control-file" name="upload_author_image" id="upload_author_image" value="<?php echo e($author->image); ?>">
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="author">
                                Current Image
                            </label>
                            <img src="<?php echo e(URL::asset('storage/upload_author_image')); ?>/<?php echo e($author->image); ?>" class="img-responsive img-thumbnail">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">

                        <label for="description">
                            Body
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                    <textarea name="description" id="description" rows="20" required class="summernote"><?php echo e($author->description); ?></textarea>
                    </div>
                </div>
                <div class="btn-container">
                    <div class="row">
                        <div class="col-xs-12">
                            <br>
                            <a href="<?php echo e(route('author.list')); ?>" class="btn btn-danger pull-right">Cancel</a>
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
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

    $(document).ready(function () {
        $('.summernote').summernote({
            height: 250
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>