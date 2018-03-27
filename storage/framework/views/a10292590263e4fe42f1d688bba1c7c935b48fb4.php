 <?php $__env->startSection('content-header'); ?>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<section class="content-header">
    <h1 class="page-header">
        Qualification
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
            
            <form action="<?php echo e(route('qualification.store')); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <input type="text" name="qualification_name" id="qualification_name" required placeholder="Qualification Name . . .">
            <button type="submit">+</button>        
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Qualification Name</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $qualification_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qualification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($qualification->qualification_name); ?></td>
                        <td>
                            <a href="<?php echo e(route('qualification.delete', $qualification->id)); ?>" class="btn btn-danger">
                                Delete
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

        <div class="col-xs-12 text-center">
            <?php echo e($qualification_table->links()); ?>

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