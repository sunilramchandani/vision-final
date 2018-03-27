

<?php $__env->startSection('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/internship-company.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<form action="" method="post" role="form">
 <?php echo e(csrf_field()); ?>

<div class = "col-xs-12 whole-page">

<?php $__currentLoopData = $featuredimage_workvisa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->main_image); ?>" class="img img-responsive img-rounded header" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/Arrow.png')); ?>" class="img img-border" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/img-line.png')); ?>" class="img img-responsive img-line" alt="Company Banner">
    <div class = "text-inside-header-picture">
        <div class = "dynamic-text-container">
            <div class ="col-md-4 col-xs-12 dynamic-text-container-box">
                <h4>    <?php echo e($featured->main_image_description_header); ?>  </h4>
                <div class = "col-xs-12 p-title">
                    <H1>  <?php echo e($featured->main_image_description); ?>  </H1>
                </div>
                <div class = "col-xs-12 p-head">
                    <p><?php echo e($featured->main_image_description_footer); ?></p>
                </div>
            </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
    <!--STRICKY APPLY -->
            <div class = "hidden-xs hidden-sm col-md-3 col-md-offset-9 sticky">
          <div class = "col-xs-6">
            <p> Start an <strong> amazing </strong> future with us</p>
          </div>
          <div class = "col-xs-6 button-apply-sticky">
            <a href = "/application" class = "btn applynow-sticky">Apply Now</a>
          </div>
        </div>
     <!-- END OF STICKY -->
      <div class = "container">
        <div class = "col-xs-12">
            <div class = "row text-center what-next-text">
                <h2 id=whatsnext-title>What is Australian Skilled Migration?</h2>
                <div class = "col-xs-6 col-xs-offset-3">
                    <p id=about-next>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin euismod tristique neque. In ullamcorper massa et mauris ullamcorper, a euismod nibh mollis. Ut vitae dignissim metus, eget sollicitudin neque.</p>
                </div>
            </div>
        </div>
          <!--first box -->
     <?php $__currentLoopData = $last_step; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class = "row">
            <div class = "col-xs-12">
                <div class = "col-xs-12">
                    <div class=" boxshadow box-1 row">
                        <div class="internship-icon col-xs-12 col-md-6 text-center">
                            <img src="<?php echo e(URL:: asset('image/uploaded_step_image')); ?>/<?php echo e($step->image); ?>" class = "application-logo">
                        </div>
                        <div class="intership-content col-xs-12 col-md-6">
                            <div class = "col-md-10 col-md-offset-1 col-xs-12">
                                <p id="p-icon" style = "color: #900603;"><?php echo $step->image_description; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>   
    <div class = "container">
        <div class = "col-xs-12">
            <div class = "row text-center what-next-text">
                <h2 id=whatsnext-title>What's Next?</h2>
                <p id=about-next>Our process is  smooth and easy. We can facilitate your application</p>
                <p id=about-next>and get you to your dream destination as soon as possible!</p>
            </div>
        </div>
          <!-- number 1 -->
     <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class = "row">
            <div class = "col-xs-12">
                <div class = "col-xs-12">
                    <div class="text-center boxshadow box-1 row" 
                    <?php if($step->step_number == "1"): ?>> 
                        <img src="<?php echo e(URL:: asset('image/circle.png')); ?>" class = "number-icon"/>
                    <?php elseif($step->step_number == "2"): ?>> 
                        <img src="<?php echo e(URL:: asset('image/circle2.png')); ?>" class = "number-icon"/>
                    <?php elseif($step->step_number == "3"): ?>> 
                        <img src="<?php echo e(URL:: asset('image/circle3.png')); ?>" class = "number-icon"/>
                    <?php endif; ?>
                        <div class="internship-icon col-xs-12 col-md-6">
                            <img src="<?php echo e(URL:: asset('image/uploaded_step_image')); ?>/<?php echo e($step->image); ?>" class = "application-logo">
                            <div class = "col-xs-12">
                                <h1 id=reserve-title><?php echo e($step->image_title); ?></h1>
                            </div>
                            <div class = "col-md-10 col-md-offset-1 col-xs-12">
                                <p id="p-icon" style = "color: #900603;"><?php echo e($step->image_description); ?></p>
                            </div>
                        </div>
                        <div class="intership-content col-xs-12 col-md-6">
                            <div class = "col-xs-12 col-md-offset-1 col-md-10">
                                <p id=p-content><?php echo e($step->description); ?></p>
                                <div class="button">
                                    <?php if($step->sub_description != null): ?>
                                    <a href= "/faq" class="btn locate-me"><?php echo e($step->sub_description); ?></a>
                                    <?php endif; ?>
                                    <?php if($step->button_name != null): ?>
                                    <br>
                                    <br>
                                    <a href= "/faq" class="btn locate-me"><?php echo e($step->button_name); ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 <!--testimony-->
        <div class="container">
            <div class="row testimony-header">
                <div class=" col-xs-8 col-xs-offset-2 about-font text-center">
                     <h3>Our Community</h3>
                     <p>We are proud to have an amazing community of students and professionals who have received the VIP treatment. Listen to their stories</p>
                </div>
            </div>
            <div class = "row testimony-content">
                <div class = "col-xs-8 testimony-description">
                    <blockquote>
                        This program is one of the challenging experiences, joyful events, and new things that ii've learned and molded me to become a better person
                        <cite>Karissa MArie Salengua</cite>
                        <cite>Work & Travel Program, California</cite>
                    </blockquote>
                </div>
                <div class = "col-xs-4">
                     <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/joy.png" class="img img-responsive img-rounded testimony-picture" alt="Company Banner"/>
                </div>
            </div>
        </div>
<!--end of testimony -->
</div>
</form>
<div class = "filler row" id = "filler">
</div>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>