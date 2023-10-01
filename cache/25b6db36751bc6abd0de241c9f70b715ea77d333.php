
<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('page_title','Distributor Management'); ?>
<?php $__env->startSection('body'); ?>

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="<?php echo e(url('admin/dashboard/distributor/create')); ?>" class="btn btn-success">Add Distributor <i class="fa-solid fa-plus"></i></a>
        </div>
        <div class="col-md-12">
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row my-3">            
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Distributor Name</th>
                            <th>Code</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $distributor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php $i = 1; $data = obj($data); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($data->distributor_name); ?></td>
                            <td><?php echo e($data->distributor_code); ?></td>
                            <td><?php echo e($data->email); ?></td>
                            <td><?php echo e($data->phone); ?></td>
                            <td><?php echo e($data->created_at); ?></td>
                            <td>
                                <a href="<?php echo e(url('admin/dashboard/distributor/edit/'.$data->id)); ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?php echo e(url('admin/dashboard/distributor/delete/'.$data->id)); ?>" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>    
                            </td>     
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                        <tr>
                            <td colspan="7">No data found</td>
                        </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/distributor/index.blade.php ENDPATH**/ ?>