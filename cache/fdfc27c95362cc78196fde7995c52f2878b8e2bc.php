
<?php $__env->startSection('title',$movie_detail->movie_name); ?>
<?php $__env->startSection('body'); ?>
<div class="container-md">
    <div class="row mt-4">
        <div class="col-md-12 my-2 py-2 px-2 brade-camp">
            <span class="seat_title text-dark">Jaari</span>
            <p class="text-dark">url->Aud name | Date and time</p>
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
            <p>Fast feeling</p>
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
            <p>Total :Rs. 200</p>
        </div>
    </div>

    <?php
        $i=1;
    ?>
    <!-- seat detail -->
    <div class="seat_detail">
        <div class="left_part">
            
            
            <?php
            //  dd(get_seat_status(1)->scalar);  
            // dd(Auth());
             ?>
            <?php $__currentLoopData = seat_row_group($screen_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowItems=>$row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($rowItems<7): ?>
            <div class="row mb-2">
                <ul class="seat_row">
                    <?php $__currentLoopData = seat_column_group_data($row['row_id']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($data['status']=='publish'): ?>
                    <?php if(empty(get_seat_status($data['id'])->scalar)): ?>
                    <li><a href="#" class="btn btn-success"><?php echo e($data['seat_name']); ?></a></li>
                    <?php elseif(get_seat_status($data['id'])->status ==1): ?>
                    <li><a href="#" class="btn btn-success"><?php echo e($data['seat_name']); ?></a></li>
                    <?php elseif(get_seat_status($data['id'])->status ==0 && get_seat_status($data['id'])->user_id == Auth()->id): ?>
                    <li><a href="#" class="btn btn-success"><?php echo e($data['seat_name']); ?></a></li>
                    <?php endif; ?>
                    <?php else: ?> 
                    <li><a href="#" class="btn btn-secondary"><?php echo e($data['seat_name']); ?></a></li>
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
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/single/seat.blade.php ENDPATH**/ ?>