 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                Media
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
                            <label for="media_title">
                                Media Title
                            </label>
                            <input type="text" class="form-control" id="media_title" name="media_title" required 
                            value="<?php echo e(isset($media->media_title) ? $media->media_title:""); ?>" placeholder="Title...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="media_type">
                                Media Type
                            </label>
                            <select class="form-control" name="media_type" id="media_type" required>

                                <option value="" disabled selected><?php echo e(isset($media->media_type) ? $media->media_type:"Select Media Type"); ?></option>
                                <option value="Photo">Photo</option>
                                <option value="Video">Video</option>
                            </select>

                        </div>
                    </div>






                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="author">
                                Author
                            </label>
                            <select class="form-control" name="media_author" id="media_author" required>
                                <option value="
                                
                                <?php if(isset($media->media_author)): ?> 
                                    
        
                                    
                                    <?php echo e(isset($media->media_author) ? $author_id :''); ?>

                                    



                                    <?php else: ?> Select Author
                                    
                                    
                                     <?php endif; ?>
                                     
                                     " selected>
                                    <?php if(isset($media->media_author)): ?> 
                                    
                                    <?php $__currentLoopData = $media->author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                    
                                    
                                    <?php echo e(isset($media->media_author) ? $name->name :''); ?>

                                    
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                    <?php else: ?> Select Author
                                    
                                    
                                     <?php endif; ?>
                                </option>



                                <?php $__currentLoopData = $author_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value=" <?php echo e($author->author_id); ?>"><?php echo e($author->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                Media Link
                            </label>
                            <textarea class="form-control" rows=5 id="media_link" name="media_link" required placeholder="Http://??"><?php echo e(isset($media->media_link) ? $media->media_link : ''); ?></textarea>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                Media Description
                            </label>
                            <textarea class="form-control" rows=5 id="media_description" name="media_description" required placeholder="Description . . ."><?php echo e(isset($media->media_description) ? $media->media_description : ''); ?></textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                Media Album Link
                            </label>
                            <textarea class="form-control" rows=5 id="media_album_link" name="media_album_link" required placeholder="http://??"><?php echo e(isset($media->media_album_link) ? $media->media_album_link:""); ?></textarea>
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


        $('input[name="start_end"]').daterangepicker({
            locale: {
                format: 'MM/DD/YYYY'
            }
        });

        $('#start_end').change(function () {
            var start_end = $('#start_end').val();
            start_end = start_end.split('-');

            var start = start_end[0];
            var end = start_end[1];

            start = new Date(start);
            end = new Date(end);

            var timeDiff = Math.abs(start.getTime() - end.getTime());
            var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

            $('#duration').val(diffDays);

        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>