<?php $__env->startSection('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/aupair.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<form action="" method="post" role="form">
 <?php echo e(csrf_field()); ?>

<div class = "whole-page">

<?php $__currentLoopData = $featuredimage_aupair; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->main_image); ?>" class="img img-responsive img-rounded header" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/Arrow.png')); ?>" class="img img-border" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/img-line.png')); ?>" class="img img-responsive img-line" alt="Company Banner">
    <div class = "text-inside-header-picture">
        <div class = "dynamic-text-container">
            <div class ="col-md-4 col-xs-12 dynamic-text-container-box">
                <div class = "col-xs-12">
                    <h4><?php echo e($featured->main_image_description_header); ?>  </h4>
                </div>
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

            <div class = "hidden-xs hidden-sm col-md-3 col-md-offset-9 sticky">
          <div class = "col-xs-6">
            <p> Start an <strong> amazing </strong> future with us</p>
          </div>
          <div class = "col-xs-6 button-apply-sticky">
            <a href = "/application" class = "btn applynow-sticky">Apply Now</a>
          </div>
        </div>
    <div class = "row text-center what-next-text">
        <h2 id=whatsnext-title>What is Au Pair?</h2>
        <div class = "col-xs-12 col-md-4 col-md-offset-4">
            <p>The Au Pair exchange program allows carefully selected young people to live with American families and assist with childcare.</p>
        </div>
    </div>


    <!--pair icons -->

    <div class="text-center container"> 
            <div class = "row aupair">
                <div class="aupair-icon-left col-xs-6">
                    <div class = "col-xs-12 col-md-8 col-md-offset-4 aupair-icon">
                        <img src="<?php echo e(URL:: asset('image/icons/10.png')); ?>" height = "60%" class = "logo-aupair-icon">
                        <div class = "col-xs-12 text-inside-boxes">
                            <p> Au pairs benefits from the enriching experience of learning about American culture during their stay with a host family.</p>
                        </div>
                    </div>
                </div>

                <div class="aupair-icon-right col-xs-6">
                    <div class = "col-xs-12 col-md-8 aupair-icon">
                         <img src="<?php echo e(URL:: asset('image/icons/8.png')); ?>" height = "60%" class = "logo-aupair-icon">
                         <div class = "col-xs-12 text-inside-boxes">
                            <p> Host family benefits from having consistent, reliable, in-home childcare and the opportunity to learn about the au pair and their culture.</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!--What you need -->
    <div class = "row text-center what-next-text">
        <h2 id=whatsnext-title>What you need?</h2>
        <div class = "col-xs-12 col-md-4 col-md-offset-4">
            <p>This program demands a high level of excellence and a desire to be of service. Check if you fit what we are looking for!</p>
        </div>
    </div>
    <div class="text-center container"> 
        <div class = "row aupair">
            <div class=" aupair-icon-left col-xs-6">
                <div class = "col-xs-12 col-md-8 col-md-offset-4 aupair-icon2">
                    <img src="<?php echo e(URL:: asset('image/icons/9.png')); ?>" height = "40%" class = "logo-aupair-icon2">
                    <div class = "col-xs-12 text-center text-inside-boxes">
                        <div class = "col-xs-12">
                            <h3 class = "icon-title">Qualifications</h3>
                            <h4 class = "aupair-icon-text"> Au pairs benefits from the enriching experience of learning about American culture during their stay with a host family.</h4>
                        </div>
                        <div class = "col-xs-12">
                            <a href= "/faq" class="btn locate-me locate-me21">View Qualifications</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" aupair-icon-right col-xs-6">
                <div class = "col-xs-12 col-md-8 aupair-icon2">
                     <img src="<?php echo e(URL:: asset('image/icons/6.png')); ?>" height = "40%" class = "logo-aupair-icon2">
                     <div class = "col-xs-12 text-center text-inside-boxes">
                        <div class = "col-xs-12">
                         <h3 class = "icon-title">Requirements</h3>
                         <h4 class = "aupair-icon-text"> Host family benefits from having consistent, reliable, in-home childcare and the opportunity to learn about the au pair and their culture.</h4>
                        </div>
                        <div class = "col-xs-12">
                         <a href= "/faq" class="btn locate-me locate-me21">View Requirements</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
<!--whats next?-->
<div class = "container">
    <!-- number 1 -->
    <div class = "row">
        <div class = "col-xs-12">
            <div class="col-xs-12">
                <div class = "row text-center what-next-text">
                    <h2 id=whatsnext-title>What's Next?</h2>
                     <div class = "col-xs-12 col-md-4 col-md-offset-4">
                        <p>Our process is  smooth and easy. We can facilitate your application and get you to your dream destination as soon as possible!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($step->step_number != "4"): ?>
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
                        <div class = "col-xs-12">
                            <p style = "color: #900603;"><?php echo e($step->image_description); ?></p>
                        </div>
                    </div>
                    <div class="intership-content col-xs-12 col-md-6">
                        <div class = "col-xs-12">
                            <p><?php echo e($step->description); ?></p>
                            <?php if($step->sub_description != null): ?>
                            <p style="color:#e28174;"><?php echo e($step->sub_description); ?></p>
                            <?php endif; ?>
                            <?php if($step->button_name != null): ?>
                            <a href= "/faq" class="btn redbox-1 locate-me99 locate-me-form "><?php echo e($step->button_name); ?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php else: ?>
    <div class = "row">
        <div class = "col-xs-12">
            <div class="col-xs-12">
                <div class="boxshadow row"> 
                    <div class="internship-icon col-xs-6 text-center ">
                       <img src="<?php echo e(URL:: asset('image/uploaded_step_image')); ?>/<?php echo e($step->image); ?>" class = "application-logo">
                       <h1 id=reserve-title><?php echo e($step->image_title); ?></h1>
                    </div>
   
                   <div class="intership-content col-xs-6">
                        <div class ="col-xs-12">
                           <p><span><?php echo $step->image_description; ?></span></li></p>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!--mother div end -->
</div>

        <!--Testimony-->

        <div class="container">
            <div class="row testimony-header">
                <div class="about-font text-center">
                     <h3>Our Community</h3>
                     <div class = "col-xs-12 col-md-4 col-md-offset-4">
                        <p>Get inspiration from those who have come before you. Here are some of our students who have experienced work life abroad.</p>
                    </div>  
                </div>
            </div>
            <div class = "row testimony-content">
                <div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class = "col-lg-8 col-md-8 col-sm-8 col-xs-8 testimony-description">
                        <blockquote>
                            This program is one of the challenging experiences, joyful events, and new things that ii've learned and molded me to become a better person
                            <cite>Karissa MArie Salengua</cite>
                            <cite>Work & Travel Program, California</cite>
                        </blockquote>
                    </div>
                    <div clas = "col-lg-4 col-md-4 col-sm-4 col-xs-4">
                         <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/joy.png" class="img img-rounded testimony-picture" alt="Company Banner">
                    </div>
                </div>
            </div>
        </div>
<!--end of testimony -->
</div>
<div class = "filler row" id = "filler">
</div>
</form>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>