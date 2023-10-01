
<?php $__env->startSection('title',$movie_name); ?>
<?php $__env->startSection('body'); ?>

    <!-- page section start -->
    <div class="container-md">
        <div class="row">
            <div class="col-md-6">
                <div class="section_title">
                    <h2 class="my-4 heading_1">Movie Detail</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                
                <?php if(!$data->image==NULL): ?>
                <img src="<?php echo e(url($data->image)); ?>" alt="<?php echo e($data->movie_name); ?>" class="img-fluid">
                <?php endif; ?>
            </div>
            <div class="col-md-8">
                <h1 class="movie_title"><span class="">Title : </span> <?php echo e($data->movie_name); ?></h1>
                <p class="movie_description"><span class="title_span">Description :</span> <?php echo e($data->description); ?></p>
				<p class="movie_description"><span class="title_span">Director: </span>
                    <?php $__currentLoopData = movie_director($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $director): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $director = obj($director); ?>
                     <?php echo e($director->director_name); ?> ,&nbsp;
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>
				<p class="movie_description"><span class="title_span">Cast: </span>
                    <?php $__currentLoopData = movie_cast($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie_cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(obj($movie_cast)->cast_name); ?> ,&nbsp;
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>
				<p class="movie_description"><span class="title_span">Producer: </span>
                    <?php $__currentLoopData = movie_producer($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodecure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(obj($prodecure)->producers_name); ?> ,&nbsp;
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>
				<p class="movie_description"><span class="title_span">Distributor: </span>
                  <?php echo e(movie_distributor($data->distributor_code)->distributor_name); ?>

                </p>
				<p class="movie_description"><span class="title_span">Production: </span> <?php echo e($data->production_house); ?> </p>	
            </div>
        </div>
    </div>
    <!-- page section stop -->
	<!-- ticket system enabel start -->
	<div class="container-md">
		<div class="row">
			<div class="col-md-4">
				<div class="section_title">
					<h2 class="my-4 heading_1">Show Schedule</h2>
				</div>
			</div>
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6"></div>
					<div class="col-md-6">
						<ul class="showtypes">
							<li class="text-white bg-success">Available</li>
							<li class="bg-warning text-white">Fast filling</li>
							<li class="bg-danger text-white">Slod out</li>
							<li class="bg-secondary text-white">Expired</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- audritimu -->
		<?php $__empty_1 = true; $__currentLoopData = movie_screen($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $moviescreen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
		<?php $moviescreen = obj($moviescreen); ?>
		<div class="row">
			<div class="col-md-3">
				<div class="aud_box">
					<h5><?php echo e(screen_name($moviescreen->screen_id)->screen_name); ?></h5>
				</div>
			</div>
			<div class="col-md-9">
				<ul class="audlist_time">
					<?php $__currentLoopData = movie_show($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movieshow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $movieshow = obj($movieshow);
					// dd(show_seat($movieshow->shows_id));
					// dd(screen_name($moviescreen->screen_id)->screen_code);
					?>
						
						<?php if(show_name($movieshow->shows_id)->screen_code == screen_name($moviescreen->screen_id)->screen_code): ?>
							<li><a href="<?php echo e(url('single/seat/'.$movieshow->id)); ?>" class="btn btn-outline-success"><?php echo e(show_name($movieshow->shows_id)->show_time); ?></a></li>
							<?php endif; ?>
							
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					
				</ul>
			</div>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
		<div class="row">
			<div class="col-md-12">
				No Data Found
			</div>
		</div>
		<?php endif; ?>
		
	</div>
	<!-- ticket system enabel stop -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/single/single.blade.php ENDPATH**/ ?>