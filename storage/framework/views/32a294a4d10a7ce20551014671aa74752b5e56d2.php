 <?php $__env->startSection('content-header'); ?>
<section class="content-header">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="page-header">
                Rate
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
                            <label for="rate_title">
                                Program
                            </label>
                            <input type="text" class="form-control" id="program" name="program" readonly 
                            value="<?php echo e(isset($rate->program) ? $rate->program:""); ?>" placeholder="Title...">
                        </div>
                    </div>
             

         
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="country">
                                Country
                            </label>
                            <select class="form-control" name="country" id="country" readonly>
                            <option value="<?php echo e(isset($rate->country) ? $rate->country:"Select Country"); ?>" selected><?php echo e(isset($rate->country) ? $rate->country:"Select Country"); ?></option>
                                <option value="United States">United States</option>
                                <option value="Australia">Australia</option>
                            </select>

                        </div>
                    </div>






                </div>



                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="company_website">
                                <?php if($rate->program == "Skilled"): ?>
                                    Partner or Spouse
                                <?php else: ?>
                                    Reservation
                                <?php endif; ?>   
                            </label>
                            <input type="number" min="0" class="form-control" id="reservation" name="reservation" value="<?php echo e(isset($rate) ? $rate->reservation : ''); ?>" placeholder="reservation">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="rate_website">
                                Duration
                            </label>
                            <input type="number" min="0" class="form-control" id="duration" name="duration" value="<?php echo e(isset($rate) ? $rate->duration : ''); ?>" placeholder="duration">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="company_website">
                                First
                            </label>
                            <input type="number" min="0" class="form-control" id="first" name="first" value="<?php echo e(isset($rate) ? $rate->first : ''); ?>" placeholder="first">
                        </div>
                        
                    </div>

                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="company_website">
                                Second
                            </label>
                            <input type="number" min="0" class="form-control" id="second" name="second" value="<?php echo e(isset($rate) ? $rate->second : ''); ?>" placeholder="second">
                        </div>
                        
                    </div>

                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="company_website">
                                <?php if($rate->program == "Skilled"): ?>
                                    Partner/Spouse + 1 Child
                                <?php else: ?>
                                    Third
                                <?php endif; ?>

                                
                            </label>
                            <input type="number" min="0" class="form-control" id="third" name="third" value="<?php echo e(isset($rate) ? $rate->third : ''); ?>" placeholder="third">
                        </div> 
                    </div>

                    <?php if($rate->country == "Australia"): ?>
                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="company_website">
                                <?php if($rate->program == "Skilled"): ?>
                                    Each additional child
                                <?php else: ?>
                                    Visa
                                <?php endif; ?>
                            </label>
                            <input type="number" min="0" class="form-control" id="visa" name="visa" value="<?php echo e(isset($rate) ? $rate->visa : ''); ?>" placeholder="visa">
                        </div>
                        
                    </div>
                    <?php else: ?>
                    <?php endif; ?>

                    <div class="col-xs-3">
                        <div class="form-group">
                            <label for="company_website">
                                Total
                            </label>
                            <input type="number" min="0" class="form-control" id="total" name="total" value="<?php echo e(isset($rate) ? $rate->total : ''); ?>" placeholder="total" disabled>
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