
<?php $__env->startSection('title','Category management'); ?>
<?php $__env->startSection('page_title','Category Management'); ?>
<?php $__env->startSection('body'); ?>
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="<?php echo e(url('admin/dashboard/category/create')); ?>" class="btn btn-info">Add Category <i class="fa-solid fa-film"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Category Name</th>
                            <th>Slug</th>
                            <th>Slug</th>
                            <th>IS NAV</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($data['category_name']); ?></td>
                            <td><?php echo e($data['slug']); ?></td>
                            <td>
                                <?php if($data['is_nav'] == 0): ?>
                                <span class='badge bg-danger'>No</span>
                                <?php else: ?>
                                <span class='badge bg-success'>Yes</span> 
                                <?php endif; ?>
                            </td>
                         
                            <td>
                                <?php if($data['status'] == 'draft'): ?>
                                <span class='badge bg-danger'><?php echo e($data['status']); ?></span>
                                <?php else: ?>
                                <span class='badge bg-success'><?php echo e($data['status']); ?></span> 
                                <?php endif; ?>
                            </td>    
                            <td>
                                <a href="<?php echo e(url('admin/dashboard/category/edit/'.$data['id'])); ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?php echo e(url('admin/dashboard/category/delete/'.$data['id'])); ?>" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/settings/category/index.blade.php ENDPATH**/ ?>