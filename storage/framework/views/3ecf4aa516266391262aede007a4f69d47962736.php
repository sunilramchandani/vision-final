 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                Opportunity
                <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
            </h1>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>   <?php $__env->startSection('content-main'); ?>
<section class="content page-opportunities">

    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                <?php echo e($company->company_name); ?>

            </h1>
        </div>
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <p><label>Description: </label>
                    <?php echo e($company->description); ?></p>
                </div>

                <div class="col-xs-12 col-md-3">
                    <p><label>Housing Type:</label>
                    <?php echo e($company->housing_type); ?></p>
                </div>
                 <div class="col-xs-12 col-md-3">
                    <p><label>Company Address:</label>
                    <?php echo e($company->full_address); ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <p><label>Housing Address:</label>
                    <?php echo e($company->housing_address); ?></p>
                </div>
                <div class="col-xs-12 col-md-3">
                    <p><label>Housing Distance:</label>
                    <?php echo e($company->housing_distance); ?></p>
                </div>
                <div class="col-xs-12 col-md-3">
                    <p><label>Stipend:</label>
                    <?php echo e($company->stipend); ?></p>
                </div>
                <div class="col-xs-12 col-md-3">
                    <p><label>State:</label>
                    <?php echo e($company->state); ?></p>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <span class="label">Image:</span>
                    <?php echo e($company->image); ?>

                    <img src="<?php echo e(URL::asset('image/uploaded_company_image')); ?>/<?php echo e($company->image); ?>" class="img img-responsive img-rounded header" alt="Company Banner">
                </div>
                <div class="col-xs-12 col-md-3">
                    <label>Qualifications:</label>
                    <?php $__currentLoopData = $company->qualifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qualification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button  class="btn btn-danger btn-block delete_single_qualification" data-id="<?php echo e($qualification->id); ?>" data-token="<?php echo e(csrf_token()); ?>">
                        Delete [<?php echo e($qualification->qualificationlist->qualification_name); ?>]</button>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                 <div class="col-xs-12 col-md-3">
                     <label>Opportunities:</label>
                    <?php $__currentLoopData = $company->opportunity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opportunity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <button  class="btn btn-danger btn-block delete_single_opportunity" data-id="<?php echo e($opportunity->id); ?>" data-token="<?php echo e(csrf_token()); ?>">
                        Delete [<?php echo e($opportunity->opportunitylist->opportunity_name); ?>]</button>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-xs-12 col-md-3">
                     <label>Note:</label>
                        <p><?php echo e($company->remark); ?></p>
                </div>
                <div class="col-xs-12 col-md-3">
                     <label>Opportunities:</label>
                    <?php $__currentLoopData = $company->opportunity; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opportunity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($opportunity->status == "Inactive"): ?>
                        <button  class="btn btn-success btn-block enable_single_opportunity" data-id="<?php echo e($opportunity->id); ?>" data-token="<?php echo e(csrf_token()); ?>">
                        Enable [<?php echo e($opportunity->opportunitylist->opportunity_name); ?>]</button>
                        <?php else: ?> 
                        <button  class="btn btn-info btn-block disable_single_opportunity" data-id="<?php echo e($opportunity->id); ?>" data-token="<?php echo e(csrf_token()); ?>">
                        Disable [<?php echo e($opportunity->opportunitylist->opportunity_name); ?>]</button>
                        <?php endif; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>


    </div>
    </br>

    </div>
    </div>
    </div>

</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
<script>
             jQuery(document).ready(function($) {

              $(".delete_single_qualification").click(function(){
                var id = $(this).data("id");
                var token = $(this).data("token");

                $.ajax(
                {
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                  url: "deleteQualification/"+id,
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
<script>
             jQuery(document).ready(function($) {

              $(".delete_single_opportunity").click(function(){
                var id = $(this).data("id");
                var token = $(this).data("token");

                $.ajax(
                {
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                  url: "deleteOpportunity/"+id,
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
<script>
             jQuery(document).ready(function($) {

              $(".enable_single_opportunity").click(function(){
                var id = $(this).data("id");
                var token = $(this).data("token");

                $.ajax(
                {
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                  url: "enableOpportunity/"+id,
                  type: 'patch',
                  dataType: 'json',
                   data: {
                    "id": id,
                    "_method": 'PATCH',
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
<script>
             jQuery(document).ready(function($) {

              $(".disable_single_opportunity").click(function(){
                var id = $(this).data("id");
                var token = $(this).data("token");

                $.ajax(
                {
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                  url: "disableOpportunity/"+id,
                  type: 'patch',
                  dataType: 'json',
                   data: {
                    "id": id,
                    "_method": 'PATCH',
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

<script>
             jQuery(document).ready(function($) {

              $(".enable_single_qualification").click(function(){
                var id = $(this).data("id");
                var token = $(this).data("token");

                $.ajax(
                {
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                  url: "enableQualification/"+id,
                  type: 'patch',
                  dataType: 'json',
                   data: {
                    "id": id,
                    "_method": 'PATCH',
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
<script>
             jQuery(document).ready(function($) {

              $(".disable_single_qualification").click(function(){
                var id = $(this).data("id");
                var token = $(this).data("token");

                $.ajax(
                {
                headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                  url: "disableQualification/"+id,
                  type: 'patch',
                  dataType: 'json',
                   data: {
                    "id": id,
                    "_method": 'PATCH',
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