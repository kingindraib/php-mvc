
<?php $__env->startSection('dash_title','User Detail'); ?>
<?php $__env->startSection('user_account_body'); ?>
<?php echo $__env->make('home.account.parts.user_detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.account.dashboard_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/account/dashboard.blade.php ENDPATH**/ ?>