
<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('page_title','Dashboard'); ?>
<?php $__env->startSection('body'); ?>
	
		
		<div class="insights">
			<div class="sales">
				 <span class="material-symbols-sharp">analytics</span>
				 <div class="middle">
				 	<div class="left">
				 		<h3>total Booking</h3>
				 		<h1><?php echo e(total_order()); ?></h1>
				 	</div>
				 	<div class="progress">
				 		<svg>
				 			<circle cx="38" cy="38" r="36"></circle>
				 		</svg>
				 		<div class="number">
				 			<p><?php echo e(total_order()); ?></p>
				 		</div>
				 	</div>
				 </div> 
				 <small class="text-muted">last 24 hour</small>
			</div>
			<!-- end of sales -->
			<div class="expensive">
				 <span class="material-symbols-sharp">bar_chart</span>
				 <div class="middle">
				 	<div class="left">
				 		<h3>total Movie</h3>
				 		<h1><?php echo e(total_movie()); ?></h1>
				 	</div>
				 	<div class="progress">
				 		<svg>
				 			<circle cx="38" cy="38" r="36"></circle>
				 		</svg>
				 		<div class="number">
				 			<p><?php echo e(total_movie()); ?></p>
				 		</div>
				 	</div>
				 </div> 
				 <small class="text-muted">last 24 hour</small>
			</div>
			<!-- end of expensive -->
			<div class="income">
				 <span class="material-symbols-sharp">person</span>
				 <div class="middle">
				 	<div class="left">
				 		<h3>total Users</h3>
				 		<h1><?php echo e(total_user()); ?></h1>
				 	</div>
				 	<div class="progress">
				 		<svg>
				 			<circle cx="38" cy="38" r="36"></circle>
				 		</svg>
				 		<div class="number">
				 			<p><?php echo e(total_user()); ?></p>
				 		</div>
				 	</div>
				 </div> 
				 <small class="text-muted">last 24 hour</small>
			</div>
			<!-- end of sales -->
		</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/index.blade.php ENDPATH**/ ?>