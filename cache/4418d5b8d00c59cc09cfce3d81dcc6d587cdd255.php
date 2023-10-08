
<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('page_title','User Management'); ?>
<?php $__env->startSection('body'); ?>
<?php
$i = 1;    
?>

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            
        </div>
        <div class="col-md-12">
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>role</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($data['first_name']); ?> <?php echo e($data['last_name']); ?></td>
                            <td><?php echo e($data['email']); ?></td>
                            <td><?php echo e($data['phone']); ?></td>
                            <td>
                                <?php if($data['user_type']==0): ?>
                                user
                                <?php else: ?> 
                                admin
                                <?php endif; ?>
                            </td>
                            <td><span class='badge bg-success'>Active</span></td>     
                            <td>
                                
                                <a href="<?php echo e(url('admin/dashboard/user/delete/'.$data['id'])); ?>" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
                            </td> 
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                        <tr>
                            <td colspan="8">No data found</td>
                        </tr>
                        <?php endif; ?>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/user/index.blade.php ENDPATH**/ ?>