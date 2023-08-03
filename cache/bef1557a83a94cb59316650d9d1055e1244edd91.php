
<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('page_title','Movie Seetings'); ?>
<?php $__env->startSection('body'); ?>
    <div class="container-md">
        <div class="row my-3">
            <div class="col-md-4">
                <a href="<?php echo e(url('admin/dashboard/movie/settngs/threator/index')); ?>">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">theaters</span>
                            </div>
                            <div class="text">
                                <h3>Movie Threator</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(url('admin/dashboard/movie/settngs/screen/index')); ?>">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">desktop_windows</span>
                            </div>
                            <div class="text">
                                <h3>screen</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(url('admin/dashboard/movie/settngs/show/index')); ?>">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">interactive_space</span>
                            </div>
                            <div class="text">
                                <h3>Shows</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(url('admin/dashboard/movie/settngs/seatrow/index')); ?>">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">chair_alt</span>
                            </div>
                            <div class="text">
                                <h3>Seat Row</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(url('admin/dashboard/movie/settngs/seatcolumn/index')); ?>">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                               <span class="material-symbols-sharp">airline_seat_recline_normal</span>
                            </div>
                            <div class="text">
                                <h3>Seat Column</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(url('admin/dashboard/movie/settngs/seat/index')); ?>">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">living</span>
                            </div>
                            <div class="text">
                                <h3>seats</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie_settings/index.blade.php ENDPATH**/ ?>