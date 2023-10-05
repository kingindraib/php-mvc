
<?php $__env->startSection('title','Online Ticket Booked'); ?>
<?php $__env->startSection('page_title','Ticket Management'); ?>
<?php $__env->startSection('body'); ?>
<?php
// print_r($booking);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        
        <div class="col-md-12">
            <div class="mt-2"></div>
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Movie Name</th>
                            <th>Product ID</th>
                            <th>Total Amount</th>
                            <th>Order ID</th>
                            <th>Booked Date</th>
                            <th>Status</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $booking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($data['screen_name']); ?></td>
                            <td><?php echo e($data['screen_code']); ?></td>
                            <td><?php echo e($data['threator_code']); ?></td>
                            <td><?php echo e($data['seat_rows']); ?></td>
                            <td><?php echo e($data['seat_columns']); ?></td>
                            <td>
                                <?php if($data['status'] == 'draft'): ?>
                                <span class='badge bg-danger'><?php echo e($data['status']); ?></span>
                                <?php else: ?>
                                <span class='badge bg-success'><?php echo e($data['status']); ?></span> 
                                <?php endif; ?>
                            </td>    
                            
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                        <tr>
                            <td colspan="8"> No Data Found</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/ticket_settings/booking/index.blade.php ENDPATH**/ ?>