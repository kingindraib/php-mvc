
<?php $__env->startSection('title','Post management'); ?>
<?php $__env->startSection('page_title','Post Management'); ?>
<?php $__env->startSection('body'); ?>
<?php
// print_r($threator);
// die();
$i = 1;
?>
<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="<?php echo e(url('admin/dashboard/post_management/create')); ?>" class="btn btn-info">Add Post <i class="fa-solid fa-film"></i></a>
        </div>
        <div class="col-md-12">
            <div class="mt-2"></div>
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Post Name</th>
                            <th>Categroy</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($data['title']); ?></td>
                            <td><?php echo $data['description']; ?></td>
                            <td>
                               <img src="<?php echo e(url($data['image'])); ?>" alt="" style="width: 100px;">
                            </td>
                         
                            <td>
                                <?php if($data['status'] == 'draft'): ?>
                                <span class='badge bg-danger'><?php echo e($data['status']); ?></span>
                                <?php else: ?>
                                <span class='badge bg-success'><?php echo e($data['status']); ?></span> 
                                <?php endif; ?>
                            </td>    
                            <td>
                                <a href="<?php echo e(url('admin/dashboard/post_management/edit/'.$data['id'])); ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?php echo e(url('admin/dashboard/post_management/delete/'.$data['id'])); ?>" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/settings/post/index.blade.php ENDPATH**/ ?>