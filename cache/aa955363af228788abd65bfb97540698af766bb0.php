
<?php $__env->startSection('title','User Dashboard'); ?>
<?php $__env->startSection('body'); ?>

<div class="container-md">
    <div class="row mt-4">
        <?php echo $__env->make('home.account.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-9">
            <div class="brandcamp">
                <h1><?php echo $__env->yieldContent('dash_title'); ?></h1>
            </div>
            <div class="row" id="userdashboard">
                <?php echo $__env->yieldContent('user_account_body'); ?>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/account/dashboard_master.blade.php ENDPATH**/ ?>