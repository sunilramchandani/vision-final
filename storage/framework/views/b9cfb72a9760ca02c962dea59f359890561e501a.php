 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1 class="page-header">
        <?php echo e($featuredimage->page_name); ?>

    </h1>
</section>
<style>
    .border-bot {
        border-bottom: 1px solid black !important;
    }
</style>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content-main'); ?>
<section class="content page-news">
    <div class="row">
        <div class="col-xs-12">
            <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?> <?php if(Session::has('ok')): ?>
            <div class="alert alert-info">
                <?php echo e(Session::get('ok')); ?>

            </div>
            <?php endif; ?>

            <tbody>
                <td>
                    <form action="<?php echo e(route('featuredimage.update', $featuredimage->id)); ?>" method="post" role="form" enctype="multipart/form-data">
                        <?php echo e(method_field('PATCH')); ?> <?php echo e(csrf_field()); ?>


                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="main_image">
                                        Header Image
                                    </label>
                                    <input type="file" class="form-control" name="main_image" id="main_image" value="<?php echo e(isset($featuredimage) ? $featuredimage->main_image : ''); ?>">
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">

                                    <img height="100px" width="200px" src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featuredimage->main_image); ?>" class="img-preview"
                                        alt="Company Banner">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="main_image_description">
                                        Header Description
                                    </label>
                                    <textarea type="longtext" class="form-control" id="main_image_description" name="main_image_description" required rows="10"><?php echo e(isset($featuredimage) ? $featuredimage->main_image_description : ''); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="border-bot"></div>
                        <Br> <?php if(isset($featuredimage->sub_image1)): ?>


                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="sub_image1">
                                        Sub Image 1
                                    </label>
                                    <input type="file" class="form-control" name="sub_image1" id="sub_image1" value="<?php echo e(isset($featuredimage) ? $featuredimage->sub_image1 : ''); ?>">
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">

                                    <img height="100px" width="200px" src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featuredimage->sub_image1); ?>" class="img-preview"
                                        alt="Company Banner">
                                </div>
                            </div>


                        </div>

                        <div class="border-bot"></div>
                        <br> <?php endif; ?> <?php if(isset($featuredimage->sub_image2)): ?>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="sub_image2">
                                        Sub Image 2
                                    </label>
                                    <input type="file" class="form-control" name="sub_image2" id="sub_image2" value="<?php echo e(isset($featuredimage) ? $featuredimage->sub_image2 : ''); ?>">
                                </div>
                            </div>

                            <div class="col-xs-6">
                                <div class="form-group">

                                    <img height="100px" width="200px" src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featuredimage->sub_image2); ?>" class="img-preview"
                                        alt="Company Banner">
                                </div>
                            </div>


                        </div>


                        <div class="border-bot"></div>
                        <br> <?php endif; ?> <?php if(isset($featuredimage->promo_id)): ?>

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="promo">
                                        Promo
                                    </label>
                                    <select class="form-control" name="promo_id" id="promo_id">
                                        <option value="" disabled selected>Select Promo</option>
                                        <?php $__currentLoopData = $promo_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $promo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($promo->id); ?>"><?php echo e($promo->title); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">


                            <div class="border-bot"></div>
                            <br> <?php endif; ?> <?php if(isset($featuredimage->testimonial_id)): ?>

                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="author">
                                      Testimonial
                                    </label>
                                    <select class="form-control" name="testimonial_id" id="testimonial_id">
                                        <option value="" disabled selected>Select Author</option>
                                        <?php $__currentLoopData = $testimonial_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($testimonial->id); ?>"><?php echo e($testimonial->first_name); ?>, <?php echo e($testimonial->last_name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <?php endif; ?> <?php if(isset($featuredimage->first_static)): ?>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="first_static">
                                       First Label
                                    </label>
                                    <textarea class="summernote" rows=5 id="first_static" name="first_static" placeholder="First Header . . ."><?php echo e(isset($featuredimage->first_static) ? $featuredimage->first_static : ''); ?></textarea>
                                </div>
                            </div>
                            <?php endif; ?> <?php if(isset($featuredimage->second_static)): ?>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="second_static">
                                       Second Label
                                    </label>
                                    <textarea class="summernote" rows=5 id="second_static" name="second_static" placeholder="Second Header . . ."><?php echo e(isset($featuredimage->second_static) ? $featuredimage->second_static : ''); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class = "row">
                        <?php endif; ?> <?php if(isset($featuredimage->third_static)): ?>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="third_static">
                                       Third Label
                                    </label>
                                    <textarea class="summernote" rows=5 id="third_static" name="third_static" placeholder="Second Header . . ."><?php echo e(isset($featuredimage->third_static) ? $featuredimage->third_static : ''); ?></textarea>
                                </div>
                            </div>
                            <?php endif; ?> <?php if(isset($featuredimage->fourth_static)): ?>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="fourth_static">
                                       Fourth Label
                                    </label>
                                    <textarea class="summernote" rows=5 id="fourth_static" name="fourth_static" placeholder="Second Header . . ."><?php echo e(isset($featuredimage->fourth_static) ? $featuredimage->fourth_static : ''); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="border-bot"></div>
                            <br> <?php endif; ?> <?php if($featuredimage->page_name == "home"): ?> <?php if(isset($featuredimage->sub_image3)): ?>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="sub_image3">
                                        Promo Image
                                    </label>
                                    <input type="file" class="form-control" name="sub_image3" id="sub_image3" value="<?php echo e(isset($featuredimage) ? $featuredimage->sub_image3 : ''); ?>">
                                </div>
                            </div>
                            <?php endif; ?> <?php if(isset($featuredimage->sub_image3_description)): ?>

                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="sub_image3_description">
                                        Promo Description
                                    </label>
                                    <input type="text" class="form-control" name="sub_image3_description" id="sub_image3_description" value="<?php echo e(isset($featuredimage) ? $featuredimage->sub_image3_description : ''); ?>">
                                </div>
                            </div>
                        </div>

                        <?php endif; ?> <?php if(isset($featuredimage->sub_image3_title)): ?>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="sub_image3_title">
                                        Promo Title
                                    </label>
                                    <input type="text" class="form-control" name="sub_image3_title" id="sub_image3_title" value="<?php echo e(isset($featuredimage) ? $featuredimage->sub_image3_title : ''); ?>">
                                </div>
                            </div>
                            <?php endif; ?> <?php if(isset($featuredimage->sub_image3_validity)): ?>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="sub_image3_validity">
                                        Promo Validity
                                    </label>
                                    <input type="text" class="form-control" name="sub_image3_validity" id="sub_image3_validity" value="<?php echo e(isset($featuredimage) ? $featuredimage->sub_image3_validity : ''); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="border-bot"></div>
                        <br> <?php endif; ?> <?php endif; ?> <?php if($featuredimage->page_name == "home"): ?> <?php if(isset($featuredimage->sub_image4)): ?>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="sub_image4">
                                        Testimony Image
                                    </label>
                                    <input type="file" class="form-control" name="sub_image4" id="sub_image4" value="<?php echo e(isset($featuredimage) ? $featuredimage->sub_image4 : ''); ?>">
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="sub_image4_description">
                                        Testimony Description
                                    </label>
                                    <input type="text" class="form-control" name="sub_image4_description" id="sub_image4_description" value="<?php echo e(isset($featuredimage) ? $featuredimage->sub_image4_description : ''); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="border-bot"></div>
                        <br> <?php endif; ?> <?php if(isset($featuredimage->sub_image4_sender_title)): ?>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="sub_image4_sender_title">
                                        Promo Title
                                    </label>
                                    <input type="text" class="form-control" name="sub_image4_sender_title" id="sub_image4_sender_title" value="<?php echo e(isset($featuredimage) ? $featuredimage->sub_image4_sender_title : ''); ?>">
                                </div>
                            </div>

                            <?php endif; ?> <?php if(isset($featuredimage->sub_image4_sender)): ?>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label for="sub_image4_sender">
                                        Promo Validity
                                    </label>
                                    <input type="text" class="form-control" name="sub_image4_sender" id="sub_image4_sender" value="<?php echo e(isset($featuredimage) ? $featuredimage->sub_image4_sender : ''); ?>">
                                </div>
                            </div>
                        </div>
                        <?php endif; ?> <?php endif; ?>
                        <div class = "row">
                            <button type="submit" class="btn btn-primary pull-right">Submit</button>
                        </div>
                    </form>
                </td>
            </tbody>
            </table>
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