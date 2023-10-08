
<?php $__env->startSection('title',movie_detail($movie_id)->movie_name); ?>
<?php $__env->startSection('body'); ?>
<div class="container-md mt-4">
    <div class="row">
        <div class="col-md-5 ml-4">
            
                <h2>Payment Confirm</h2>
                <div class="ticket_payment">
                    <h3>Ticket Detail</h3>
                <p>Ticket Amount <span>Rs. <?php echo e(total_selected_seat_price()); ?></span></p>
                <p>Selected Seat <span>
                    <?php $__currentLoopData = $order_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $od): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e(seat_detail($od['seat_id'])->seat_name); ?>,
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </span></p>
                <p>Total <span>Rs. <?php echo e(total_selected_seat_price()); ?></span></p>
                </div>
                <hr>
                <div class="promo ticket_payment">
                    <h3>Promo & Voucher</h3>
                    <p>Promo code <span>N/A</span></p>
                </div>
                <hr>
                <div class="grand_total ticket_payment">
                    <h2>Grand Total <span>Rs.<?php echo e(total_selected_seat_price()); ?></span></h2>

                    <form action="https://uat.esewa.com.np/epay/main" method="POST">
                            <input value="<?php echo e(total_selected_seat_price()); ?>" name="tAmt" type="hidden">
                            <input value="<?php echo e(total_selected_seat_price()); ?>" name="amt" type="hidden">
                            <input value="0" name="txAmt" type="hidden">
                            <input value="0" name="psc" type="hidden">
                            <input value="0" name="pdc" type="hidden">
                            <input value="EPAYTEST" name="scd" type="hidden">
                            <input value="<?php echo e(generate_random_string()); ?>" name="pid" type="hidden">
                            <input value="<?php echo e(url('page/esewa_payment_success?q=su')); ?>" type="hidden" name="su">
                            <input value="<?php echo e(url('page/esewa_payment_failed?q=fu')); ?>" type="hidden" name="fu">
                            <!-- <input value="Submit" type="submit"> -->
                            <div class="btn-group">
                                
                                <input value="Submit" type="submit" class="btn btn-danger btn-buy">
                            </div>
                            </a>
            
                            <br>
                      </form>
               
                </div>
            
        </div>
		<div class="col-md-5 mr-4">
			<div class="row ticket-main">
				<div class="col-md-8">
					<h3>Schedule Detail</h3>
					<div class="detail_schedule">
						<h4>Movie Title</h4>
						<p><?php echo e(movie_detail($movie_id)->movie_name); ?></p>
						<h4>Date</h4>
						<p><?php echo e(carbon_date_formattor($order_single->created_at)); ?></p>
						<h4>Time</h4>
						<p><?php echo e(show_detail($order_single->show_id)->show_time); ?></p>
						<h4>Seat</h4>
						<p> <?php $__currentLoopData = $order_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $od): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e(seat_detail($od['seat_id'])->seat_name); ?>,
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </p>

					</div>
				</div>
				<div class="col-md-4">
					<img src="<?php echo e(url(movie_detail($movie_id)->image)); ?>" alt="" class="img-fluid">
				</div>
			</div>
		</div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('home_script'); ?>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/payment/payment_detail.blade.php ENDPATH**/ ?>