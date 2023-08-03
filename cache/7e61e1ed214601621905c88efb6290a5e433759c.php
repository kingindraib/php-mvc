
<?php $__env->startSection('title','Show Management'); ?>
<?php $__env->startSection('page_title','Show Management'); ?>
<?php $__env->startSection('body'); ?>
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="<?php echo e(url('admin/dashboard/movie/settngs/show/create')); ?>" class="btn btn-info">Add show <i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Show Name</th>
                            <th>Screen Name</th>
                            <th>Show Price</th>
                            <th>offer price</th>
                            <th>Show time</th>
                            <th>show duretion</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $show; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <?php 
                                $data = obj($data);
                            ?>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($data->show_name); ?></td>
                            <td><?php echo e(screen_code($data->screen_code)->screen_name ?? 'N/A'); ?></td>
                            <td><?php echo e($data->show_prize); ?></td>
                            <td><?php echo e($data->offer_prize); ?></td>
                            <td><?php echo e($data->show_time); ?></td>
                            <td><?php echo e($data->show_duration); ?></td>
                            <td>
                                <?php if($data->status == 'draft'): ?>
                                <span class='badge bg-danger'><?php echo e($data->status); ?></span>
                                <?php else: ?>
                                <span class='badge bg-success'><?php echo e($data->status); ?></span> 
                                <?php endif; ?>
                            </td>    
                            <td>
                                <a href="<?php echo e(url('admin/dashboard/movie/settngs/show/edit/'.$data->id)); ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?php echo e(url('aadmin/dashboard/movie/settngs/show/delete/'.$data->id)); ?>" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
                            </td> 
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                        <tr>
                            <td colspan="10"> No Data Found</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie_settings/shows/index.blade.php ENDPATH**/ ?>