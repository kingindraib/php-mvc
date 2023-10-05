
<?php $__env->startSection('dash_title','User History'); ?>
<?php
use App\Components\Form;
?>
<?php $__env->startSection('user_account_body'); ?>
<div class="col-md-12 ">
    <table class="table table-hover">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Movie Name</th>
                <th>Ticket ID</th>
                <th>Date</th>
                <th>Show</th>
                <th>Time</th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.account.dashboard_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/account/parts/user_history.blade.php ENDPATH**/ ?>