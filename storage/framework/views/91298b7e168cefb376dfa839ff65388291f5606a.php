<div id="pageLoad">


<?php $__env->startSection('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/internship-company.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<form action="" method="post" role="form">
 <?php echo e(csrf_field()); ?>

<div class = "col-xs-12 whole-page">
<?php if( Request::get('country') == "United States"): ?>
<?php $__currentLoopData = $featuredimage_internship_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->main_image); ?>" class="img img-responsive img-rounded header" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/Arrow.png')); ?>" class="img img-border" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/img-line.png')); ?>" class="img img-responsive img-line" alt="Company Banner">
    <div class = "text-inside-header-picture">
        <div class = "dynamic-text-container">
            <div class ="col-md-5 col-xs-12 dynamic-text-container-box">
                <h4> <?php echo e($featured->main_image_description_header); ?>  </h4>
                <div class = "col-xs-12 p-title">
                    <H1>  <?php echo e($featured->main_image_description); ?>  </H1>
                </div>
                <div class = "col-xs-12 p-head">
                    <p><?php echo e($featured->main_image_description_footer); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<?php $__currentLoopData = $featuredimage_internship_aus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->main_image); ?>" class="img img-responsive img-rounded header" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/Arrow.png')); ?>" class="img img-border" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/img-line.png')); ?>" class="img img-responsive img-line" alt="Company Banner">
    <div class = "text-inside-header-picture">
        <div class = "dynamic-text-container">
            <div class ="col-md-5 col-xs-12 dynamic-text-container-box">
                <h4> <?php echo e($featured->main_image_description_header); ?>  </h4>
                <div class = "col-xs-12 p-title">
                    <H1>  <?php echo e($featured->main_image_description); ?>  </H1>
                </div>
                <div class = "col-xs-12 p-head">
                    <p><?php echo e($featured->main_image_description_footer); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
        <div class = "hidden-xs hidden-sm col-md-3 col-md-offset-9 sticky">
          <div class = "col-xs-6">
            <p> Start an <strong> amazing </strong> future with us</p>
          </div>
          <div class = "col-xs-6 button-apply-sticky">
            <a href = "/application" class = "btn applynow-sticky">Apply Now</a>
          </div>
        </div>
    
    <div class = " row">
        <div class = "col-xs-12 col-md-4 col-md-offset-4 Top-header-message text-center">
            <?php $__currentLoopData = $featuredimage_internship_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $first): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $first->first_static; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class = "body-content" id= "body-content">
        <div class = "row hidden-xs hidden-sm filter-top">
            <div class = "hidden-xs hidden-sm col-md-10 filter-main">
                <div class = "col-xs-12">
                    <div class="dropdown">
                        <a class="dropbtn-filter"><strong>Country </strong><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="dropdown-content-filler">
                          <div id="links">
                              <a href="/internshipcompany">All</a>
                              <a href="/internshipcompany?country=United States">United States</a>
                              <a href="/internshipcompany?country=Australia">Australia</a>
                          </div>
                        </div>
                    </div>
                      <div class="dropdown">
                        <a class="dropbtn-filter"><strong>State </strong><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="dropdown-content-filler">
                          <div id="links">
                          <a href="/internshipcompany">All</a>
                          <?php if( Request::get('state')  ): ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/internshipcompany?state=<?php echo e($filter->state); ?>"><?php echo e($filter->state); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/internshipcompany?state=<?php echo e($company->state); ?>"><?php echo e($company->state); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropbtn-filter"><strong>Industry </strong><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="dropdown-content-filler">
                          <div id="links">
                          <a href="/internshipcompany">All</a>
                          <?php if( Request::get('industry_name')  ): ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_industry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/internshipcompany?industry_name=<?php echo e($filter->industry_name); ?>"><?php echo e($filter->industry_name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_industry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/internshipcompany?industry_name=<?php echo e($company->industry_name); ?>"><?php echo e($company->industry_name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropbtn-filter"><strong>Start Date </strong><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="dropdown-content-filler">
                          <div id="links">
                          <a href="/internshipcompany">All</a>
                          <?php if( Request::get('duration')  ): ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_duration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/internshipcompany?duration=<?php echo e($filter->start_date); ?>"><?php echo e($filter->start_date); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_duration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/internshipcompany?duration=<?php echo e($company->start_date); ?>"><?php echo e($company->start_date); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "col-lg-2 col-md-2 col-sm-2 col-xs-4 filter-result">
                <?php for($i = 0; $i < count($internshipCompany_table)+1; $i++): ?>
                    <?php if($i == count($internshipCompany_table)): ?>
                        <p>Total Results: <strong> <?php echo e($i); ?> </strong></p>
                    <?php endif; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>


<!--------------------HIDDEN DIV ---------------------------->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        
    </div>
  </div>





<!----------------------------------------END OF HIDDEN DIV -------------------------------------->

<!--mobile filter -->
<div class = "col-xs-12 hidden-md hidden-lg hidden-xl">
    <div class = "row ">
        <div class = "col-xs-6 form-group">
            <select class = "form-control" name="current_city" id="dynamic_select">
            <option value="" disabled selected>Select</option>
            <?php if( Request::get('state')  ): ?>
                    <?php $__currentLoopData = $internshipCompany_table_filter_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value ="internshipcompany?state=<?php echo e($filter->state); ?>"><?php echo e($filter->state); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php $__currentLoopData = $internshipCompany_table_filter_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value ="internshipcompany?state=<?php echo e($company->state); ?>"><?php echo e($company->state); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </select>
        </div>
    </div>
</div>
<div class = "col-xs-12 hidden-md hidden-lg hidden-xl last-filter">
    <div class = "row">
        <div class = "col-xs-12">
            <select class = "form-control" name="internship_duration" id="">
                <option value="" disabled selected>Select</option>
                <?php if( Request::get('state')  ): ?>
            
                        <?php $__currentLoopData = $internshipCompany_table_filter_duration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value ="internshipcompany?state=<?php echo e($duration->duration_start_date); ?>"><?php echo e($duration->duration_start_date); ?></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                 
                         <?php $__currentLoopData = $internshipCompany_table_filter_duration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value ="internshipcompany?state=<?php echo e($duration->duration_start_date); ?>"><?php echo e($duration->duration_start_date); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                <?php endif; ?>
            </select>
        </div>
    </div>
</div>

<!--End of filter mobile -->


<div class = "col-xs-12 company-whole" id = "x">
    <div class = "col-md-6 hidden-xs hidden-sm picture" id = "map">  
    </div>
    <div class = "hidden-md hidden-lg hidden-xl col-xs-12 picture" id = "map-mobile">  
    </div>
    <div class = "col-md-6 hidden-xs hidden-sm side-content">
        <?php $__currentLoopData = $internshipCompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class = "col-xs-6 ">
                <div class = "col-xs-12 info-container">
                    <div class = "row company-picture">
                        <img src="<?php echo e(URL::asset('image\uploaded_company_image')); ?>/<?php echo e($company->image); ?>" class="img img-responsive company-head" alt="Company Banner">
                    </div>
                    <?php if($company->featured == "Yes"): ?>
                    <div class = "row featured-notif">
                        <p><i class="fa fa-star"></i> Featured Property</p>
                    </div>
                    <?php endif; ?>
                    <div class = "row info">
                        <h4><?php echo e(\Illuminate\Support\Str::words($company->full_address, 5,' .... ')); ?></h4>
                        <h3><?php echo e($company->company_name); ?></h3>
                        <p class = "desc"><?php echo e(\Illuminate\Support\Str::words($company->description, 10,' .... ')); ?></p>
                        <a href = "javascript:google.maps.event.trigger(gmarkers[<?php echo e($loop->index); ?>],'click');"  class = "btn locate-me1"> Locate Me </a>
                    </div>
                </div>
            </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <!--Mobile company -->
        <div class = "col-xs-12 hidden-md hidden-lg side-content">
        <?php $__currentLoopData = $internshipCompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class = "col-xs-6 ">
                <div class = "col-xs-12 info-container">
                    <div class = "row company-picture">
                        <img src="<?php echo e(URL::asset('image\uploaded_company_image')); ?>/<?php echo e($company->image); ?>" class="img img-responsive company-head" alt="Company Banner">
                    </div>
                    <?php if($company->featured == "Yes"): ?>
                    <div class = "row featured-notif">
                        <p><i class="fa fa-star"></i> Featured Property</p>
                    </div>
                    <?php endif; ?>
                    <div class = "row info">
                        <h3><?php echo e($company->company_name); ?></h3>
                        <h4><?php echo e(\Illuminate\Support\Str::words($company->full_address, 5,' .... ')); ?></h4>
                        <p class = "desc"><?php echo e(\Illuminate\Support\Str::words($company->description, 10,' .... ')); ?></p>
                        <a href = "javascript:google.maps.event.trigger(gmarkers[<?php echo e($loop->index); ?>],'click');"  class = "btn locate-me1"> Locate Me </a>
                    </div>
                </div>
            </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<!--whats next?-->
    <div class = "container">
        <div class = "col-xs-12">
            <div class = "row text-center what-next-text">
                <div class = "col-xs-12 col-md-4 col-md-offset-4 Top-header-message text-center">
                    <?php $__currentLoopData = $featuredimage_internship_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $first): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $first->second_static; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
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


        <!--Rate -->
        <div class = "container">
                <div class = "col-xs-12 rate-container">
                    <div class = "col-xs-12 col-md-6">
                        <div class = "text-left-side col-xs-offset-1">
                            <h2 class = "gradient"> What's the rate? </h2>
                            <h3 class = "gradient1"> There is plenty to experience! </h3>
                        </div>
                        <div class = "row row-price">
                            <div class = "col-xs-4 col-xs-offset-2 col-md-3 col-md-offset-1">
                                <h4>Duration</h4>
                            </div>
                           <div class = "col-xs-5 col-md-4">
                                
                                <?php if( Request::get('country') == "Australia"  ): ?>
     
                                 <select class = "form-control" name="duration2" id="duration2">
                                    <?php $__currentLoopData = $rate_au; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($rate->duration); ?>"><?php echo e($rate->duration); ?> Months</option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php else: ?>
                                <select class = "form-control" name="duration" id="duration">
                                    <?php $__currentLoopData = $rate_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($rate->duration == "12"): ?>
                                        <option value="<?php echo e($rate->duration); ?>" selected=""><?php echo e($rate->duration); ?> Months</option>
                                        <?php else: ?> 
                                        <option value="<?php echo e($rate->duration); ?>"><?php echo e($rate->duration); ?> Months</option>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php endif; ?>     
                                
                            </div>
                        </div>
                        <div class = "row row-price">
                             <div class = "col-xs-4 col-xs-offset-2 col-md-3 col-md-offset-1">
                                <strong><p id = "reservation">PHP 3000</p></strong>
                            </div>
                            <div class = "col-xs-4 col-md-4">
                                <p>Reservation</p>
                            </div>
                        </div>
                        <div class = "row row-price">
                             <div class = "col-xs-4 col-xs-offset-2 col-md-3 col-md-offset-1">
                                <?php if( Request::get('country') == "Australia"  ): ?>
                                    <?php $__currentLoopData = $rate_au; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <strong><p id = "1st-Installment">$ <?php echo e($rate->first); ?></p></strong>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <strong><p id = "1st-Installment">USD 450</p></strong>
                                <?php endif; ?>
                                
                            </div>
                            <div class = "col-xs-4 col-md-4">
                                <p>First Installment *</p>
                            </div>
                        </div>
                        <div class = "row row-price">
                           <?php if( Request::get('country') == "Australia"): ?>
                           <div class = "col-xs-4 col-xs-offset-2 col-md-3 col-md-offset-1">
                            <?php else: ?>
                            <div class = "col-xs-4 col-xs-offset-2 col-md-3 col-md-offset-1 last-row last-row1">
                            <?php endif; ?>
                                <?php if( Request::get('country') == "Australia"  ): ?>
                                    <?php $__currentLoopData = $rate_au; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <strong><p id = "2nd-Installment">$ <?php echo e($rate->second); ?></p></strong>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <strong><p id = "2nd-Installment">USD 4100</p></strong>
                                <?php endif; ?>
                            </div>
                            <?php if( Request::get('country') == "Australia"): ?>
                            <div class = "col-xs-4 col-md-4">
                            <?php else: ?>
                            <div class = "col-xs-4 col-md-4 last-row">
                            <?php endif; ?>
                                <p>Second Installment **</p>
                            </div>
                        </div>
                        <?php if( Request::get('country') == "Australia"  ): ?>
                        <div class = "row row-price">
                            <div class = "col-xs-4 col-xs-offset-2 col-md-3 col-md-offset-1 ">
                                <?php if( Request::get('country') == "Australia"  ): ?>
                                    <?php $__currentLoopData = $rate_au; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <strong><p id = "2nd-Installment">$ <?php echo e($rate->third); ?></p></strong>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <strong><p id = "2nd-Installment">USD 4100</p></strong>
                                <?php endif; ?>
                            </div>
                           <div class = "col-xs-4 col-md-4">
                                <p>Third Installment **</p>
                            </div>
                        </div>
                        <div class = "row row-price">
                             <div class = "col-xs-4 col-xs-offset-2 col-md-3 col-md-offset-1 last-row last-row1">
                                <?php $__currentLoopData = $rate_au; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <strong><p id = "reservation">$ <?php echo e($rate->visa); ?></p></strong>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class = "col-xs-4 col-md-4 last-row">
                                <p>VISA and Insurance</p>
                            </div>
                        </div>
                        <?php endif; ?>
                        <div class = "col-xs-8 col-xs-offset-2 hidden-md hidden-xl hidden-lg">
                            <hr>
                        </div>
                        <div class = "row row-price">
                             <div class = "col-xs-4 col-xs-offset-2 col-md-3 col-md-offset-1">
                                 <?php if( Request::get('country') == "Australia"  ): ?>
                                    <?php $__currentLoopData = $rate_au; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <strong><p id = "2nd-Installment">$ <?php echo e($rate->total); ?></p></strong>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php else: ?>
                                <strong><p id = "3rd-Installment">USD 4550</p></strong>
                                <?php endif; ?>
                            </div>
                            <div class = "col-xs-4 col-md-4">
                                <p>Total Program Payment</p>
                            </div>
                        </div>
                        <div clas = "row row-price">
                            <div class = "col-md-6 col-md-offset-3 col-xs-11 col-xs-offset-1">
                                <?php if( Request::get('country') == "United States"  ): ?>
                                <a class = "btn locate-me" href = "/application?c=IUS"> Apply Now </a>
                                <?php else: ?>
                                <a class = "btn locate-me" href = "/application?c=IAU"> Apply Now </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <br>
                        <div class = "hidden-xs hidden-sm row row-price-legend">
                            <div class = "col-md-offset-1">
                                <?php if( Request::get('country') == "United States"  ): ?>
                                <p> * Money Back Guarantee </p>
                                <p> ** Money Back Guarantee + includes medical insurance </p>
                                
                                <strong><p class = "add-fees">Additional Fees:</p></strong>
                                <p>USD 180 SEVIS Fee and</p>
                                <p>USD 160 US embassy interview booking fee</p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class = "hidden-md hidden-lg hidden-xl row row-price-legend">
                            <div class = "text-center">
                                <?php if( Request::get('country') == "United States"  ): ?>
                                <p> * Money Back Guarantee </p>
                                <p> ** Money Back Guarantee + includes medical insurance </p>
                                <strong><p class = "add-fees">Additional Fees:</p></strong>
                                <p>USD 180 SEVIS Fee and</p>
                                <p>USD 160 US embassy interview booking fee</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class = "col-md-6 hidden-xs hidden-sm rate-image">
                         <img src="<?php echo e(URL::asset('image/photos/Price.jpg')); ?>" class="img img-responsive img-price" alt="Company Banner">
                    </div>
                </div>
            </div>
        <script>
            var first_installment = <?php echo json_encode($rate_us_1st->toArray()); ?>;
            var second_installment = <?php echo json_encode($rate_us_2nd->toArray()); ?>;
            var third_installment = <?php echo json_encode($rate_us_3rd->toArray()); ?>;
            var e = document.getElementById("duration");
            e.onchange = function() {
                var strUser = e.options[e.selectedIndex].value;
                if(strUser == "6"){
                    document.getElementById('1st-Installment').innerHTML = "PHP " + first_installment[1];
                    document.getElementById('2nd-Installment').innerHTML = "PHP " + second_installment[1];
                    document.getElementById('3rd-Installment').innerHTML = "PHP " + third_installment[1];
                }
                if(strUser == "7"){
                    document.getElementById('1st-Installment').innerHTML = "PHP " + first_installment[2];
                    document.getElementById('2nd-Installment').innerHTML = "PHP " + second_installment[2];
                    document.getElementById('3rd-Installment').innerHTML = "PHP " + third_installment[2];
                }   
                if(strUser == "8"){
                    document.getElementById('1st-Installment').innerHTML = "PHP " + first_installment[3];
                    document.getElementById('2nd-Installment').innerHTML = "PHP " + second_installment[3];
                    document.getElementById('3rd-Installment').innerHTML = "PHP " + third_installment[3];
                }   
                if(strUser == "9"){
                    document.getElementById('1st-Installment').innerHTML = "PHP " + first_installment[4];
                    document.getElementById('2nd-Installment').innerHTML = "PHP " + second_installment[4];
                    document.getElementById('3rd-Installment').innerHTML = "PHP " + third_installment[4];
                }  
                if(strUser == "10"){
                    document.getElementById('1st-Installment').innerHTML = "PHP " + first_installment[5];
                    document.getElementById('2nd-Installment').innerHTML = "PHP " + second_installment[5];
                    document.getElementById('3rd-Installment').innerHTML = "PHP " + third_installment[5];
                }   
                if(strUser == "11"){
                    document.getElementById('1st-Installment').innerHTML = "PHP " + first_installment[6];
                    document.getElementById('2nd-Installment').innerHTML = "PHP " + second_installment[6];
                    document.getElementById('3rd-Installment').innerHTML = "PHP " + third_installment[6];
                }  
                if(strUser == "12"){
                    document.getElementById('1st-Installment').innerHTML = "PHP " + first_installment[0];
                    document.getElementById('2nd-Installment').innerHTML = "PHP " + second_installment[0];
                    document.getElementById('3rd-Installment').innerHTML = "PHP " + third_installment[0];
                }
                if(strUser == "18"){
                    document.getElementById('1st-Installment').innerHTML = "PHP " + first_installment[7];
                    document.getElementById('2nd-Installment').innerHTML = "PHP " + second_installment[7];
                    document.getElementById('3rd-Installment').innerHTML = "PHP " + third_installment[7];
                }                     
            }
            var au_first_installment = <?php echo json_encode($rate_au_1st->toArray()); ?>;
            var au_second_installment = <?php echo json_encode($rate_au_2nd->toArray()); ?>;
            var au_third_installment = <?php echo json_encode($rate_au_3rd->toArray()); ?>;
            var l = document.getElementById("duration2");
            l.onchange = function() {
                var strUser = l.options[l.selectedIndex].value;
                if(strUser == "12"){
                    document.getElementById('1st-Installment').innerHTML = "PHP " + au_first_installment[0];
                    document.getElementById('2nd-Installment').innerHTML = "PHP " + au_second_installment[0];
                    document.getElementById('3rd-Installment').innerHTML = "PHP " + au_third_installment[0];
                }
            }
        </script>

 <!--testimony-->
        <div class="container">
            <div class="row testimony-header">
                <div class = "col-xs-12 col-md-4 col-md-offset-4 Top-header-message text-center">
                    <?php $__currentLoopData = $featuredimage_internship_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $first): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $first->third_static; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <?php if( Request::get('country') == "United States"): ?>
             <?php $__currentLoopData = $testimonial_us; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <?php else: ?>
            <?php $__currentLoopData = $testimonial_aus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <?php endif; ?>
        </div>
<!--end of testimony -->
<div class = "filler row" id = "filler"></div>
</form>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    $("#links > a").click(function(e) {
        e.preventDefault(); //so the browser doesn't follow the link

        $("#pageLoad").load(this.href, function() {
            //execute here after load completed
        });
    });
});
</script>
<script type="text/javascript">
    $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function (e) {
          
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
          
                e.preventDefault(); //so the browser doesn't follow the link

                $("#pageLoad").load(url, function() {
                    //execute here after load completed
                });
          }
          return false;
      });
    });
</script>

<script type="text/javascript">

  var deletePostUri = "<?php echo e(route('internshipcompany.index')); ?>";
  var gmarkers = [];
  var gaddress = <?php echo json_encode($internship_addresses->toArray()); ?>;
  var gname = <?php echo json_encode($internship_name->toArray()); ?>;
  var gdesc = <?php echo json_encode($internship_desc->toArray()); ?>;
  var gid = <?php echo json_encode($internship_id->toArray()); ?>;
  var image = <?php echo json_encode($internship_image->toArray()); ?>;
  var featured = <?php echo json_encode($internship_featured->toArray()); ?>;
  var lat = <?php echo json_encode($internship_latitude->toArray()); ?>;
  var long = <?php echo json_encode($internship_longtitude->toArray()); ?>;
  var $_GET = <?php echo json_encode($_GET); ?>;
  var eid = $_GET['eid'];
  var counter = 0 ;
  var infowindow ; 
  var map;
function initMap() {
    if(gaddress.length == 0)
    {   //map settings
         var myOptions = {
            zoom: 4,
            maxZoom: 10,
            minZoom: 5,
            center: {lat:-21.85827, lng:134.986323},
            mapTypeId: 'terrain'
        };
        //mobile map settings
        var myOptions2 = {
            zoom: 3,
            maxZoom: 10,
            minZoom: 3,
            center: {lat:-21.85827, lng:134.986323},
            mapTypeId: 'terrain'
        };
        
            map = new google.maps.Map($('#map')[0], myOptions);
            map2 = new google.maps.Map($('#map-mobile')[0], myOptions2);  
    }
    else{
      var elevator;
        var myOptions = {
            zoom: 4,
            minZoom: 4,
            center: new google.maps.LatLng(0, 0),
            mapTypeId: 'terrain'
        };
        var myOptions2 = {
            zoom: 3.4,
            minZoom: 3.4,
            center: new google.maps.LatLng(0, 0),
            mapTypeId: 'terrain',
            scrollable: true
        };
        //map settings
        map = new google.maps.Map($('#map')[0], myOptions);    
        map2 = new google.maps.Map($('#map-mobile')[0], myOptions2);    

        var bounds = new google.maps.LatLngBounds();
        map.setCenter(bounds.getCenter());
        map2.setCenter(bounds.getCenter());

       for (var x = 0; x < gaddress.length; x++) {
            var latlng = new google.maps.LatLng(lat[x], long[x]);     
            addMarker(map,bounds,latlng,featured[counter]);    
        } map.fitBounds(bounds); counter = 0;
        for (var x = 0; x < gaddress.length; x++) {
            var latlng = new google.maps.LatLng(lat[x], long[x]);     
            addMarker(map2,bounds,latlng,featured[counter]);    
        } map2.fitBounds(bounds); counter = 0;
    } 
}
    function addMarker(map,bounds, latlng,featured){
        if(featured == 'Yes'){
            var markers = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: "/image/icons/VIP-MAP-F.png"
            });
        }
        else{
            var markers = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: "/image/icons/VIP-MAP.png"
            });
        }
        gmarkers.push(markers);
        bounds.extend(markers.getPosition());
        
        addInfoWindow(markers);
    }
    function addInfoWindow(markers){
        var secretMessage = '<div id="container " class = "infowindow">'+
                                '<div class = "col-xs-4 image-container" >'+
                                    '<img src="image/uploaded_company_image/' + image[counter] + '" class="img map-img img-responsive" alt="Company Banner">' +
                                '</div>'+
                                '<div class = "col-xs-8" id="siteNotice">'+
                                    '<h1 id="firstHeading" class="firstHeading">' + gname[counter] +  '</h1>'+
                                    '<div id="bodyContent">'+
                                       '<p class = "map-description">'  + gdesc[counter].slice(0, 150) + '</p><br><br>'+
                                        '<a data-toggle="modal" data-target="#myModal" class = "btn locate-me2" href = "/internship?cid=' +  gid[counter] + '"> Learn More </a>' +
                                    '</div>'+
                                '</div>'+
                            '</div>';
        var infowindow = new google.maps.InfoWindow({
          content: secretMessage
        });
        google.maps.event.addListener(markers,'click',function() {
          map.setZoom(16);
          map.setCenter(markers.getPosition());
          infowindow.open(markers.get('map'), markers);
        });
        google.maps.event.addListener(markers,'click',function() {
          map2.setZoom(16);
          map2.setCenter(markers.getPosition());
          infowindow.open(markers.get('map2'), markers);
        });
        if(eid !== undefined){
            if(gid[counter] == eid)
            {
                map.setCenter(gmarkers[counter].getPosition());
                infowindow.open(map, gmarkers[counter]);
            }
        }
        counter++;
    }  
    
    

</script>

<script async defer src="http://maps.google.com/maps/api/js?key=AIzaSyAzQQYFrug-yB5tVMh7KL6av4U1SegZcec&callback=initMap">
 </script>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>