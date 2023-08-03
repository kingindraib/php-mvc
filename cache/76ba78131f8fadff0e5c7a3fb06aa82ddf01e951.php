
<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('page_title','Screen Management'); ?>
<?php $__env->startSection('body'); ?>
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="<?php echo e(url('admin/dashboard/movie/settngs/screen/create')); ?>" class="btn btn-info">Add Screen <i class="fa-solid fa-film"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Screen Name</th>
                            <th>Screen Code</th>
                            <th>Threator Code</th>
                            <th>Rows</th>
                            <th>Column</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $screen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($data['screen_name']); ?></td>
                            <td><?php echo e($data['screen_code']); ?></td>
                            <td><?php echo e($data['threator_code']); ?></td>
                            <td><?php echo e($data['seat_rows']); ?></td>
                            <td><?php echo e($data['seat_columns']); ?></td>
                            <td>
                                <?php if($data['status'] == 'draft'): ?>
                                <span class='badge bg-danger'><?php echo e($data['status']); ?></span>
                                <?php else: ?>
                                <span class='badge bg-success'><?php echo e($data['status']); ?></span> 
                                <?php endif; ?>
                            </td>    
                            <td>
                                <a href="<?php echo e(url('admin/dashboard/movie/settngs/screen/edit/'.$data['id'])); ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?php echo e(url('admin/dashboard/movie/settngs/screen/delete/'.$data['id'])); ?>" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
                            </td> 
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                        <tr>
                            <td colspan="8"> No Data Found</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie_settings/screen/index.blade.php ENDPATH**/ ?>