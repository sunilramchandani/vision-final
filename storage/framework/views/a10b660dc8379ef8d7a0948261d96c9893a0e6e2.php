 <?php $__env->startSection('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/home.css')); ?>">
    <script type="text/javascript" charset="utf8" src="<?php echo e(asset('/js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="http://guidobouman.github.io/jquery-panelsnap/jquery.panelSnap.js"></script>
     <script>
     jQuery(function($) {
            $('body').panelSnap();
          });
    </script>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $featuredimage_home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section>
    <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->main_image); ?>" class="header"
        alt="Company Banner">

    <img src="<?php echo e(URL::asset('image/Arrow.png')); ?>" class="img  img-border" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/img-line.png')); ?>" class="img img-responsive img-line" alt="Company Banner">
    <div class="text-inside-header-picture next">
        <div class="row dynamic-text-container">
            <div class="col-xs-12 col-md-6 dynamic-text-container-box">
                <h4 class="text-description"> <?php echo e($featured->main_image_description); ?></h4>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row counters">
            <div class="col-md-6 col-md-offset-0 col-xs-11 col-xs-offset-1" style="padding:0;">
                <?php $__currentLoopData = $counter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $counters): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-2 counter-container">
                    <h1 class="counter"><?php echo e($counters->country); ?></h1>
                </div>
                <div class="col-xs-2 counter-container">
                    <p>
                        <h1 class="counter"> <?php echo e($counters->state); ?> </h1>
                </div>
                <div class="col-xs-2 counter-container">
                    <h1 class="counter"><?php echo e($counters->company); ?></h1>
                </div>
                <div class="col-xs-2 counter-container">
                    <h1 class="counter"><?php echo e($counters->applicant); ?></h1>
                </div>
                <div class="col-xs-2 counter-container-infinity">
                    <img src="<?php echo e(URL::asset('image/icons/InfinitySign.png')); ?>" class="img  img-rounded infin" id="infin" alt="Company Banner">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="row counter-label">
            <div class="col-md-6 col-md-offset-0 col-xs-11 col-xs-offset-1" style="padding:0;">
                <div class="col-xs-2 counter-label-container">
                    <h4 class="labels">Countries</h4>
                </div>
                <div class="col-xs-2 counter-label-container">
                    <h4 class="labels">States</h4>
                </div>
                <div class="col-xs-2 counter-label-container">
                    <h4 class="labels">Companies</h4>
                </div>
                <div class="col-xs-2 counter-label-container">
                    <h4 class="labels">Applicants</h4>
                </div>
                <div class="col-xs-2  counter-container-infinity-label">
                    <h4 class="labels">Opportunities</h4>
                </div>
            </div>
        </div>
        <div class="row link-button">
            <div class="col-xs-3 col-sm-offset-4 col-md-offset-0">
                <a href="https://www.facebook.com/visionphil/" class="btn fblink">#onevision #vip</a>
            </div>
        </div>
    </div>
</section>
<section>
    <!------------------------- CONTENT ---------------------->
    <div class="container">
        <div class="about row">
            <div class="col-md-4 col-md-offset-4 col-xs-12 text-center about-font">
                <h1>We believe that...</h1>
                <p>Every Filipino deserves an opportunity to showcase his or her talent to the world.</p>
            </div>
        </div>
    </div>
    
    <!--Picture -->
    <?php $__currentLoopData = $featuredimage_home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container next">
        <div class="row picture-header">
            <div class="col-md-6 col-xs-6">
                <div class="home-pic">
                    <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->sub_image1); ?>" class="img-rounded img-responsive sub-img"
                        alt="Photo">
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
                <div class="home-pic">
                    <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->sub_image2); ?>" class="img-rounded img-responsive sub-img"
                        alt="Photo">
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<section>
    <div class="container ">
        <div class="commit row">
            <div class="col-xs-12 text-center commitment-font">
                <h1>Our Commitments</h1>
            </div>
        </div>
    </div>

    <!--Commitments -->
     <div class="text-center next">
        <div class="row" id=p-commit>
            <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                <div class="icon-container">
                    <img src="<?php echo e(URL::asset('image/icons/1.png')); ?>" alt="Content" id=icon>
                    <p>Unlimited
                        <br> Opportunities
                    </p>
                </div>
                <div class="icon-container">
                    <img src="<?php echo e(URL::asset('image/icons/2.png')); ?>" alt="Content" id=icon>
                    <p>Guaranteed
                        <br> Placement and Visa
                    </p>
                </div>
                <div class="icon-container">
                    <img src="<?php echo e(URL::asset('image/icons/Fast Processing-01.png')); ?>" alt="Content" id=icon>
                    <p>Fast
                        <br> Processing
                    </p>
                </div>
                <div class="icon-container">
                    <img src="<?php echo e(URL::asset('image/icons/4.png')); ?>" alt="Content" id=icon>
                    <p>Lowest Priced
                        <br> Programs
                    </p>
                </div>
                <div class="icon-container">
                    <img src="<?php echo e(URL::asset('image/icons/Highest Level-01.png')); ?>" alt="Content" id=icon>
                    <p>Highest Level
                        <br> of Service
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 hidden-lg hidden-md hidden-xl">
                <div class="col-sm-4 col-xs-4 ">
                    <div class="text-center">
                        <img src="<?php echo e(URL::asset('image/icons/1.png')); ?>" alt="Content" id=icon>
                        <p>Unlimited
                            <br> Opportunities
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <div class="text-center">
                        <img src="<?php echo e(URL::asset('image/icons/2.png')); ?>" alt="Content" id=icon class="text-center">
                        <p class="text-center">Guaranteed
                        <br> Placement and Visa
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4">
                    <div class="text-center">
                        <img src="<?php echo e(URL::asset('image/icons/Fast Processing-01.png')); ?>" alt="Content" id=icon>
                        <p>FAST
                        <br> Processing
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 hidden-lg hidden-md hidden-xl">
                <div class="col-sm-4 col-xs-4 ">
                    <div class="text-center">
                        <img src="<?php echo e(URL::asset('image/icons/4.png')); ?>" alt="Content" id=icon>
                        <p>Lowest Priced
                        <br> Programs
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-4 ">
                    <div class="text-center">
                        <img src="<?php echo e(URL::asset('image/icons/Highest Level-01.png')); ?>" alt="Content" id=icon>
                        <p>Highest Level
                        <br> of Service
                        </p>
                    </div>
                </div>
                <a href = "/faq">
                    <div class="col-sm-4 col-xs-4 ">
                        <div class="text-center">
                            <img src="<?php echo e(URL::asset('image/icons/more-info.png')); ?>" alt="Content" id=more-info>
                            <p>MORE INFO</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- End Commitments -->

    <!-- More info button -->
    <div class="container text-center hidden-xs hidden-sm">
        <div class="row">
            <a href="/faq" class="btn btn-lg moreinfo-btn">More info</a>
        </div>
    </div>
    <!-- end -->
</section>
<section>
    <!--Start of Events -->
    <div class="container text-center  next">
        <div class="row event-font">
            <h1>Events</h1>
        </div>
    </div>
    <div class="container">
        <div class="row home-page-events ">
        <?php $__currentLoopData = $perma_event; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $events): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($events->fbevent_id == 1): ?>
                <div class="col-md-3 col-xs-6 ">
                <div class = "col-xs-12 events-content text-center">
                    <img src="<?php echo e($events->cover_source); ?>" alt="" class="event-img img">

                    <h4 class=" details text-center"><?php echo e($events->event_name); ?> </h4>
                    <p class="details text-center">
                        <strong><?php echo e(Carbon\Carbon::parse($events->start_time)->toFormattedDateString()); ?> | <?php echo e(Carbon\Carbon::parse($events->start_time)->format('h:i')); ?>

                            - <?php echo e($events->place_name); ?></strong>
                    </p>
                    <p class="details text-center"><?php echo e(\Illuminate\Support\Str::words($events->event_description, 14,' ... ')); ?></p>

                    <a href="single_event/<?php echo e($events->fbevent_id); ?>" class="raj-button-design btn">
                        <span>More Info</span>
                    </a>
                </div>
            </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $events_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $events): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($events->start_time > Carbon\Carbon::now()->addDay()): ?>
            <div class="col-md-3 col-xs-6 ">
                <div class = "col-xs-12 events-content text-center">
                    <img src="<?php echo e($events->cover_source); ?>" alt="" class="event-img img">

                    <h4 class=" details text-center"><?php echo e($events->event_name); ?> </h4>
                    <p class="details text-center">
                        <strong><?php echo e(Carbon\Carbon::parse($events->start_time)->toFormattedDateString()); ?> | <?php echo e(Carbon\Carbon::parse($events->start_time)->format('h:i')); ?>

                            - <?php echo e($events->place_name); ?></strong>
                    </p>
                    <p class="details text-center"><?php echo e(\Illuminate\Support\Str::words($events->event_description, 14,' ... ')); ?></p>

                    <a href="single_event/<?php echo e($events->fbevent_id); ?>" class="raj-button-design btn">
                        <span>More Info</span>
                    </a>
                </div>
            </div>
            <?php else: ?>
            <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--BUTTON WHEN MOBILE -->
            <div class="col-xs-4 col-xs-offset-4 show-all-container">
                <a href="" class="show-all btn">
                    <span>Show All</span>
                </a>
            </div>
        </div>
    </div>
</section>
    <!--End of Events -->
<section>
    <!--featured company -->
    <div class="container text-center ">
        <div class="row promos-header">
            <div class="about-font">
                <h1>Featured Properties</h1>
            </div>
        </div>
    </div>
      <div class="row next">
        <div id ="carousel-featured" class="col-md-12 hidden-xs hidde-sm carousel slide " data-ride="carousel">
            <!-- Indicators -->
            
            <ol class="carousel-indicators">
            <?php $__currentLoopData = $internshipcompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $internship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo e($loop->index); ?>" class="<?php echo e($loop->first ? 'active' : ''); ?>"></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php $__currentLoopData = $internshipcompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $internship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="item <?php echo e($loop->first ? ' active' : ''); ?>">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container text-center promos">    
                                <div class="col-md-6 col-md-offset-1 hidden-xs hidden-sm hidden-xs promo-pic-container">
                                    <img src="<?php echo e(URL::asset('image/uploaded_company_image')); ?>/<?php echo e($internship->image); ?>" class="img img-responsive  promo-pic"
                                        alt="Company Banner">
                                </div>
                                <div class="col-md-4 hidden-sm hidden-xs  promo-desc">
                                    <div class="upper-content">
                                        <h3 class="dynamic-promo-title"> <?php echo e($internship->company_name); ?></h3>
                                        <p class="dynamic-promo-text"><?php echo e($internship->description); ?></p>
                                        <a href="/internshipcompany?eid=<?php echo e($internship->id); ?>" class="submit btn featured-btn">More Info</a>
                                    </div>
                                    <div class="lower-content col-md-12">
                                        <div class="col-md-12 validity-container">
                                        <p class="validity-text">Share this property:                                                
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(Request::fullUrl(). '/internshipcompany?eid='. $internship->id )); ?>" target="_blank">
                                               <i class="fa fa-facebook-f " style="font-size:14px; padding-right:1%; color:white;"></i>
                                             </a>
                                            <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(Request::fullUrl().'/internshipcompany?eid='. $internship->id )); ?>" target="_blank">
                                                <i class="fa fa-twitter " style="font-size:14px; padding-right:1%; color:white;"></i>
                                            </a>
                                            <a href="https://plus.google.com/share?url=<?php echo e(urlencode(Request::fullUrl().'/internshipcompany?eid='. $internship->id)); ?>" target="_blank">
                                                <i class="fa fa-google-plus " style="font-size:14px; color:white;"></i>
                                            </a>
                            
                                        </p>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>  
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if($internshipcompany_table->count() != 1): ?>
                <!-- Controls -->
                <a class="left carousel-control hidden-xs hidden-sm" href="#carousel-featured" role="button" data-slide="prev" style="background: none !important; color:black;">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control hidden-xs hidden-sm" href="#carousel-featured" role="button" data-slide="next"style="background: none !important; color:black;">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                <?php endif; ?>

            </div>
            <!-- end of carousel -->
        </div>
        <div class = "container">
            <div id ="carousel-featured2" class="col-md-12 hidden-lg hidden-md carousel slide " data-ride="carousel">
            <!-- Indicators -->
            
            <ol class="carousel-indicators">
            <?php $__currentLoopData = $internshipcompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $internship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo e($loop->index); ?>" class="<?php echo e($loop->first ? 'active' : ''); ?>"></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
             <?php $__currentLoopData = $internshipcompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $internship): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item <?php echo e($loop->first ? ' active' : ''); ?>">
            <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="hidden-md hidden-lg col-xs-12 ">
                <div class = "col-xs-12 mobile-featured">
                    <img src="<?php echo e(URL::asset('image/uploaded_company_image')); ?>/<?php echo e($internship->image); ?>" alt="" class="event-img img">
                    <div class = "col-xs-12">
                        <h4 class=" details text-center"><?php echo e($internship->company_name); ?> </h4>
                        <p class="details text-center"><?php echo e($internship->description); ?></p>
                        <p class="details text-center"> Share
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(Request::fullUrl(). '/internshipcompany?eid='. $internship->id )); ?>" target="_blank">
                               <i class="fa fa-facebook-f " style="font-size:14px; padding-right:1%; color:black;"></i>
                             </a>
                            <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(Request::fullUrl().'/internshipcompany?eid='. $internship->id )); ?>" target="_blank">
                                <i class="fa fa-twitter " style="font-size:14px; padding-right:1%; color:black;"></i>
                            </a>
                            <a href="https://plus.google.com/share?url=<?php echo e(urlencode(Request::fullUrl().'/internshipcompany?eid='. $internship->id)); ?>" target="_blank">
                                <i class="fa fa-google-plus " style="font-size:14px; color:black;"></i>
                            </a>
                        </p>

                    </div>
                    <div class = "col-xs-12 text-center">
                        <a href="/internshipcompany?eid=<?php echo e($internship->id); ?>" class="raj-button-design btn">More Info</a>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php if($internshipcompany_table->count() != 1): ?>
                <!-- Controls -->
                <a class="left carousel-control hidden-md hidden-lg" href="#carousel-featured2" role="button" data-slide="prev" style="background: none !important; color:black;">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control hidden-md hidden-lg" href="#carousel-featured2" role="button" data-slide="next" style="background: none !important; color:black;">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
                <?php endif; ?>
        </div>
    </div>
</div>
    <!-- end of Featured --> 
</section>
    <section>
    <?php $__currentLoopData = $featuredimage_home; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($featured->sub_image3_title != Null): ?>
    <!-- Start of Promos -->
    <div class="container text-center">
        <div class="row promos-header">
            <div class="promo-font">
                <h1>Promos</h1>
                <p>Get one step closer to your dreams.
                    <br>Take advantage of this amazing deal on our programs!
                </p>
            </div>
        </div>
    </div>

    <!-- Promo picture -->
    <div class="text-center promos ">
        <div class="col-md-6 col-md-offset-1 hidden-sm hidden-xs promo-pic-container">
            <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->sub_image3); ?>" class="img img-responsive  promo-pic"
                alt="Company Banner">
        </div>
        <div class="col-md-4 hidden-sm hidden-xs  promo-desc">
            <div class="upper-content">
                <h3 class="dynamic-promo-title"> <?php echo e($featured->sub_image3_title); ?></h3>
                <p class="dynamic-promo-text"><?php echo e($featured->sub_image3_description); ?></p>
                <?php if($featured->link == "internship"): ?>
                <a href="/internshipcompany" class="btn moreinfo">More Info </a>
                <?php else: ?>
                <a href="/workcompany" class="btn moreinfo">More Info </a>
                <?php endif; ?>
            </div>
            <div class="lower-content col-md-11 next">
                <div class="col-md-8 col-md-offset-2 col-xs-8 col-xs-offset-4 validity-container">
                    <p class="validity-text">Valid Until: <?php echo e($featured->sub_image3_validity); ?></p>
                </div>
            </div>
        </div>
        <div class="hidden-lg hidden-md hidden-xl col-xs-12 ">
            <div class = "col-xs-12 mobile-featured">
                <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->sub_image3); ?>" alt="" class="event-img img">
                <div class = "col-xs-12">
                    <h4 class=" details text-center"><?php echo e($featured->sub_image3_title); ?> </h4>
                    <p class="details text-center"><?php echo e($featured->sub_image3_description); ?></p>
                    <p class="validity-text">Valid Until: <?php echo e($featured->sub_image3_validity); ?></p>
                    <?php if($featured->link == "internship"): ?>
                    <a href="/internshipcompany" class="btn raj-button-design">More Info </a>
                    <?php else: ?>
                    <a href="/workcompany" class="btn raj-button-design">More Info </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- End of Promos -->
</section>
 
    <!--testimony-->
    <section>
        <div class="container">
            <div class="row testimony-header">
                <div class=" col-xs-12 col-md-8 col-md-offset-2 about-font text-center">
                     <h3>Our Community</h3>
                     <p> We are proud to have an amazing community of students and professionals who have received the VIP treatment. Listen to their stories.</p>
                </div>
            </div>
        </div>
        <?php $__currentLoopData = $testimonial; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container">
            <div class = "row testimony-content">
                <div class = "col-xs-8 testimony-description">
                    <blockquote>
                        <?php echo e($testimonials->testimony); ?>

                        <cite><?php echo e($testimonials->first_name); ?> <?php echo e($testimonials->last_name); ?></cite>
                        <cite><?php echo e($testimonials->organization); ?></cite>
                    </blockquote>
                </div>
                <div class = "col-xs-4">
                     <img src="<?php echo e(URL::asset('image/uploaded_testimony_image')); ?>/<?php echo e($testimonials->image_testimony); ?>" class="img img-responsive img-rounded testimony-picture" alt="Company Banner"/>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>

<div class="row">
</div>
   
<?php $__env->startSection('script'); ?>

<script type="text/javascript">
$('.carousel-featured').carousel({
    interval: false
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>