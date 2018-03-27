 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                Steps
            </h1>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content-main'); ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <form action="<?php echo e($action); ?>" method="<?php echo e($method); ?>" enctype="multipart/form-data" role="form">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">


                <div class="row">

                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="step_number">
                                Step Number
                            </label>
                            <input type="number" min="1" max="4" class="form-control" id="step_number" name="step_number" required value="<?php echo e(isset($page_step->step_number) ? $page_step->step_number:"
                                "); ?>">
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-xs-6">


                        <div class="form-group">
                            <label for="step_number">
                                Image
                            </label>
                            <input type="file" class="form-control-file" name="upload_step_image" id="upload_step_image">
                        </div>
                    </div>






                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="image_title">
                                Image Title
                            </label>
                            <input type="text"  class="form-control" id="image_title" name="image_title" value="<?php echo e(isset($page_step->image_title) ? $page_step->image_title:"
                                "); ?>" placeholder="Title...">
                        </div>
                    </div>


                </div>
                <?php if($page_step->step_number == 4): ?>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                Bulleted Description
                            </label>
                            <textarea class="summernote" rows=5 id="image_description" name="image_description" placeholder="Image Description . . ."><?php echo e(isset($page_step->image_description) ? $page_step->image_description : ''); ?></textarea>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                Description
                            </label>
                            <textarea class="summernote" rows=5 id="description" name="description" placeholder="Description . . ."><?php echo e(isset($page_step->description) ? $page_step->description : ''); ?></textarea>
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                Image Description
                            </label>
                            <textarea class="form-control" rows=5 id="image_description" name="image_description"  placeholder="Image Description . . ."><?php echo e(isset($page_step->image_description) ? $page_step->image_description : ''); ?></textarea>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                Description
                            </label>
                            <textarea class="form-control" rows=5 id="description" name="description" placeholder="Description . . ."><?php echo e(isset($page_step->description) ? $page_step->description : ''); ?></textarea>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                <?php if($page_step->page_name == "aupair"): ?>
                                    Sub Description
                                <?php else: ?>
                                    First Button
                                <?php endif; ?>
                            </label>
                            <textarea class="form-control" rows=5 id="sub_description" name="sub_description" placeholder="Sub Description . . ."><?php echo e(isset($page_step->sub_description) ? $page_step->sub_description:""); ?></textarea>
                        </div>
                    </div>

                    <?php if(isset($page_step->button_name)): ?>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="button_name">
                                Second Button
                            </label>
                            <input type="text" class="form-control" id="button_name" name="button_name" value="<?php echo e(isset($page_step->button_name) ? $page_step->button_name:"
                                "); ?>" placeholder="Submit...">
                        </div>
                    </div>
                    <?php endif; ?>


                </div>



                <div class="btn-container">
                    <a href="#" class="btn btn-danger pull-right">Cancel</a>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                </div>
            </form>
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