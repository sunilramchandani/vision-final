 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <h1>
        Internship Company
    </h1>
</section>
<?php $__env->stopSection(); ?> <?php $__env->startSection('content-main'); ?>
<section class="content page-news">
    <div class="row">
        <div class="col-xs-12">
            <?php if($error == true): ?> <?php echo $__env->make('partials.notif', ['type' => 'danger', 'message' => 'Something went wrong.'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>; <?php endif; ?>
            <form action="<?php echo e($action); ?>" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="company_name">
                            Company Name
                        </label>
                        <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo e(isset($company) ? $company->company_name : ''); ?>" placeholder="Company Name"required >
                    </div>
                </div>
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="description">
                            Description
                        </label>
                        <input type="text" class="form-control" id="description" name="description" value="<?php echo e(isset($company) ? $company->description : ''); ?>" placeholder="Description"required>
                    </div>
                </div>
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="housing_type">
                            Housing type
                        </label>
                        <input type="text" class="form-control" id="housing_type" name="housing_type" value="<?php echo e(isset($company) ? $company->housing_type : ''); ?>" placeholder="Housing Type"required>
                    </div>
                </div>
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="housing_distance">
                            Housing Distance
                        </label>
                        <input type="text" class="form-control" id="housing_distance" name="housing_distance" value="<?php echo e(isset($company) ? $company->housing_distance : ''); ?>" placeholder="Housing Distance"required>
                    </div>
                </div>
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="housing_address">
                            Housing Address
                        </label>
                        <input type="text" class="form-control" id="housing_address" name="housing_address" value="<?php echo e(isset($company) ? $company->housing_address : ''); ?>" placeholder="Housing Address"required>
                    </div>
                </div>
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="full_address">
                            Full Address
                        </label>
                        <input type="text" class="form-control" id="full_address" name="full_address" value="<?php echo e(isset($company) ? $company->full_address : ''); ?>" placeholder="Company Address" required> 
                    </div> 
                    <a onclick="getgeo()" class = "form-control btn btn-info">Get Address</a>
                </div>
               
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="full_address">
                            Latitude
                        </label>
                        <input type="text" class="form-control" id="latitude" name="latitude" value="<?php echo e(isset($company) ? $company->latitude : ''); ?>" placeholder="latitude" required readonly>
                    </div>
                </div>

                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="full_address">
                            Longtitude
                        </label>
                        <input type="text" class="form-control" id="longtitude" name="longtitude" value="<?php echo e(isset($company) ? $company->longtitude : ''); ?>" placeholder="longtitude" required readonly>
                    </div>
                </div>


                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="stipend">
                            Stipend Minimum
                        </label>
                        <input type="number" min ="0" class="form-control" id="stipend" name="stipend" value="<?php echo e(isset($company) ? $company->stipend : ''); ?>" placeholder="Stipend Min"required>
                    </div>
                </div>
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="stipend">
                            Stipend Maximum
                        </label>
                        <input type="number" min ="0" class="form-control" id="stipend_maximum" name="stipend_maximum" value="<?php echo e(isset($company) ? $company->stipend_maximum : ''); ?>" placeholder="Stipend Max"required>
                    </div>
                </div>
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="state">
                            State
                        </label>
                        <input type="text" class="form-control" id="state" name="state" value="<?php echo e(isset($company) ? $company->state : ''); ?>" placeholder="State"required>
                    </div>
                </div>
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="note">
                            Notes
                        </label>
                        <input type = "text" class = "form-control"  name="remark" id="remark" value="<?php echo e(isset($company) ? $company->remark : ''); ?>" >
                    </div>
                </div>
                <div class = "col-md-4 col-xs-12">
                    <div class="form-group">
                        <label for="image">
                            Image
                        </label>
                        <input type = "file" class = "form-control"  name="image" id="image" value="<?php echo e(isset($company) ? $company->image : ''); ?>" >
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select id="country" name="country" class="form-control" required>   
                                <option value="United States">United States</option>
                                <option value="Australia">Australia</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="form-group">
                            <label for="featured">Featured?</label>
                            <select id="featured" name="featured" class="form-control"required >   
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="category">Qualifications</label>
                            <select id="qualification" name="qualification_bulk[]" multiple="multiple" class="form-control">
                                <?php $__currentLoopData = $qualification_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->qualification_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="category">Opportunities</label>
                            <select id="opportunity" name="opportunity_bulk[]" multiple="multiple" class="form-control">
                                <?php $__currentLoopData = $opportunity_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($cate->id); ?>"><?php echo e($cate->opportunity_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>


<script>
    $(document).ready(function () {
        $('.summernote').summernote({
            height: 250
        });
    });
</script>


<script>
    $(function () {
        $('#qualification').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            filterPlaceholder: 'Search for something...',
            buttonWidth: '100%',
        });
    });

    $(function () {
        $('#opportunity').multiselect({
            includeSelectAllOption: true,
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            filterPlaceholder: 'Search for something...',
            buttonWidth: '100%',
        });
    });
</script>
<script>
 function getgeo(){
    var addresses = document.getElementById("full_address").value;
    $.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=' + addresses +'&sensor=false', null, function (data) {
            var p = data.results[0].geometry.location;
            document.getElementById("latitude").value = p.lat;
            document.getElementById("longtitude").value = p.lng;      
        }); 
}
</script>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>