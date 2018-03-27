<?php $__env->startSection('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/faq.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class = "whole-page">
<?php $__currentLoopData = $featuredimage_faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->main_image); ?>" class="header">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <img src="<?php echo e(URL::asset('image/Arrow.png')); ?>" class="img img-border" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/img-line.png')); ?>" class="img img-responsive img-line" alt="Company Banner">

    <!-- FAQ header -->
    <div class="container">
        <div class="about row">
            <div class="col-xs-12 col-md-offset-4 col-md-4 text-center FAQ-font">
                <h3>Frequently Asked Questions </h3>
                <p>We understand that this is a huge step in your life. Here are the answers to some of your most pressing questions and concerns.</p>
            </div>
        </div>
    </div>

   

	
	<div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
            	<!-- VIDEO -->
        	    <div class="row">
		            <div class="video-div">
						<iframe class = "video-class"
						src="https://www.youtube.com/embed/-GOOqni12e0" frameborder="0" allowfullscreen>
						</iframe>			
					</div>
				</div>
            	<!--Internship -->
            	<div class = "us_internship" id = "US Internship">
            		<h4 class = "faq-header">US Internship</h4>
	            	<?php $__currentLoopData = $us_internship; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $us_internship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash<?php echo e($us_internship->faq_id); ?>" class = "down<?php echo e($us_internship->faq_id); ?>"> 
						                   <p><i class="fa fa-angle-right red" aria-hidden="true"></i> <?php echo $us_internship->question; ?></p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash<?php echo e($us_internship->faq_id); ?>" class="panel-collapse collapse bg-nav navbar-content">
						            <p><?php echo $us_internship->answer; ?></p>
						        </div>    
						    </div>  
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<!--Spring -->
				<div class = "spring" id = "US W&T Spring">
            		<h4 class = "faq-header">Spring Work & Travel</h4>
	            	<?php $__currentLoopData = $spring; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spring): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash<?php echo e($spring->faq_id); ?>" class = "down<?php echo e($spring->faq_id); ?>"> 
						                   <p><i class="fa fa-angle-right red" aria-hidden="true"></i> <?php echo $spring->question; ?></p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash<?php echo e($spring->faq_id); ?>" class="panel-collapse collapse bg-nav navbar-content">
						            <p><?php echo $spring->answer; ?></p>
						        </div>    
						    </div>  
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<!--Summer -->
				<div class = "summer" id = "US W&T Summer">
            		<h4 class = "faq-header">Summer Work & Travel</h4>
	            	<?php $__currentLoopData = $summer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $summer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash<?php echo e($summer->faq_id); ?>" class = "down<?php echo e($summer->faq_id); ?>"> 
						                   <p><i class="fa fa-angle-right red" aria-hidden="true"></i>  <?php echo $summer->question; ?></p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash<?php echo e($summer->faq_id); ?>" class="panel-collapse collapse bg-nav navbar-content">
						            <p><?php echo $summer->answer; ?></p>
						        </div>    
						    </div>  
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<!--aupair -->
				<div class = "aupair" id = "US AuPair">
            		<h4 class = "faq-header">Au Pair</h4>
	            	<?php $__currentLoopData = $aupair; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aupair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash<?php echo e($aupair->faq_id); ?>" class = "down<?php echo e($aupair->faq_id); ?>"> 
						                    <p><i class="fa fa-angle-right red" aria-hidden="true"></i> <?php echo $aupair->question; ?></p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash<?php echo e($aupair->faq_id); ?>" class="panel-collapse collapse bg-nav navbar-content">
						            <p><?php echo $aupair->answer; ?></p>
						        </div>    
						    </div>  
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<!--skilled-->
				<div class = "aupair" id = "AUS Skilled Work Visa">
            		<h4 class = "faq-header">Skilled Work Visa</h4>
	            	<?php $__currentLoopData = $skilled; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skilled): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash<?php echo e($skilled->faq_id); ?>" class = "down<?php echo e($skilled->faq_id); ?>"> 
						                    <p><i class="fa fa-angle-right red" aria-hidden="true"></i> <?php echo $skilled->question; ?></p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash<?php echo e($skilled->faq_id); ?>" class="panel-collapse collapse bg-nav navbar-content">
						            <p><?php echo $skilled->answer; ?></p>
						        </div>    
						    </div>  
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<!--AUS Internship -->
				<div class = "aupair" id = "AUS Internship">
            		<h4 class = "faq-header">AUS Internship</h4>
	            	<?php $__currentLoopData = $aus_internship; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aus_internship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash<?php echo e($aus_internship->faq_id); ?>" class = "down<?php echo e($aus_internship->faq_id); ?>"> 
						                    <p><i class="fa fa-angle-right red" aria-hidden="true"></i> <?php echo $aus_internship->question; ?></p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash<?php echo e($aus_internship->faq_id); ?>" class="panel-collapse collapse bg-nav navbar-content">
						            <p><?php echo $aus_internship->answer; ?></p>
						        </div>    
						    </div>  
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<!--Refund-->
				<div class = "aupair" id = "Refunds">
            		<h4 class = "faq-header">Refunds</h4>
	            	<?php $__currentLoopData = $refunds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $refunds): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="panel-group">
						    <div class="panel panel-default bg-nav">
						        <div class="panel-heading bg-nav" >
						            <h5 class="panel-title white">
						                <a  data-toggle="collapse" href="#dash<?php echo e($refunds->faq_id); ?>" class = "down<?php echo e($refunds->faq_id); ?>"> 
						                    <p><i class="fa fa-angle-right red" aria-hidden="true"></i> <?php echo $refunds->question; ?></p>
						                </a>
						            </h5>
						        </div>
						        <div id="dash<?php echo e($refunds->faq_id); ?>" class="panel-collapse collapse bg-nav navbar-content">
						            <p><?php echo $refunds->answer; ?></p>
						        </div>    
						    </div>  
						</div>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
			</div>
			<!--FILTER -->
		    <div class = "hidden-xs hidden-sm col-md-4 categories-sidebar">
		    	<div class = "col-xs-12">
		        <table class="table table-categories table-borderless table-hover">
		          <thead bgcolor="#800000">
		            <tr>
		              <th class = "header-table text-center">CATEGORIES</th>
		              <th class = "header-table text-center"></th>
		            </tr>
		          </thead>
		          <tbody>
		          	<?php $__currentLoopData = $faq_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		            <tr class='clickable-row' data-href='/faq?#<?php echo e($faq_type); ?>'>
		              <td><?php echo e($faq_type); ?></td>
		              <?php if($faq_type == "US Internship"): ?>
		              	<td><?php echo e($us_internship_count); ?></a></td>
		              <?php endif; ?>
		              <?php if($faq_type == "US W&T Summer"): ?>  	
		              	<td><?php echo e($summer_count); ?></a></td>   	
		              <?php endif; ?>
		              <?php if($faq_type == "US W&T Spring"): ?>
		              	<td><?php echo e($spring_count); ?></a></td>
		              <?php endif; ?>
		              <?php if($faq_type == "US AuPair"): ?>		             
		              	<td><?php echo e($aupair_count); ?></a></td>
		              <?php endif; ?>
		              <?php if($faq_type == "AUS Skilled Work Visa"): ?>		             
		              	<td><?php echo e($skilled_count); ?></a></td>
		              <?php endif; ?>
		              <?php if($faq_type == "AUS Internship"): ?>		             
		              	<td><?php echo e($aus_internship_count); ?></a></td>
		              <?php endif; ?>
		              <?php if($faq_type == "Refunds"): ?>		             
		              	<td><?php echo e($refunds_count); ?></a></td>
		              <?php endif; ?>
		            </tr>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		          </tbody>
		        </table>    
		    </div>
		</div>
	</div>



</div>
<div class = "row">
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
	  $('.down').click(function(){
        if ($(this).find('i').hasClass('fa-chevron-circle-right')){
            $('.down').find('i').removeClass('fa-chevron-circle-right');
    
            $('.down').find('i').addClass('fa-chevron-circle-down');
        }
        else{
            $('.down').find('i').removeClass('fa-chevron-circle-down');
    
            $('.down').find('i').addClass('fa-chevron-circle-right');
        }
});
</script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>

  jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
  });
</script>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>