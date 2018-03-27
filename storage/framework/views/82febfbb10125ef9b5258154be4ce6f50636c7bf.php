<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vision International</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bower includes -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bower_bundle.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bundle.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap-multiselect.css')); ?>">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <!-- Google Font -->
    <link rel="stylesheet"
          href="<?php echo e(asset('fonts/googlefonts.css')); ?>">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <div href="index2.html" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">VI</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Vision International</span>
        </div>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <!-- // get current route -->
    <?php $currentRoutePrefix = request()->route()->getPrefix(); ?>
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">Main Navigation</li>
                <li class="treeview <?php echo e(($currentRoutePrefix === '/admin') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="">
                            <a href="<?php echo e(route('admin.home')); ?>">
                                <i class="fa fa-circle-o"></i>
                                Home
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/workcompany') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-building"></i>
                        <span>US Work & Travel</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('workcompany.list')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('workcompany.new')); ?>">
                                <i class="fa fa-plus-circle"></i>
                                New
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/internshipcompany') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-building"></i>
                        <span>US Internship/Trainee</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('internshipcompany.list')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('internshipcompany.new')); ?>">
                                <i class="fa fa-plus-circle"></i>
                                New
                            </a>

                            <li>
                        </li>
                        </li>
                    </ul>
                </li>
                <hr>


                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/aboutus') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-address-card"></i>
                        <span>About Us</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('aboutus.adminIndex')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('aboutus.adminCreate')); ?>">
                                <i class="fa fa-plus-circle"></i>
                                New
                            </a>

                            <li>
                        </li>
                        </li>
                    </ul>
                </li>
                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/blog') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-bold"></i>
                        <span>Blog</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('blog.index')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('blog.create')); ?>">
                                <i class="fa fa-plus-circle"></i>
                                New
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/blog') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-calendar"></i>
                        <span>Event</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('event.list')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                    </ul>
                </li>
              <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/news') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-paper-plane"></i>
                        <span>News</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('news.index')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('news.create')); ?>">
                                <i class="fa fa-plus-circle"></i>
                                New
                            </a>
                        </li>
                    </ul>
                </li> 
                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/faq') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-book"></i>
                        <span>FAQ</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('faq.adminIndex')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('faq.adminCreate')); ?>">
                                <i class="fa fa-plus-circle"></i>
                                New
                            </a>

                            <li>
                        </li>
                        </li>
                    </ul>
                </li>
                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/media') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-tv"></i>
                        <span>Media</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('media.adminIndex')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('media.adminCreate')); ?>">
                                <i class="fa fa-plus-circle"></i>
                                New
                            </a>
                        </li>
                    </ul>
                </li> 
                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/application') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-envelope"></i>
                        <span>Applications</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('application.list')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                    </ul>
                </li>

                <hr>
                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/featuredimage') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-image"></i>
                        <span>  Featured Images   </span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    
                    <ul class="treeview-menu">
                    <?php $__currentLoopData = $featuredimage_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $featuredimage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('featuredimage.edit', $featuredimage->id)); ?>">
                                <i class="fa fa-list"></i>
                                <td><?php echo e($featuredimage->page_name); ?></td>
                            </a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('testimonials.list')); ?>">
                                <i class="fa fa-list"></i>
                                <td>Testimonials</td>
                            </a>

                        </li>

                        <li>
                            <a href="<?php echo e(route('programs.list')); ?>">
                                <i class="fa fa-list"></i>
                                <td>Promo</td>
                            </a>

                        </li>

                        <li>
                            <a href="<?php echo e(route('counter.adminEdit', 1)); ?>">
                                <i class="fa fa-list"></i>
                                <td>Counter</td>
                            </a>

                        </li>

                    </ul>
                   
                </li>
                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/pagestep') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-step-forward"></i>
                        <span>Page Steps</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('page_step.adminIndex')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                    </ul>
                </li>
                
                <hr>
                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/rate') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-credit-card"></i>
                        <span>Rates</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('rate.adminIndex')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/author') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-user-circle"></i>
                        <span>Author</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('author.list')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('author.create')); ?>">
                                <i class="fa fa-plus-circle"></i>
                                New
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/category') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-list-ol"></i>
                        <span>Category</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('category.list')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/opportunity') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-ambulance"></i>
                        <span>Opportunity</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('opportunity.list')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="treeview <?php echo e(($currentRoutePrefix === 'admin/qualification') ? 'active' : ''); ?>">
                    <a href="#">
                        <i class="fa fa-key"></i>
                        <span>Qualification</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="<?php echo e(route('qualification.list')); ?>">
                                <i class="fa fa-list"></i>
                                List
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li class="">
                    <a href="#">
                        <i class="fa fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo e(route('logout')); ?>">
                        <i class="fa fa-sign-out"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php echo $__env->yieldContent('content-header'); ?>

        <!-- Main content -->
        <?php echo $__env->yieldContent('content-main'); ?>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
        </div>
    </footer>

    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>

<script src="<?php echo e(asset('js/bundle.js')); ?>"></script>
<script src="<?php echo e(asset('/js/bootstrap-multiselect.js')); ?>"></script> 
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html>
