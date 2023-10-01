
<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('page_title','SeatColumn Management'); ?>
<?php
use App\Components\Form;
?>
<?php $__env->startSection('body'); ?>
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="<?php echo e(url('admin/dashboard/movie/settngs/seatcolumn/index')); ?>" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(url('admin/dashboard/movie/settngs/seatcolumn/store')); ?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('Column Name','text','column_name','','',old('column_name'))); ?>

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


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie_settings/seatcolumns/create.blade.php ENDPATH**/ ?>