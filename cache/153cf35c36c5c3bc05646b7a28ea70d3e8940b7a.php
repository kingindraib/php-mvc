
<?php $__env->startSection('title','seat update'); ?>
<?php $__env->startSection('page_title','update Seat'); ?>
<?php
use App\Components\Form;
// dd(seatrow());
?>
<?php $__env->startSection('body'); ?>
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="<?php echo e(url('admin/dashboard/movie/settngs/seat/index')); ?>" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(url('admin/dashboard/movie/settngs/seat/update/'.$data->id)); ?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('Seat Name','text','seat_name','','',$data->seat_name)); ?>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Select Row</label>
                            <select name="row_id" id="" class="form-control">
                                <option value="<?php echo e($data->row_id); ?>"><?php echo e(seat_row($data->row_id)->row_name); ?></option>
                                <?php $__currentLoopData = seatrow(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rows): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php $rows = obj($rows); ?>
                                       <?php if($data->row_id !== $rows->id): ?>
                                    <option value="<?php echo e($rows->id); ?>"><?php echo e($rows->row_name); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Select Column</label>
                            <select name="column_id" id="" class="form-control">
                                <option value="<?php echo e($data->column_id); ?>"><?php echo e(seat_column($data->column_id)->column_name); ?></option>
                                <?php $__currentLoopData = seatcolumn(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $columns): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php $columns = obj($columns); ?>
                                       <?php if($data->column_id !== $columns->id): ?>
                                    <option value="<?php echo e($columns->id); ?>"><?php echo e($columns->column_name); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Select Screen</label>
                            <select name="screen_id" id="" class="form-control">
                                <option value="<?php echo e($data->screen_id); ?>"><?php echo e(screen_name($data->screen_id)->screen_name); ?></option>
                                <?php $__currentLoopData = screen(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $screen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <?php $screen = obj($screen); ?>
                                       <?php if($data->screen_id !== $screen->id): ?>
                                    <option value="<?php echo e($screen->id); ?>"><?php echo e($screen->screen_name); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               
                            </select>
                        </div>
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


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie_settings/seat/edit.blade.php ENDPATH**/ ?>