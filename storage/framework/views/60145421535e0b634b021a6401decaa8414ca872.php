 <?php $__env->startSection('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/image-preview.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('css/blog.css')); ?>"> <?php $__env->stopSection(); ?> <?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php $__env->startSection('content'); ?>

<div class="whole-page">

        <?php $__currentLoopData = $featuredimage_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featured): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <img src="<?php echo e(URL::asset('image/uploaded_featured_image')); ?>/<?php echo e($featured->main_image); ?>" class="img img-responsive img-rounded header"
            alt="Company Banner">

        <img src="<?php echo e(URL::asset('image/Arrow.png')); ?>" class="img img-border" alt="Company Banner">
        <img src="<?php echo e(URL::asset('image/img-line.png')); ?>" class="img img-responsive img-line" alt="Company Banner">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class = "text-inside-header-picture hidden-lg hidden-md hidden-xl">
        <div class = "dynamic-text-container">
            <div class ="col-xs-12 dynamic-text-container-box">
                <h1> Blogs </h1>
            </div>
        </div>
    </div>
    <div class="col-lg-10 col-lg-offset-1 row back-to-blog">
        <a href="/blog" class="back">
            <h3> Back to Blog </h3>
        </a>
    </div>
  <div class="container">
        <div class="main-page">
            <div class="row">
    
    <div class="col-xs-12 col-sm-8 blog-content">
        <div class="container-fluid image-blog">
            <div class="row">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php $__currentLoopData = $blog->mainimageupload; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mainblogimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo e($loop->index); ?>" class="<?php echo e($loop->first ? 'active' : ''); ?>"></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <?php $__currentLoopData = $blog->mainimageupload; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mainblogimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="item <?php echo e($loop->first ? ' active' : ''); ?>">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?php echo e(URL::asset('image/uploaded_main_blog_image')); ?>/<?php echo e($mainblogimage->image_name); ?>" class="main-img-reponsive img-responsive "
                                        alt="Company Banner">
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <!-- end of carousel -->
        </div>
        <div class="row">
            <div class="col-xs-12 left-main-title2 ">
                <p>
                    <strong><?php echo e($blog->title); ?></strong>
                </p>
            </div>
            <div class="col-xs-12 left-main-title2 ">
                <p> <?php $__currentLoopData = $blog->author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($blogs->name); ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> | <?php echo e(Carbon\Carbon::parse($blog->date)->toFormattedDateString()); ?></p>
            </div>
            <div class="col-xs-12 left-main-title2 ">
                <p class="event-description"><?php echo $blog->body; ?></p>
            </div>
            <div class="col-xs-12 hr-main-title-blog ">
                <hr>
            </div>
        </div>

            
            <div class="row">
                <div class="col-xs-6 share-main-title ">
                    <div class = "col-md-6 col-xs-12">
                        <p>Share This Article: </p>
                    </div>
                    <div class = "col-md-6 col-xs-12">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(Request::fullUrl())); ?>" target="_blank">
                            <i class="fa fa-facebook-f " style="font-size:14px; padding-right:1%; color:black;"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(Request::fullUrl())); ?>" target="_blank">
                            <i class="fa fa-twitter " style="font-size:14px; padding-right:1%; color:black;"></i>
                        </a>
                        <a href="https://plus.google.com/share?url=<?php echo e(urlencode(Request::fullUrl())); ?>" target="_blank">
                            <i class="fa fa-google-plus " style="font-size:14px; color:black;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-xs-6">
                    <span>Categories: <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php echo e($categories_list->category_name); ?>, <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </span>
                </div>
            </div>
            

        <br>
        <br> 
        <div class="container col-xs-12  about-author" style="margin-top: 20px">
            <?php $__currentLoopData = $blog->author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row author-content">
                <div class="col-xs-4">
                    <img src="<?php echo e(URL::asset('storage/upload_author_image')); ?>/<?php echo e($blogs->image); ?>" class="img-thumbnail img-responsive " alt="No Author">
                </div>
                <div class="col-xs-8">
                     <p><?php echo e($blogs->description); ?></p>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
 
       <?php if($previousblog != Null && $nextblog != Null): ?>
        <div class="row">
            <div class="container col-xs-12 next-previous-container">
                <div class="col-xs-6 left">
                    <div class="text-left arrow">
                        <?php if($previousblog != Null): ?>
                        <a href="<?php echo e($previousblog->id); ?>" class="text-left">
                            < Previous</a>
                                <br>
                                <a href="<?php echo e($previousblog->id); ?>" class="text-left">
                                    <h4><?php echo e($previousblog->title); ?></h4>
                                </a>
                                <?php endif; ?>
                    </div>
                </div>
                <div class="col-xs-6 right">
                    <div class="text-right arrow">
                        <?php if($nextblog != Null): ?>
                        <a href="<?php echo e($nextblog->id); ?>" class="text-right">Next ></a>
                        <br>
                        <a href="<?php echo e($nextblog->id); ?>" class="text-right">
                            <h4><?php echo e($nextblog->title); ?></h4>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
        

    </div>
     
    <div class="hidden-xs col-sm-4 categories-content">
        <div class="col-xs-12 col-md-11 col-md-offset-1">
            <table class="table table-categories table-borderless table-hover">
                <div class="red-title">
                    <h1>CATEGORIES</h1>
                </div>
                <tbody>
                    
                <?php $__currentLoopData = $category_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr class='clickable-row' data-href='/blog?category_id=<?php echo e($category->id); ?>'>
                    <td><?php echo e($category->category_name); ?></td>
                    <td>

                            <i style="color:black;"><?php echo e($category->blogcategorytable_count); ?></i>
               
                    </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <table class="table table-categories table-borderless table-hover">
                <div class="red-title">
                    <h1>RECENT POST</h1>
                </div>
                <tbody>
                    <?php $__currentLoopData = $blog_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class='clickable-row'>
                        <td>
                            <div id="carousel-example-generic" class="recent-carousel carousel slide" data-ride="carousel">


                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <?php $__currentLoopData = $blog->mainimageupload; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mainblogimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <div class="item <?php echo e($loop->first ? ' active' : ''); ?>">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="<?php echo e(URL::asset('image/uploaded_main_blog_image')); ?>/<?php echo e($mainblogimage->image_name); ?>" class="caro-img-reponsive img-responsive "
                                                    alt="Company Banner">
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <!-- end of carousel -->
                            </div>
                        </td>

                        <td>
                            <p> <?php $__currentLoopData = $blog->blogcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($loop->first): ?> <?php echo e($blogz->categorylist->category_name); ?> <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </p>
                            <a href="/blog/<?php echo e($blog->id); ?>">
                                <i style="color:black;"><?php echo e($blog->title); ?></i>
                            </a>
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
    



</div>
</div>
</div>


<div class="row" style = "padding-bottom: 5%;"></div>










<script type="text/javascript" charset="utf8" src="<?php echo e(asset('/js/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript">
    var popupMeta = {
        width: 400,
        height: 400
    }
    $(document).on('click', '.social-share', function (event) {
        event.preventDefault();

        var vPosition = Math.floor(($(window).width() - popupMeta.width) / 2),
            hPosition = Math.floor(($(window).height() - popupMeta.height) / 2);

        var url = $(this).attr('href');
        var popup = window.open(url, 'Social Share',
            'width=' + popupMeta.width + ',height=' + popupMeta.height +
            ',left=' + vpPsition + ',top=' + hPosition +
            ',location=0,menubar=0,toolbar=0,status=0,scrollbars=1,resizable=1');

        if (popup) {
            popup.focus();
            return false;
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