<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-115499255-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-115499255-1');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, 
    maximum-scale=1.0, user-scalable=no" /> 
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css" />
    <title>Vision International</title>
    <link rel="stylesheet" href="<?php echo e(asset('/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/master.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php echo $__env->yieldContent('page-css'); ?>
</head>
<body>
    <div class="container-fluid content parallax">
        <?php echo $__env->yieldContent('content'); ?>

        <?php if(Request::getPathInfo() == '/application'): ?>
            <?php echo $__env->make('layouts.prefooter-applynow', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php elseif(Request::getPathInfo()  == '/aboutus'): ?>
            <?php echo $__env->make('layouts.prefooter-about', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php else: ?>
            <?php echo $__env->make('layouts.prefooter', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php endif; ?>
        <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
    


<script>
    $.fn.followTo = function (pos) {
    var $this = this,
        $window = $(window);

    $window.scroll(function (e) {
        if ($window.scrollTop() > pos) {
            $this.css({
                position: 'absolute',
                top: pos,
            });
        } else {
            $this.css({
                position: 'fixed',
                top: 50,
            });
        }
    });
};

$('.sticky').followTo(3200);
</script>
<script type="text/javascript" charset="utf8" src="<?php echo e(asset('/js/jquery-3.2.1.min.js')); ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo e(asset('/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo e(asset('/js/jquery.dataTables.min.js')); ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo e(asset('/js/dataTables.bootstrap.min.js')); ?>"></script>
<script type="text/javascript" charset="utf8" src="<?php echo e(asset('/js/dataTables.buttons.min.js')); ?>"></script>



</body>


</html>