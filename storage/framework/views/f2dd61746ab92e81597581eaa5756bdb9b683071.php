<?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1 class="page-header">
        <div class="row">
            <div class="col-xs-10">
                Application
            </div>
            <div class="col-xs-2">
            <a href="<?php echo e(route('application.trash')); ?>"><button class="btn"><i class="fa fa-trash" style="color:black;"> &nbsp; View Trash</i></button></a>
            </div>
        </div>
    </h1>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-main'); ?>
    <section class="content page-news">
        <div class="row">
            <div class="col-xs-12">
                <?php if(session('flash')): ?>
                    <?php echo $__env->make('partials.notif', ['flash' => session('flash')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>

                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Application ID</th>
                            <th>Program ID</th>
                            <th>Country ID</th>
                            <th>Location ID</th>
                            <th>Lastname</th>
                            <th>Firstname</th>
                            <th>Email</th>
                            <th>Contact No</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $app; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_app): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($single_app->id); ?></td>
                                <td><?php echo e($single_app->program_name); ?></td>
                                <td><?php echo e($single_app->country_name); ?></td>
                                <td><?php echo e($single_app->location_name); ?></td>
                                <td><?php echo e($single_app->last_name); ?></td>
                                <td><?php echo e($single_app->first_name); ?></td>
                                <td><?php echo e($single_app->email); ?></td>
                                <td>
                                    <a
                                        href="<?php echo e(route('application.view', $single_app->id)); ?>"
                                        class="btn btn-info">
                                        View
                                    </a>
                                    <a
                                        href="<?php echo e(route('application.delete', $single_app->id)); ?>"
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
                <?php echo e($paginator->links()); ?>

            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>