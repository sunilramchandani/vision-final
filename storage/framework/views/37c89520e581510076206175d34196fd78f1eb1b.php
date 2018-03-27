 <?php $__env->startSection('content-header'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<section class="content-header">
    <h1 class="page-header">
        Category
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
            
            <form action="<?php echo e(route('category.store')); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="text" name="category_name" id="category_name" required placeholder="Category Name . . .">
            <button type="submit">+</button>        
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-5">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $category_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <form action="<?php echo e(route('category.edit', $category->id)); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    
                    <tr>
                        <td><input type="text" id="category_name" name="category_name" value ="<?php echo e($category->category_name); ?>"></td>
                        <td>
                            <button class="btn btn-warning" type="submit">
                            Edit
                            </button>
                        </td>
                    </tr>
                    
                </form>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div class="col-xs-12 text-center">
            <?php echo e($category_table->links()); ?>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 250
        });
    });


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>