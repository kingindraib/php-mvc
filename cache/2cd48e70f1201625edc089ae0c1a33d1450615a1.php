
<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('page_title','Show Management'); ?>
<?php
use App\Components\Form;
?>

<?php $__env->startSection('body'); ?>
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="<?php echo e(url('admin/dashboard/movie/settngs/show/index')); ?>" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(url('admin/dashboard/movie/settngs/show/store')); ?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('Show Name','text','show_name','','',$data->show_name)); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('show prize','text','show_prize','','',$data->show_prize)); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('offer prize','text','offer_prize','','',$data->offer_prize)); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('show time','time','show_time','','',$data->show_time)); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('show duretion','text','show_duration','','',$data->show_duration)); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(validation_message('errors','screen_code')); ?>

                        <label for="">Screen Name</label>
                       <select name="screen_code" id="" class="form-control mb-3">
                        <option value="<?php echo e($data->screen_code); ?>"><?php echo e(screen_code($data->screen_code)->screen_name); ?></option>
                        <?php $__currentLoopData = screen(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $screen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($screen['screen_code']); ?>"><?php echo e($screen['screen_name']); ?></option>
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie_settings/shows/edit.blade.php ENDPATH**/ ?>