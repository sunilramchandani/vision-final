<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <h1 class="page-header">
            Internship Company  
        </h1>   
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-main'); ?>
    <section class="content page-news">
        <div class="row">
            <div class="col-xs-12">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Duration Month</th>
                            <th>Duration Price</th>
                            <th>Start Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $duration_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($duration->duration_months); ?></td>
                                <td><?php echo e($duration->duration_price); ?></td>
                                <td><?php echo e($duration->duration_start_date); ?></td>
                                <td>
                                    <a
                                        href="<?php echo e(route('internshipcompany.new_duration', $duration->id)); ?>"
                                        class="btn btn-warning">
                                    Edit
                                </a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>


        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>