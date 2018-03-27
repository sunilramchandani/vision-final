  
 <?php $__env->startSection('page-css'); ?>
    
    <link rel="stylesheet" href="/css/bootstrap-multiselect.css" type="text/css"/>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo e(asset('css/about-us.css')); ?>">
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> 
<?php $__env->startSection('content'); ?>

<div class="whole-page">
<?php $__currentLoopData = $featuredimage_aboutUs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->main_image); ?>" class="header">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(URL::asset('image/Arrow.png')); ?>" class="img  img-border" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/img-line.png')); ?>" class="img img-responsive img-line" alt="Company Banner">


    <!-- Text header on top -->
    <div class = "container header-text">
    	<div class = "text-center bigger-header">
    		<h4> We believe that... </h4>
    		<div class = "col-xs-12 col-md-6 col-md-offset-3 smaller-header">
    			<p>We are a dynamic, energetic, and driven team committed to delivering unlimited opportunities to deserving students and prefessionals.</p>
    		</div>
    	</div>
    </div>

    <!--Boxes-->
    <div class = "container box-container">
    		<!--First Box -->
		<div class = "col-xs-12 col-md-4 text-center biggest-box">
			<div class = "col-xs-12 box">
    			 <div class = "col-md-12 col-xs-4 icon-container">
    			 	<img src="<?php echo e(URL::asset('image/icons/VIP-Icons-01.png')); ?>" class="img img-responsive icon center-block" alt="Company Banner">
    			 </div>
                 <div class = "col-md-12 col-xs-8">
        			 <p class="box-title"><strong>Most Trusted Partner</strong></p>
        			 <div class = "col-md-10 col-md-offset-1 col-xs-12 boxes">
        			 	<p>We have a portfolio of prestigious companies, schools and organizations who have chosen to work with us. </p>
        			 </div>
                </div>
    		</div>
		</div>
		<!--Second Box -->
		<div class = "col-xs-12 col-md-4  text-center biggest-box">
			<div class = "col-xs-12 box">
				<div class = "col-md-12 col-xs-4 icon-container">
					<img src="<?php echo e(URL::asset('image/icons/VIP-Icons-02.png')); ?>" class="img img-responsive icon center-block" alt="Company Banner">
				</div>
                <div class = "col-md-12 col-xs-8">
    				 <p class="box-title"><strong>Highest Care and Support</strong></p>
        			 <div class = "col-md-10 col-md-offset-1 col-xs-12 boxes">
        			 	<p>Our service to each participant is world-class. We are committed to providing the support you need every step of the way </p>
        			 </div>
                </div>
			</div>
		</div>
		<!--Third Box -->
		<div class = "col-xs-12 col-md-4  text-center biggest-box">
			<div class = "col-xs-12 box">
				<div class = "col-md-12 col-xs-4 icon-container">
					<img src="<?php echo e(URL::asset('image/icons/8.png')); ?>" class="img img-responsive icon center-block" alt="Company Banner">
				 </div>
                 <div class = "col-md-12 col-xs-8">
    				 <p class="box-title"><strong>Committed and Passionate</strong></p>
        			 <div class = "col-md-10 col-md-offset-1 col-xs-12 boxes">
        			 	<p>Our team is comprised of professionals who have years of experience in their respective industries. Our collective wisdom and background ensure that you will be in good hands. </p>
        			 </div>
                </div>
			</div>
		</div>
    </div>
    <!--end of boxes -->

    <!--modal-->
    <?php $__currentLoopData = $management; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div id="myModal<?php echo e($loop->index); ?>" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
          <div class="modal-body">
            <div class = "col-xs-4">
                <img src="<?php echo e(URL::asset('image/uploaded_aboutus_image')); ?>/<?php echo e($about->about_image); ?>" class="img img-responsive employee-modal" alt="Company Banner"/>
                <h4><?php echo e($about->about_name); ?></h4>
                <p><?php echo e($about->about_position); ?></p>
                <p> <i class="fa fa-twitter-square"></i> <?php echo e($about->about_twitter); ?> | <i class="fa fa-linkedin-square" aria-hidden="true"></i> <?php echo e($about->about_linkedin); ?> </p>
          </div>
          <div class = "col-xs-8" style = "overflow-y: auto; height: 40%;">
            <?php echo $about->bio; ?>

          </div>
        </div>
        <div class="modal-footer">
      </div>
      </div>
    </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- Management -->
     <div class = "container employee-container">
        <!--MANAGEMENT -->
        <div class = "management pads">
            <div class = "col-xs-12">
                <p><strong>Management</strong></p>
            </div>
            <div class = "row">
                <div class = "col-xs-12 whole-employee">
                  <div class="carousel sc slide multi-item-carousel" id="myCarousel">
                        <div class="carousel-inner">
                            <?php $__currentLoopData = $management; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($loop->index == 1): ?>
                            <div class="item active">
                            <?php else: ?>  
                            <div class="item">
                            <?php endif; ?>
                                <div class = "col-xs-6 col-md-3 show-side"> 
                                    <a data-toggle="modal" data-target="#myModal<?php echo e($loop->index); ?>">
                                    <div class = "col-xs-12">
                                        <img src="<?php echo e(URL::asset('image/uploaded_aboutus_image')); ?>/<?php echo e($about->about_image); ?>" class="img img-responsive employee" alt="Company Banner"/>
                                        <div class = "hidden-md hidden-lg hidden-xl">
                                            <h4><?php echo e($about->about_name); ?></h4>
                                            <p class = "position-hidden"><?php echo e($about->about_position); ?></p>
                                            <p class = "position-hidden"> <i class="fa fa-twitter-square"></i> <?php echo e($about->about_twitter); ?> | <i class="fa fa-linkedin-square" aria-hidden="true"></i> <?php echo e($about->about_linkedin); ?> </p>
                                        </div>
                                        <div class = "col-md-12 hidden-xs hidden-sm hidden-side text-center">
                                            <h4><?php echo e($about->about_name); ?></h4>
                                            <p class = "position-hidden"><?php echo e($about->about_position); ?></p>
                                            <p class = "position-hidden"> <i class="fa fa-twitter-square"></i> <?php echo e($about->about_twitter); ?> | <i class="fa fa-linkedin-square" aria-hidden="true"></i> <?php echo e($about->about_linkedin); ?> </p>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php if($management->count() > 4): ?>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <!--OPERATIONS-->
        <div class = "operations pads">
            <div class = "col-xs-12">
                <p><strong>Operations</strong></p>
            </div>
            <div class = "row">
                <div class = "col-xs-12 whole-employee">

                 <?php if($operations->count() > 4): ?>
                    <div class="carousel sb slide multi-item-carousel2" id="myCarousel2">
                        <div class="carousel-inner">
                        <?php $__currentLoopData = $operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($loop->index == 1): ?>
                            <div class="item active">
                            <?php else: ?>  
                            <div class="item">
                            <?php endif; ?>
                                <div class = "col-xs-6 col-md-3 show-side"> 
                                    <div class = "col-xs-12">
                                        <img src="<?php echo e(URL::asset('image/uploaded_aboutus_image')); ?>/<?php echo e($about->about_image); ?>" class="img img-responsive employee" alt="Company Banner"/>
                                        <div class = "hidden-md hidden-lg hidden-xl">
                                            <h4><?php echo e($about->about_name); ?></h4>
                                            <p class = "position-hidden"><?php echo e($about->about_position); ?></p>
                                            <p class = "position-hidden"> <i class="fa fa-twitter-square"></i> <?php echo e($about->about_twitter); ?> | <i class="fa fa-linkedin-square" aria-hidden="true"></i> <?php echo e($about->about_linkedin); ?> </p>
                                        </div>
                                        <div class = "col-md-12 hidden-xs hidden-sm hidden-side text-center">
                                            <h4><?php echo e($about->about_name); ?></h4>
                                            <p class = "position-hidden"><?php echo e($about->about_position); ?></p>
                                            <p class = "position-hidden"> <i class="fa fa-twitter-square"></i> <?php echo e($about->about_twitter); ?> | <i class="fa fa-linkedin-square" aria-hidden="true"></i> <?php echo e($about->about_linkedin); ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <a class="left carousel-control" href="#myCarousel2" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href="#myCarousel2" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                        </div>
                    <?php else: ?>
                     <?php $__currentLoopData = $operations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class = "col-xs-6 col-md-3 show-side"> 
                        <div class = "col-xs-12">
                            <img src="<?php echo e(URL::asset('image/uploaded_aboutus_image')); ?>/<?php echo e($about->about_image); ?>" class="img img-responsive employee" alt="Company Banner"/>
                           <div class = "hidden-md hidden-lg hidden-xl">
                                <h4><?php echo e($about->about_name); ?></h4>
                                <p class = "position-hidden"><?php echo e($about->about_position); ?></p>
                                <p class = "position-hidden"> <i class="fa fa-twitter-square"></i> <?php echo e($about->about_twitter); ?> | <i class="fa fa-linkedin-square" aria-hidden="true"></i> <?php echo e($about->about_linkedin); ?> </p>
                            </div>
                            <div class = "col-md-12 hidden-xs hidden-sm hidden-side text-center">
                                <h4><?php echo e($about->about_name); ?></h4>
                                <p class = "position-hidden"><?php echo e($about->about_position); ?></p>
                                <p class = "position-hidden"> <i class="fa fa-twitter-square"></i> <?php echo e($about->about_twitter); ?> | <i class="fa fa-linkedin-square" aria-hidden="true"></i> <?php echo e($about->about_linkedin); ?> </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!--Marketing-->
        <div class = "operations pads">
            <div class = "col-xs-12">
                <p><strong>Marketing</strong></p>
            </div>
            <div class = "row">
                <div class = "col-xs-12 whole-employee">      
                    <div class="carousel slide sl multi-item-carousel3" id="myCarousel3">
                        <div class="carousel-inner">
                            <?php $__currentLoopData = $marketting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($loop->index == 1): ?>
                            <div class="item active">
                            <?php else: ?>  
                            <div class="item">
                            <?php endif; ?>
                                <div class = "col-xs-6 col-md-3 show-side"> 
                                    <div class = "col-xs-12">
                                        <img src="<?php echo e(URL::asset('image/uploaded_aboutus_image')); ?>/<?php echo e($about->about_image); ?>" class="img img-responsive employee" alt="Company Banner"/>
                                        <div class = "hidden-md hidden-lg hidden-xl">
                                            <h4><?php echo e($about->about_name); ?></h4>
                                            <p class = "position-hidden"><?php echo e($about->about_position); ?></p>
                                            <p class = "position-hidden"> <i class="fa fa-twitter-square"></i> <?php echo e($about->about_twitter); ?> | <i class="fa fa-linkedin-square" aria-hidden="true"></i> <?php echo e($about->about_linkedin); ?> </p>
                                        </div>
                                        <div class = "col-md-12 hidden-xs hidden-sm hidden-side text-center">
                                            <h4><?php echo e($about->about_name); ?></h4>
                                            <p class = "position-hidden"><?php echo e($about->about_position); ?></p>
                                            <p class = "position-hidden"> <i class="fa fa-twitter-square"></i> <?php echo e($about->about_twitter); ?> | <i class="fa fa-linkedin-square" aria-hidden="true"></i> <?php echo e($about->about_linkedin); ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <a class="left carousel-control" href="#myCarousel3" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                        <a class="right carousel-control" href ="#myCarousel3" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        <!--end of marketting -->
        </div>
    <!--End of Employees -->
    </div>
</div>
</div>

<div class = "row"></div> 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
<script type ="text/javascript">
$('#myCarousel').carousel({
  interval: false
})

$('.multi-item-carousel .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
      }
});

</script>
<script type="text/javascript">
$('#myCarousel2').carousel({
  interval: false
})

$('.multi-item-carousel2 .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
      }
});

</script>
<script type="text/javascript">
$('#myCarousel3').carousel({
  interval: false
})

$('.multi-item-carousel3 .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
      }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>