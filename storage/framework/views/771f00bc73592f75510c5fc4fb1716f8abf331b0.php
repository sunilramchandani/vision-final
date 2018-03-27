<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <h1 class="page-header">
            Event
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
                            <th>Event Name</th>
                            <th colspan="2">Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single_event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($single_event->event_name); ?></td>
                                
                                <td>
                                    <a
                                        href="<?php echo e(route('event.view', $single_event->fbevent_id)); ?>"
                                        class="btn btn-success">
                                        Manage Category
                                    </a>
                                </td>
                                <?php if($single_event->fbevent_id == 1): ?>
                                <td>
                                    <a
                                        href="<?php echo e(route('event.adminEdit', $single_event->fbevent_id)); ?>"
                                        class="btn btn-info">
                                        Edit
                                    </a>
                                </td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12 text-center">
               
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>