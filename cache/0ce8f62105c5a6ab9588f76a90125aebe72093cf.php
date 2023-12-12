
<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('page_title','Screen Management'); ?>
<?php
use App\Components\Form;
?>
<?php $__env->startSection('body'); ?>
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="<?php echo e(url('admin/dashboard/movie/settngs/screen/index')); ?>" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(url('admin/dashboard/movie/settngs/screen/store')); ?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('Screen Name','text','screen_name','','',old('screen_name'))); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('Rows','text','seat_rows','','',old('seat_rows'))); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('Columns','text','seat_columns','','',old('seat_columns'))); ?>

                    </div>
                    <div class="col-md-12">
                        <select name="threator_code" id="" class="form-control my-2" required>
                            <option value="">--select one ---</option>
                            <?php $__currentLoopData = threator(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item['threator_code']); ?>"><?php echo e($item['threator_name']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <?php echo e(unset_session('old')); ?>

                    <?php echo e(unset_session('errors')); ?>

                    <div class="col-md-12">
                        <button class="btn btn-danger" name="status" value="draft">Draft</button>
                        <button class="btn btn-success" name="status" value="publish">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie_settings/screen/create.blade.php ENDPATH**/ ?>