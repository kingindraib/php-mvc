
<?php $__env->startSection('title','Archive Page'); ?>
<?php $__env->startSection('body'); ?>
<div class="container-md">
    <div class="row mt-2">
        <div class="col-md-8 m-auto">
            <?php if(isset($data->title)): ?>
                <h1 class="text-center"><?php echo e($data->title); ?></h1>
            <?php endif; ?>

            <?php if(isset($data->image)): ?>
           <img src="<?php echo e(url($data->image)); ?>" alt="" class="img-fluid">
            <?php endif; ?>
            <?php if(isset($data->description)): ?>
            <p><?php echo $data->description; ?></p>
            <?php endif; ?>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/archive/archive.blade.php ENDPATH**/ ?>