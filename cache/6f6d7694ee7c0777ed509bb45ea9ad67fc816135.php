
<?php $__env->startSection('dash_title','My Ticket'); ?>
<?php
use App\Components\Form;
$i = 1;
?>
<?php $__env->startSection('user_account_body'); ?>
<div class="col-md-12 ">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Movie Name</th>
                <th>Ticket ID</th>
                <th>generated Date</th>
                <th>Action</th>
               
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $myticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
                <td><?php echo e($i++); ?></td>
                <td><?php echo e(movie_detail($data['movie_id'])->movie_name); ?></td>
                
                <td><?php echo e($data['pid']); ?></td>
                <td><?php echo e($data['created_at']); ?></td>
                <td>N/A</td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <tr>
                <td colspan="6">NO data Found</td>
            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.account.dashboard_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/account/parts/my_ticket.blade.php ENDPATH**/ ?>