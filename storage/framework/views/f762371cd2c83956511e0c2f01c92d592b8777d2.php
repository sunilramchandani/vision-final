

<?php $__env->startSection('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/events.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

<form action="" method="post" role="form" class = "parent">
 <?php echo e(csrf_field()); ?>

<div class = "whole-page">
<img src="<?php echo e(URL::asset('image/photos/Internship.jpg')); ?>" class="header" alt="Company Banner">
<img src="<?php echo e(URL::asset('image/Arrow.png')); ?>" class="img img-border" alt="Company Banner">
<img src="<?php echo e(URL::asset('image/img-line.png')); ?>" class="img img-responsive img-line" alt="Company Banner">
    <div class = "text-inside-header-picture hidden-lg hidden-md hidden-xl hidden-sm">
        <div class = "dynamic-text-container">
            <div class ="col-xs-12 dynamic-text-container-box">
                <h1> EVENTS </h1>
            </div>
        </div>
    </div>
<!--Sticky
<div class = "col-xs-3 col-xs-offset-9 sticky">
  <div class = "col-xs-6">
    <p> Start an <strong> amazing </strong> </p>
    <p> future with us </p>
  </div>
  <div class = "col-xs-6 button-apply-sticky">
    <a href = "/application" class = "btn applynow-sticky">Apply Now</a>
  </div>
</div>-->
<!--end of stick -->
<div class = "col-xs-12 events">
  <div class ="row col-xs-12">
    <div class = "col-xs-9 events-header">
      <h2>Events</h2>
    </div>
    <div class="col-xs-3  search-row">
   <!-- <form action="<?php echo e(route('event.index')); ?>" method="get" class="form-inline">
                            <?php echo e(csrf_field()); ?>


                            <div class="form-group">
                                <input type="text" class="form-control search" name="s" placeholder="Search Title" value="<?php echo e(isset($s) ? $s:''); ?>">
                            </div>

                            <div class="form-group">
                                <button class="btn" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>


                        </form>
      <div id='button-holder'>
        <i class="fa fa-search" aria-hidden="true"></i>
      </div> -->
    </div>
  </div>
  <div class = "row">
    <div class = "col-sm-9 col-xs-12 events-content-container">
      <?php $__currentLoopData = $events_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $events): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($events->fbevent_id == 1): ?>
        <div class = "col-xs-6 col-sm-4 capsules">
          <div class = "col-xs-12 events-content">
            <img src="<?php echo e($events->cover_source); ?>" alt="" class = "event-img img">
            
            <h4 class = " details text-center"><?php echo e($events->event_name); ?> </h4> 
            <p class = "details text-center"><strong><?php echo e(Carbon\Carbon::parse($events->start_time)->toFormattedDateString()); ?> | <?php echo e(Carbon\Carbon::parse($events->start_time)->format('h:i')); ?> - <?php echo e($events->place_name); ?></strong> </p>
            <p class = "details text-center"><?php echo e(\Illuminate\Support\Str::words($events->event_description, 15,' .... ')); ?></p>
           
            <a class = "submit btn" href = "/single_event/<?php echo e($events->fbevent_id); ?>"><span>More Info</span></a>
          </div>
        </div>
    <?php endif; ?>
      
      <?php if($events->start_time > Carbon\Carbon::now()->addDay()): ?>
        <div class = "col-xs-6 col-sm-4 capsules">
          <div class = "col-xs-12 events-content">
            <img src="<?php echo e($events->cover_source); ?>" alt="" class = "event-img img">
            
            <h4 class = " details text-center"><?php echo e($events->event_name); ?> </h4> 
            <p class = "details text-center"><strong><?php echo e(Carbon\Carbon::parse($events->start_time)->toFormattedDateString()); ?> | <?php echo e(Carbon\Carbon::parse($events->start_time)->format('h:i')); ?> - <?php echo e($events->place_name); ?></strong> </p>
            <p class = "details text-center"><?php echo e(\Illuminate\Support\Str::words($events->event_description, 15,' .... ')); ?></p>
           
            <a class = "submit btn" href = "/single_event/<?php echo e($events->fbevent_id); ?>"><span>More Info</span></a>
          </div>
        </div>
      <?php else: ?>
      <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
     
      
    </div>
    
    <div class = "col-sm-3 hidden-xs  categories-sidebar">
      <div class = "col-xs-12">
        <table class="table table-categories table-borderless table-hover">
          <thead bgcolor="#800000">
            <tr>
              <th class = "header-table text-center">CATEGORIES</th>
              <th class = "header-table text-center"></th>
            </tr>
          </thead>
          <tbody>
          <?php $__currentLoopData = $category_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr class='clickable-row' data-href='/event?event_id=<?php echo e($category->id); ?>'>
              <td>
                <?php echo e($category->category_name); ?></td>
              <td>
                      <i style="color:black;"><?php echo e($category->eventcategorytable_count); ?></i>
              </td>

          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>    

    </div>
  </div> 
  </div>   
  <div class = "row text-center">
       <?php echo e($events_table->appends(['s' => $s])->links()); ?>

    </div>
</div> 

<div class = "row filler"></div>
</form>
<div id="map"></div>
    <script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzQQYFrug-yB5tVMh7KL6av4U1SegZcec&callback=initMap"
    async defer></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>

  jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>