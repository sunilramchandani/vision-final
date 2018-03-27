 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1 class="page-header">
        Event Category
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    </h1>
</section>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content-main'); ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <h2><?php echo e($event->event_name); ?></h2>
        </div>
    </div>
    <form action="<?php echo e(route('event.update', $event->fbevent_id)); ?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

    <br>
    <div class="row">
        <div class="col-xs-4">
            <select id="event" name="event_bulk[]" multiple="multiple" class="form-control">
                <?php $__currentLoopData = $category_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->category_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <br>
            <br>
            <button type="submit" class ="btn btn-info">Submit</button>
        </div>
    </div>

    



    </form>

<div class="row">
                <div class="col-xs-2">
                    <label for="body">
                        Delete Category
                    </label>
                    <?php $__currentLoopData = $event->eventcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                    <button class="btn btn-danger btn-block delete_single_eventcategory" data-id="<?php echo e($eventcategory->id); ?>" data-token="<?php echo e(csrf_token()); ?>">
                        Delete <?php echo e($eventcategory->categorylist->category_name); ?></button>


                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

</section>
<?php $__env->stopSection(); ?> <?php $__env->startSection('scripts'); ?>

<script>
    $(function () {
        $('#event').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            filterPlaceholder: 'Search for something...',
            buttonWidth: '100%',
        });
    });
</script>

<script>
             jQuery(document).ready(function($) {

              $(".delete_single_eventcategory").click(function(){
                var id = $(this).data("id");
                var token = $(this).data("token");

                $.ajax(
                {
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                  url: "../deleteEventCategory/"+id,
                  type: 'delete',
                  dataType: 'json',
                   data: {
                    "id": id,
                    "_method": 'DELETE',
                    "_token": token,
                  },
                  success: function (){
                    console.log("SUCCESSS!!!");
                    window.location.reload();
                  },
                  error: function(){
                    alert('error please contact administrator')
                  } 
                });
              });

            });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>