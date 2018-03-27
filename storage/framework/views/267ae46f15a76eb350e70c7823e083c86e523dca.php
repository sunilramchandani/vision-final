 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                Event
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
            <form action="<?php echo e(route('event.adminUpdate', $event->fbevent_id)); ?>" method="POST" enctype="multipart/form-data" role="form">

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 



                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="title">
                                Event Name
                            </label>
                            <input type="text" class="form-control" id="event_name" name="event_name" required value="<?php echo e($event->event_name); ?>" placeholder="Title...">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <label for="cover_source">
                            Cover Source
                        </label>
                        <input type="text" class="form-control" id="cover_source" name="cover_source" required value="<?php echo e($event->cover_source); ?>" placeholder="Title...">
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label for="event_description">
                            Event Description
                        </label>
                        <textarea id="event_description" name="event_description" rows="20" required class="summernote">
                            <?php echo e($event->event_description); ?>

                        </textarea>
                    </div>



                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="title">
                                Start Time
                            </label>
                            <input type="text" class="form-control" id="start_time" name="start_time"  value="<?php echo e($event->start_time); ?>" placeholder="Title...">
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="title">
                                End Time
                            </label>
                            <input type="text" class="form-control" id="end_time" name="end_time"  value="<?php echo e($event->end_time); ?>" placeholder="Title...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="title">
                                Place Name
                            </label>
                            <input type="text" class="form-control" id="place_name" name="place_name" required value="<?php echo e($event->place_name); ?>" placeholder="Title...">
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="title">
                                City
                            </label>
                            <input type="text" class="form-control" id="location_city" name="location_city" required value="<?php echo e($event->location_city); ?>" placeholder="Title...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="title">
                                Country
                            </label>
                            <input type="text" class="form-control" id="location_country" name="location_country" required value="<?php echo e($event->location_country); ?>" placeholder="Title...">
                        </div>
                    </div>

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="title">
                                Street
                            </label>
                            <input type="text" class="form-control" id="location_street" name="location_street" required value="<?php echo e($event->location_street); ?>" placeholder="Title...">
                        </div>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>