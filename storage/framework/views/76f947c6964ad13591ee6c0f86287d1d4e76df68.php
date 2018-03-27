 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                Blogs
            </h1>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content-main'); ?>
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

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <form action="<?php echo e(route('blog.update', $blog->id)); ?>" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <?php echo e(method_field('PATCH')); ?>




                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="title">
                                Blog Title
                            </label>
                            <input type="text" class="form-control" id="title" name="title" required value="<?php echo e($blog->title); ?> "
                                placeholder="Title...">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="author">
                                Author
                            </label>
                            <select class = "form-control" name="author_id" id="">
                                <?php $__currentLoopData = $author_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($author->author_id); ?>"><?php echo e($author->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                        </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label for="body">
                            Body
                        </label>
                        <textarea name="body" id="body" rows="20" required class="summernote" value="">
                        <?php echo e($blog->body); ?>

                        </textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <label for="body">
                            category
                        </label>
                        <select id="category" name="category_bulk[]" multiple="multiple" class="form-control">
                        <?php $__currentLoopData = $category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->category_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </select>
                    </select>
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
<?php $__env->stopSection(); ?> <?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 250
        });
    });
</script>
<script>
$(function() {  
 $('#category').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            filterPlaceholder: 'Search for something...',
            buttonWidth: '400px',
        }); 
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>