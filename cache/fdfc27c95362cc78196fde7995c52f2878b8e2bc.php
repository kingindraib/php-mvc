
<?php $__env->startSection('title',$movie_detail->movie_name); ?>
<?php if(total_selected_seat_price()): ?>
<?php $__env->startPush('home_script'); ?>
<script>
    $(document).ready(function() {
      var seconds = 10; // Set the initial countdown time in seconds
      $('#countdown').text('your time is start please complete with in 10 min');
      // Function to update the countdown timer
      function updateCountdown() {
        if (seconds > 0) {
          seconds--;
          $('#timer').text(seconds);
        } else {
          clearInterval(timerInterval); // Stop the countdown when it reaches 0
          $('#countdown').text('Countdown: Time is up!');
        }
      }
    
      // Call the updateCountdown function every second (1000 milliseconds)
      var timerInterval = setInterval(updateCountdown, 1000);
    });
    </script>
<?php $__env->stopPush(); ?>
<?php endif; ?>
<?php $__env->startSection('body'); ?>

<div class="container-md">
    <div class="row mt-4">
        <div class="col-md-12 my-2 py-2 px-2 brade-camp">
            <span class="seat_title text-dark">Jaari</span>
            <p class="text-dark">url->Aud name | Date and time</p>
        </div>
        <div class="col-md-12">
            <h3 id="countdown"></h3>
        </div>
    </div>
    <!-- new row -->
    <div class="seat_section">
        <div class="seat_label">
            <div class="seat_type">
                <input type="checkbox">
            <p>Available</p>
            </div>
            <div class="seat_type fast_felling">
                <input type="checkbox">
            <p>my Seat</p>
            </div>
            <div class="seat_type soldout">
                <input type="checkbox">
            <p>Slod Out</p>
            </div>
            <div class="seat_type expired">
                <input type="checkbox">
            <p>Expired</p>
            </div>
        </div>
        
        <div class="price_count">
            <p id="total_selected_amount">Total :Rs. <?php echo e(total_selected_seat_price()); ?></p>
            <?php if(total_selected_seat_price() > 0): ?>
            <a href="<?php echo e(url('ticket/payment_page/'.$movie_id)); ?>" class="btn btn-danger">Confirm</a>
            <?php endif; ?>
        </div>
    </div>

    <?php
        $i=1;
    ?>
    <!-- seat detail -->
    <div class="seat_detail">
        <div class="left_part">
            
            
            
            <?php
            //  dd(empty(get_seat_status(2)->scalar));  
            //  dd(get_seat_status(2)->scalar);
            // dd(get_seat_status(1));
            // if(isset(get_seat_status(1)->scalar)){
            //     dd("true");
            // }else{
            //     dd("false");
            // }
            // dd(Auth());
             ?>
            <?php $__currentLoopData = seat_row_group($screen_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowItems=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($rowItems<7): ?>
            <div class="row mb-2">
                <ul class="seat_row">
                    <?php $__currentLoopData = seat_column_group_data($row['row_id']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($data['status']=='publish'): ?>
                    <?php if(isset(get_seat_status($data['id'])->scalar)): ?>
                    <li><a href="<?php echo e(url('ticket/select/'.$data['id'].'?screen_id='.$screen_id.'&show_id='.$movieshow->shows_id.'&movie_id='.$movieshow->movie_id.'')); ?>" class="btn btn-success"><?php echo e($data['seat_name']); ?></a></li>
                    <?php elseif(get_seat_status($data['id'])->status ==1 && get_seat_status($data['id'])->user_id == Auth()->id): ?>
                    <li><a href="javascript:;" class="btn btn-warning"><?php echo e($data['seat_name']); ?></a></li>
                    <?php elseif(get_seat_status($data['id'])->status ==1): ?>
                    <li><a href="javascript:;" class="btn btn-danger"><?php echo e($data['seat_name']); ?></a></li>
                    <?php elseif(get_seat_status($data['id'])->status ==0 && get_seat_status($data['id'])->user_id == Auth()->id): ?>
                    <li><a href="<?php echo e(url('ticket/select/remove/'.$data['id'])); ?>" class="btn btn-primary"><?php echo e($data['seat_name']); ?></a></li>
                    <?php endif; ?>
                    <?php else: ?> 
                    <li><a href="javascript:;" class="btn btn-secondary"><?php echo e($data['seat_name']); ?></a></li>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    
                </ul>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            



        </div>


        
        
    </div>

    <!-- screen -->
    <div class="row">
        <div class="screen">
            SCREEN HERE
        </div>
        <!-- <div class="seatConfirm col-md-12 text-center mt-3">
            <button class="btn btn-danger text-center">Buy Now</button>
        </div> -->
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('home_script'); ?>




<?php $__env->stopPush(); ?>

<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/single/seat.blade.php ENDPATH**/ ?>