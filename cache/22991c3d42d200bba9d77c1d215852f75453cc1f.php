
<?php $__env->startSection('title','seat management'); ?>
<?php $__env->startSection('page_title','seat Management'); ?>
<?php $__env->startSection('body'); ?>
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="<?php echo e(url('admin/dashboard/movie/settngs/seat/create')); ?>" class="btn btn-info">Add Seat <i class="fa-solid fa-film"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Seat Name</th>
                            <th>Screen</th>
                            <th>Row</th>
                            <th>Column</th>
                            <th>Created At</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $seat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php $data = obj($data); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($data->seat_name); ?></td>
                            <td><?php echo e(screen_name($data->screen_id)->screen_name); ?></td>
                            <td><?php echo e(seat_row($data->row_id)->row_name); ?></td>
                            <td><?php echo e(seat_column($data->column_id)->column_name); ?></td>
                            <td><?php echo e($data->created_at); ?></td> 
                            <td>
                                <?php if($data->status == 'publish'): ?>
                                <span class="badge badge-danger text-dark"><?php echo e($data->status); ?></span>
                                <?php else: ?> 
                                <span class="badge badge-success text-danger"><?php echo e($data->status); ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?php echo e(url('admin/dashboard/movie/settngs/seat/edit/'.$data->id)); ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?php echo e(url('admin/dashboard/movie/settngs/seat/delete/'.$data->id)); ?>" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
                            </td> 
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                        <tr>
                            <td colspan="4"> No Data Found</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie_settings/seat/index.blade.php ENDPATH**/ ?>