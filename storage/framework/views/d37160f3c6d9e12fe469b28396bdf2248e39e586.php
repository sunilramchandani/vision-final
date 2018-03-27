 <?php $__env->startSection('page-css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/media.css')); ?>"> <?php $__env->stopSection(); ?> <?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?> <?php $__env->startSection('content'); ?>
<!--Header Text -->
<div class="container text-center">
	<div class="col-xs-12 ">
		<h4>Media</h4>
	</div>
	<div class="col-xs-4 col-xs-offset-4 header-desc">
		<p>Curabitor blandit tempus portitor. Vivamus sagtiis lacus vel augue laoreet</p>
	</div>
</div>

<!--media -->
<div class="container">
	<?php $__currentLoopData = $media_table; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-xs-10 col-xs-offset-1 media-container">
		<?php if($media->media_type == "Video"): ?>
		<div class="col-xs-4 media-video">
			<iframe class="video-class" src="https://www.youtube.com/embed/<?php echo e($media->media_link); ?>" frameborder="0" allowfullscreen>
			</iframe>
		</div>
		<?php else: ?>
		<a href="<?php echo e($media->media_album_link); ?>">
		<div class="col-xs-4 photo-container">
			<img src="https://scontent.fmnl13-1.fna.fbcdn.net/v/t1.0-9/23755155_1551868068238281_4354170624360768396_n.jpg?oh=f7223d0cdf4a3783ecc86610d8fa3181&oe=5B4A18A0"
			    class="img img-responsive media-photo">
		</div>
</a>
		<?php endif; ?>


					
					<?php if($media->media_type == "Video"): ?>
						<div class="col-xs-7 media-description">
							<div class="col-xs-12">
								<p class="gray">Video</p>
								<h4 class="title"> <?php echo e($media->media_title); ?> </h4>
								<p> <?php echo e($media->media_description); ?> </p>
								<div class="row bottom-media">
									<div class="col-xs-4" style="padding: 0;">
										<?php $__currentLoopData = $media->author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<p>BY:
											<strong> <?php echo e($name->name); ?> </strong>
										</p>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
									<div class="col-xs-6">
										<p> <?php echo e(Carbon\Carbon::parse($media->created_at)->toFormattedDateString()); ?></p>
									</div>
								</div>
							</div>
						</div>
						
					<?php else: ?>

					<a href="<?php echo e($media->media_album_link); ?>">
						<div class="col-xs-7 media-description">
							<div class="col-xs-12">
								<p class="gray">Photo</p>
								<h4 class="title"> <?php echo e($media->media_title); ?> </h4>
								<p> <?php echo e($media->media_description); ?> </p>
								<div class="row bottom-media">
									<div class="col-xs-4" style="padding: 0;">
										<?php $__currentLoopData = $media->author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<p>BY:
											<strong> <?php echo e($name->name); ?> </strong>
										</p>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</div>
									<div class="col-xs-6">
										<p> <?php echo e(Carbon\Carbon::parse($media->created_at)->toFormattedDateString()); ?></p>
									</div>
								</div>
							</div>
						</div>
					</a>

						<?php endif; ?>


	</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<div class="row" style="padding-bottom: 5%;"></div>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>