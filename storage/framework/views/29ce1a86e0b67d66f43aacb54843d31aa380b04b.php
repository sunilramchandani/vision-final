<?php $__env->startSection('content-header'); ?>
    <section class="content-header">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="page-header">
                    Opportunity
                </h1>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content-main'); ?>
    <section class="content page-opportunities">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <?php echo e($app->upload_resume); ?>

                </h2>
            </div>  
        </div>

            <div class="col-xs-12">
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <span class="label">Program: </span>
                        <?php echo e($app->program_name); ?>

                    </div>

                    <div class="col-xs-12 col-md-4">
                        <span class="label">Country: </span>
                        <?php echo e($app->country_name); ?>

                    </div>

                    <div class="col-xs-12 col-md-4">
                        <span class="label">Location:</span>
                        <?php echo e($app->location_name); ?>

                    </div>  
                </div>

                <div class="row">
                    
                    <div class="col-xs-12 col-md-4">
                        <span class="label">Firstname:</span>
                        <?php echo e($app->first_name); ?> 
                    </div>


                    <div class="col-xs-12 col-md-4">
                        <span class="label">Email:</span>
                        <?php echo e($app->email); ?> 
                    </div>
                     <div class="col-xs-12 col-md-4">
                        <span class="label">Contact Number:</span>
                        <?php echo e($app->contact_no); ?>

                    </div>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <span class="label">Birthdate:</span>
                        <?php echo e($app->birthdate); ?> 
                    </div>


                    <div class="col-xs-12 col-md-4">
                        <span class="label">Gender:</span>
                        <?php echo e($app->gender); ?> 
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <span class="label">City:</span>
                        <?php echo e($app->current_city); ?> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <span class="label">University:</span>
                        <?php echo e($app->university_name); ?> 
                    </div>
                    <div class="col-xs-12 col-md-4">
                            <span class="label">Degree:</span>
                            <?php echo e($app->degree_name); ?> 
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <span class="label">Major:</span>
                        <?php echo e($app->major_name); ?> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-4">
                        <span class="label">Graduating:</span>
                        <?php echo e($app->grad_date); ?> 
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <span class="label">Preferred Start:</span>
                        <?php echo e($app->start_date); ?> 
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <span class="label">Message:</span>
                        <?php echo e($app->message); ?> 
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-4 col-xs-12">
                        <form action="<?php echo e(route('application.show', $app)); ?>">
                            <button type="submit" class = "btn btn-default"><i class="fa fa-download"></i> Download Resume</button>
                        </form>
                    </div>
                </div>
                <div class = "row">
                    <div class = "col-md-4 col-xs-12">
                        <form action="<?php echo e(route('application.pdf', $app)); ?>">
                            <button type="submit" class = "btn btn-default"><i class="fa fa-download"></i> Download Online Application </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>