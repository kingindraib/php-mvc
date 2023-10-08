
<?php $__env->startSection('title','Archive Page'); ?>
<?php $__env->startSection('body'); ?>
<div class="container-md">
    <?php $__empty_1 = true; $__currentLoopData = $faq; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="row">
        <div class="col-md-8 m-auto">
            <h2><?php echo e($data['question']); ?></h2>
        </div>
        <div class="col-md-8 m-auto">
            <p><?php echo $data['answer']; ?></p>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
    <div class="row">
        <h1>No Data Found</h1>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/page/faq.blade.php ENDPATH**/ ?>