<div id='pageLoad'>



<?php $__env->startSection('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/internship-company.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<form action="" method="post" role="form">
 <?php echo e(csrf_field()); ?>

<div class = "whole-page">
<?php $__currentLoopData = $featuredimage_internship; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->main_image); ?>" class="img img-responsive img-rounded header" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/Arrow.png')); ?>" class="img img-border" alt="Company Banner">
    <img src="<?php echo e(URL::asset('image/img-line.png')); ?>" class="img img-responsive img-line" alt="Company Banner">
    <div class = "text-inside-header-picture">
        <div class = "dynamic-text-container">
            <div class ="col-md-5 col-xs-12 dynamic-text-container-box">
                <?php if( Request::get('country') == "United States"  ): ?>
                <h4> UNITED STATES </h4>
                <?php else: ?>
                <h4> Australia </h4>
                <?php endif; ?>
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
    <div class = " row">
        <div class = "col-xs-12 col-md-4 col-md-offset-4 Top-header-message text-center">
            <?php $__currentLoopData = $featuredimage_internship; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $first): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $first->first_static; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class = "body-content" id= "body-content">
        <div class = "row hidden-xs hidden-sm filter-top">
            <div class = "hidden-xs hidden-sm col-md-10 filter-main">
                <div class = "col-xs-12">
                    <div class="dropdown">
                      <a class="dropbtn-filter"><strong>State </strong><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                      <div class="dropdown-content-filler">
                      <div id="links">
                      <?php if( Request::get('state')  ): ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/workcompany?state=<?php echo e($filter->state); ?>"><?php echo e($filter->state); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/workcompany?state=<?php echo e($company->state); ?>"><?php echo e($company->state); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <div class="dropdown">
                      <a class="dropbtn-filter"><strong>Start Dates </strong><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                      <div class="dropdown-content-filler">
                      <div id="links">
                         <?php if( Request::get('state')  ): ?>
                            <?php $__currentLoopData = $internship_filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $filter->work_duration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/workcompany?duration=<?php echo e($duration->duration_start_date); ?>"><?php echo e($duration->duration_start_date); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <?php $__currentLoopData = $internshipCompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php $__currentLoopData = $company->work_duration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/workcompany?duration=<?php echo e($duration->duration_start_date); ?>"><?php echo e($duration->duration_start_date); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <div class="dropdown">
                        <a class="dropbtn-filter"><strong>Industry </strong><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                        <div class="dropdown-content-filler">
                          <div id="links">
                          <a href="/workcompany">All</a>
                          <?php if( Request::get('industry_name')  ): ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_industry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/workcompany?industry_name=<?php echo e($filter->industry_name); ?>"><?php echo e($filter->industry_name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_industry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/workcompany?industry_name=<?php echo e($company->industry_name); ?>"><?php echo e($company->industry_name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown">
                      <a class="dropbtn-filter"><strong>Start Date </strong><i class="fa fa-angle-down" aria-hidden="true"></i></a>
                      <div class="dropdown-content-filler">
                      <div id="links">
                      <?php if( Request::get('duration')  ): ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/workcompany?duration=<?php echo e($filter->start_date); ?>"><?php echo e($filter->start_date); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <?php $__currentLoopData = $internshipCompany_table_filter_state; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="/workcompany?duration=<?php echo e($company->start_date); ?>"><?php echo e($company->start_date); ?></a>
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
                    <?php $__currentLoopData = $internship_filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                       <option value ="workcompany?state=<?php echo e($filter->state); ?>"><?php echo e($filter->state); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php $__currentLoopData = $internshipCompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value ="workcompany?state=<?php echo e($company->state); ?>"><?php echo e($company->state); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </select>
        </div>
        <div class = "col-xs-6 form-group">
            <select class = "form-control" name="internship_industry" id="">
                <option value="" disabled selected>Select</option>
                <?php if( Request::get('state')  ): ?>
                     <?php $__currentLoopData = $internship_filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $filter->work_industry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value ="workcompany?state={$industry->industry_name}}"><?php echo e($industry->industry_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                    <?php $__currentLoopData = $internshipCompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $company->work_industry; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $industry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value ="workcompany?state=<?php echo e($industry->industry_name); ?>"><?php echo e($industry->industry_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $internship_filter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $filter->work_duration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value ="workcompany?state=<?php echo e($duration->duration_start_date); ?>"><?php echo e($duration->duration_start_date); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                 
                     <?php $__currentLoopData = $internshipCompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $company->work_duration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value ="workcompany?state=<?php echo e($duration->duration_start_date); ?>"><?php echo e($duration->duration_start_date); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                        <img src="<?php echo e(URL::asset('image\uploaded_workcompany_image')); ?>/<?php echo e($company->image); ?>" class="img img-responsive company-head" alt="Company Banner">
                    </div>
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
        <div class = "col-xs-12 hidden-lg hidden-md side-content">
        <?php $__currentLoopData = $internshipCompany_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class = "col-xs-6 ">
                <div class = "col-xs-12 info-container">
                    <div class = "row company-picture">
                        <img src="<?php echo e(URL::asset('image\uploaded_workcompany_image')); ?>/<?php echo e($company->image); ?>" class="img img-responsive company-head" alt="Company Banner">
                    </div>
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
                    <?php $__currentLoopData = $featuredimage_internship; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $first): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            <div class = "col-xs-12">
                <div class = "row rate-container">
                        <div class = "col-xs-12 col-md-6 left-rate">
                            <div class = "text-left-side ">
                                <h2 class = "gradient"> What's the rate? </h2>
                                <h3 class = "gradient1"> There is plenty to experience! </h3>
                                <br>
                                <h4>Choose your season</h4>
                                <br>
                            </div>
                            <div class = "row row-price">
                                <!--Spring -->
                                <div class = "col-xs-6 spring">
                                    <div class = "col-xs-3 spring-bg">
                                    </div>
                                    <div class = "col-xs-9 ">
                                        <p class = "spring-text"><strong>Spring</strong><br>March - June</p>
                                    </div>
                                </div>
                                <!--Summer -->
                               <div class = "col-xs-6 summer">
                                    <div class = "col-xs-3 summer-bg">
                                    </div>
                                    <div class = "col-xs-9 ">
                                        <p class = "summer-text"><strong>Summer</strong><br>June - September</p>
                                    </div>
                                </div>
                            </div>
                            <div class = "row row-price pads">
                                 <div class = "col-xs-5 col-md-4">
                                    <strong><p id = "reservation">PHP 1000</p></strong>
                                </div>
                                <div class = " col-xs-7 col-md-6">
                                    <p>Reservation</p>
                                </div>
                            </div>
                            <div class = "row row-price">
                                 <div class = "col-xs-5 col-md-4">
                                    <strong><p id = "1st-Installment">USD 450</p></strong>
                                </div>
                                <div class = "col-xs-7 col-md-7">
                                    <p>First Installment *</p>
                                </div>
                            </div>
                            <div class = "row row-price">
                                <div class = "col-xs-5 col-md-4 last-row last-row1">
                                    <strong><p id = "2nd-Installment">USD 3100</p></strong>
                                </div>
                               <div class = "col-xs-7 col-md-6 last-row">
                                    <p>Second Installment *</p>
                                </div>
                            </div>
                            <div class = "hidden-md hidden-lg hidden-xl">
                                <hr>
                            </div>
                            <div class = "row row-price">
                                 <div class = "col-xs-5 col-md-4">
                                    <strong><p id = "3rd-Installment">USD 3550</p></strong>
                                </div>
                                <div class = "col-xs-7 col-md-6">
                                    <p>Total Program Payment**</p>
                                </div>
                            </div>

                            <div clas = "row row-price">
                                <div class = "col-md-9 col-md-offset-2 col-xs-12">
                                    <a class = "btn locate-me" href = "/application?c=WUS"> Apply Now </a>
                                </div>
                            </div>
                            <br>
                            <div class = "row row-price-legend">
                                <p> * Money Back Guarantee<br> **   Airfare NOT included</p>
                                <strong><p class = "add-fees">Additional Fees:</p></strong>
                                <p>USD 35 SEVIS Fee</p>
                                <p>USD 160 US embassy interview booking fee</p>
                            </div>
                        </div>
                        <div class = "col-md-6 hidden-xs hidden-sm rate-image">
                             <img src="<?php echo e(URL::asset('image/photos/Price.jpg')); ?>" class="img img-responsive img-price" alt="Company Banner">
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            var first_installment = <?php echo json_encode($rate_us_1st->toArray()); ?>;
            var second_installment = <?php echo json_encode($rate_us_2nd->toArray()); ?>;
            var third_installment = <?php echo json_encode($rate_us_3rd->toArray()); ?>;
            $(".spring").hover(function(){
                $(".spring-bg").css("background-image", 'url("/image/icons/Spring-H.png")');
                $(".summer-bg").css("background-image", 'url("/image/icons/Summer.png")');
                $(".spring-text").css("color", '#f4645f');
                $(".summer-text").css("color", 'black');
                document.getElementById('1st-Installment').innerHTML = "PHP " + first_installment[0];
                document.getElementById('2nd-Installment').innerHTML = "PHP " + second_installment[0];
                document.getElementById('3rd-Installment').innerHTML = "PHP " + third_installment[0];
                }, function(){
            });

           $(".summer").hover(function(){
                $(".summer-bg").css("background-image", 'url("/image/icons/Summer-H.png")');
                $(".spring-bg").css("background-image", 'url("/image/icons/Spring.png")');
                $(".summer-text").css("color", '#f4645f');
                $(".spring-text").css("color", 'black');
                document.getElementById('1st-Installment').innerHTML = "USD " + first_installment[1];
                document.getElementById('2nd-Installment').innerHTML = "USD " + second_installment[1];
                document.getElementById('3rd-Installment').innerHTML = "USD " + third_installment[1];
            }, function(){
            });
        </script>
        <!--Testimony-->

        <div class="container">
            <div class="row testimony-header">
                <div class = "col-xs-12 col-md-4 col-md-offset-4 Top-header-message text-center">
                    <?php $__currentLoopData = $featuredimage_internship; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $first): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $first->third_static; ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<div class = "filler row" id = "filler">
</div>
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

  var deletePostUri = "<?php echo e(route('workcompany.index')); ?>";
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
    if(gaddress.length < 5)
    {
         var myOptions = {
            zoom: 4,
            maxZoom: 16,
            minZoom: 4,
            center: {lat:37.697948, lng:-97.314835},
            mapTypeId: 'terrain'
        };
        var myOptions2 = {
            zoom: 3,
            minZoom: 3,
            center: {lat:37.697948, lng:-97.314835},
            mapTypeId: 'terrain'
        };
        //map settings
            map = new google.maps.Map($('#map')[0], myOptions);    
            map2 = new google.maps.Map($('#map-mobile')[0], myOptions2);   

        var bounds = new google.maps.LatLngBounds();

       for (var x = 0; x < gaddress.length; x++) {
            var latlng = new google.maps.LatLng(lat[x], long[x]);     
            addMarker(map,bounds,latlng,featured[counter]);    
        }counter = 0;
        for (var x = 0; x < gaddress.length; x++) {
            var latlng = new google.maps.LatLng(lat[x], long[x]);     
            addMarker(map2,bounds,latlng,featured[counter]);    
        }counter = 0;
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
            zoom: 3,
            minZoom: 3,
            center: new google.maps.LatLng(0, 0),
            mapTypeId: 'terrain'
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
                    icon: "/image/icons/vip_map-01-Featured.png"
            });
        }
        else{
            var markers = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: "/image/icons/vip_map.png"
            });
        }
        gmarkers.push(markers);
        bounds.extend(markers.getPosition());
        
        addInfoWindow(markers);
    }
    function addInfoWindow(markers){
        var secretMessage = '<div id="container " class = "infowindow">'+
                                '<div class = "col-xs-4 image-container" >'+
                                    '<img src="image/uploaded_workcompany_image/' + image[counter] + '" class="img map-img img-responsive" alt="Company Banner">' +
                                '</div>'+
                                '<div class = "col-xs-8" id="siteNotice">'+
                                    '<h1 id="firstHeading" class="firstHeading">' + gname[counter] +  '</h1>'+
                                    '<div id="bodyContent">'+
                                       '<p class = "map-description">'  + gdesc[counter].slice(0, 150) + '</p><br><br>'+
                                        '<a data-toggle="modal" data-target="#myModal" class = "btn locate-me2" href = "/work?cid=' +  gid[counter] + '"> Learn More </a>' +
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