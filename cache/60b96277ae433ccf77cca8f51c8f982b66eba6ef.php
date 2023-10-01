
<?php $__env->startSection('title','home'); ?>
<?php $__env->startSection('body'); ?>

<section>
    <div class="container-main">
        <div class="owl-slider">
            <div class="owl-carousel owl-theme">
                <?php $__empty_1 = true; $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slideritem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php $slideritem= obj($slideritem); ?>
                <div class="item owl_slider_items">
                    <img src="<?php echo e(url($slideritem->image)); ?>" alt="<?php echo e($slideritem->slider_name); ?>" class="owl_slider_img">
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="item owl_slider_items">
                        No Data Found
                    </div>
                <?php endif; ?>
               
                
            </div>
        </div>
    </div>
    
</section>

<!-- section now showing -->
<section id="section_now_showing" class="container-md">
    <div class="section_title">
        <h2 class="my-4 heading_1">Now Showing</h2>
        <input type="date">
    </div>
    <div class="section_content">
        <div class="row">
            <?php $__empty_1 = true; $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php $data = obj($data); ?>
            <div class="section_content_img col-md-4">
                <?php if(!$data->image==NULL): ?>
                <img src="<?php echo e(url($data->image)); ?>" alt="<?php echo e($data->movie_name); ?>" class="img-fluid">
                <?php endif; ?>
                <div class="overlay">
                    <div class="meta-data">
                        <div class="row">
                            <div class="col-md-5 movie_meta_1">
                                
                                <?php if(!$data->image==NULL): ?>
                                <img src="<?php echo e(url($data->image)); ?>" alt="<?php echo e($data->movie_name); ?>" class="overlay-img">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 movie_meta_2">
                                <h1 class="movie_title"><span>Title : </span> <?php echo e($data->movie_name); ?></h1>
                                <p><span>Type :</span> <?php echo e($data->movie_type); ?></p>
                                <p><span>Release Date :</span> <?php echo e($data->release_date); ?></p>
                            
                                <p><span>Director :</span>
                                    <?php $__currentLoopData = movie_director($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $director): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $director = obj($director); ?>
                                     <?php echo e($director->director_name); ?> ,&nbsp;
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </p>
                                <p><span>Cast :</span> 
                                    <?php $__currentLoopData = movie_cast($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie_cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e(obj($movie_cast)->cast_name); ?> ,&nbsp;
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                                <p><span>Producer :</span> 
                                <?php $__currentLoopData = movie_producer($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodecure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e(obj($prodecure)->producers_name); ?> ,&nbsp;
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                                <p><span>Distributor :</span><?php echo e(movie_distributor($data->distributor_code)->distributor_name); ?></p>
                                <p><span>Production :</span> <?php echo e($data->production_house); ?></p>
                               
                            </div>
                            <div class="col-md-5 movie_meta_1">
                                
                                <a href="<?php echo e(url('single/'.$data->id)); ?>" class="btn btn-success btn-sm btn-custom"><i class="fa fa-money"></i> Buy Now</a>
                                <button class="btn btn-danger btn-sm btn-custom watchtailler" value="<?php echo e($data->tailler); ?>"></span> <i class="fa fa-play"></i> Watch Taillor</button>
                            </div>
                            <div class="col-md-6 movie_meta_2">
                                
                                <p class="movie_short"><?php echo e(str_limit($data->description,20 )); ?></p>
                                
                            </div>
                            <div class="col-md-6 movie_meta_2 mt-4">
                                <h1>Available Show</h1>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                            </div>
                        </div>
                   </div><!--meta data end-->
               </div> <!--overlay end-->
          </div> <!--section content img  end-->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <div class="col-md-4">
            No data found
          </div>
          <?php endif; ?>

          
  
        </div><!--row end-->
    </div><!--section content end-->
</section>

<div class="mt-4"></div>

<!-- ads section -->
<section class="advertisement">
    <div class="container-md">
        <div class="row">
            <div class="col-md-12 mt-3">
                <img src="<?php echo e(url('public/home/images/Advertisement.png')); ?>" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</section>
<!-- ads section -->

<!-- Coming Soon section -->
<section id="section_now_showing" class="container-md">
    <div class="section_title">
        <h2 class="my-4 heading_1">Coming Soon</h2>
        <!-- <input type="date"> -->
    </div>
    <div class="section_content">
        <div class="row">
            <?php
            // dd(coming_soon_movie());
                // coming_soon_movie();
                ?>
            <?php $__empty_1 = true; $__currentLoopData = coming_soon_movie(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <?php $data = obj($data); ?>
            <div class="section_content_img col-md-4">
                <?php if(!$data->image==NULL): ?>
                <img src="<?php echo e(url($data->image)); ?>" alt="<?php echo e($data->movie_name); ?>" class="img-fluid">
                <?php endif; ?>
                <div class="overlay">
                    <div class="meta-data">
                        <div class="row">
                            <div class="col-md-5 movie_meta_1">
                                
                                <?php if(!$data->image==NULL): ?>
                                <img src="<?php echo e(url($data->image)); ?>" alt="<?php echo e($data->movie_name); ?>" class="overlay-img">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 movie_meta_2">
                                <h1 class="movie_title"><span>Title : </span> <?php echo e($data->movie_name); ?></h1>
                                <p><span>Type :</span> <?php echo e($data->movie_type); ?></p>
                                <p><span>Release Date :</span> <?php echo e($data->release_date); ?></p>
                            
                                <p><span>Director :</span>
                                    <?php $__currentLoopData = movie_director($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $director): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php $director = obj($director); ?>
                                     <?php echo e($director->director_name); ?> ,&nbsp;
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </p>
                                <p><span>Cast :</span> 
                                    <?php $__currentLoopData = movie_cast($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie_cast): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo e(obj($movie_cast)->cast_name); ?> ,&nbsp;
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                                <p><span>Producer :</span> 
                                <?php $__currentLoopData = movie_producer($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prodecure): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo e(obj($prodecure)->producers_name); ?> ,&nbsp;
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </p>
                                <p><span>Distributor :</span><?php echo e(movie_distributor($data->distributor_code)->distributor_name); ?></p>
                                <p><span>Production :</span> <?php echo e($data->production_house); ?></p>
                               
                            </div>
                            <div class="col-md-5 movie_meta_1">
                                
                                <a href="<?php echo e(url('single/'.$data->id)); ?>" class="btn btn-success btn-sm btn-custom"><i class="fa fa-money"></i> Buy Now</a>
                                <button class="btn btn-danger btn-sm btn-custom watchtailler" value="<?php echo e($data->tailler); ?>"></span> <i class="fa fa-play"></i> Watch Taillor</button>
                            </div>
                            <div class="col-md-6 movie_meta_2">
                                
                                <p class="movie_short"><?php echo e(str_limit($data->description,20 )); ?></p>
                                
                            </div>
                            <div class="col-md-6 movie_meta_2 mt-4">
                                <h1>Available Show</h1>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                                <button class="btn btn-outline-danger mx-2" type="button">7 AM</button>
                            </div>
                        </div>
                   </div><!--meta data end-->
               </div> <!--overlay end-->
          </div> <!--section content img  end-->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <div class="col-md-4">
            No data found
          </div>
          <?php endif; ?>


         
  
        </div><!--row end-->
    </div><!--section content end-->
</section>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('home_script'); ?>
<script>
    $(document).ready(function(){
        $('.watchtailler').on('click',function(){
            var tailler = $(this).val();
            console.log(tailler);
            Swal.fire({
            title: 'Jaari',
            html: '<iframe width="560" height="315" src="'+tailler+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>',
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            width:800,
            confirmButtonText:
                '<i class="fa fa-thumbs-up"></i> Great!',
            confirmButtonAriaLabel: 'Thumbs up, great!',
            cancelButtonText:
                '<i class="fa fa-thumbs-down"></i>',
            cancelButtonAriaLabel: 'Thumbs down'
            })
        });
    });

</script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/index.blade.php ENDPATH**/ ?>