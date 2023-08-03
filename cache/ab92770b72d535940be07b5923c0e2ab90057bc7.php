
<?php $__env->startSection('title','Movie Management'); ?>
<?php $__env->startSection('page_title','Movie Management'); ?>
<?php $__env->startSection('body'); ?>

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-5">
            <a href="<?php echo e(url('admin/dashboard/movie/create')); ?>" class="btn btn-info">Add Movie <i class="fa-solid fa-video"></i></a>
        </div>
       
        <div class="col-md-12">
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="row my-3">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Movie Name</th>
                            <th>Threator</th>
                            <th>Screen</th>
                            <th>Release date</th>
                            <th>Duration</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php $__empty_1 = true; $__currentLoopData = $movie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <?php $data = obj($data); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($data->movie_name); ?></td>
                            <td>
                               <?php $__currentLoopData = movie_threator($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movieth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <span><?php echo e(threator_name(obj($movieth)->threator_id)->threator_name ?? 'N/A'); ?></span>,
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td>
                                <?php $__empty_2 = true; $__currentLoopData = movie_screen($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie_screens): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                    
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                    <span>not assign at...</span>
                                <?php endif; ?>
                                
                            </td>
                            <td><?php echo e($data->release_date); ?></td>
                            <td>
                                <?php echo e($data->duretion); ?> days
                            </td>
                            <td><span class='badge bg-success'>Active</span></td>    
                            <td>
                                <a href="<?php echo e(url('admin/dashboard/movie/settngs/screen/edit/'.$data->id)); ?>" class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                <a href="<?php echo e(url('admin/dashboard/movie/assign/'.$data->id)); ?>" class="btn btn-success"><i class="fas fa-wrench"></i></a>
                                  <a href="<?php echo e(url('admin/dashboard/movie/edit/'.$data->id)); ?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                  <a href="<?php echo e(url('admin/dashboard/movie/delete/'.$data->id)); ?>" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>    
                            </td> 
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?> 
                        <tr>
                            <td colspan="8">No data Found</td>
                        </tr>
                       <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie/index.blade.php ENDPATH**/ ?>