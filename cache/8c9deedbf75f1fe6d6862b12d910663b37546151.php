
<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('page_title','Movie Seetings'); ?>
<?php $__env->startSection('body'); ?>
    <div class="container-md">
        <div class="row my-3">
            <div class="col-md-4">
                <a href="<?php echo e(url('admin/dashboard/ticket_management/booking/index')); ?>">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">book_online</span>
                            </div>
                            <div class="text">
                                <h3>Booking</h3>
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
                                <span class="material-symbols-sharp">payments</span>
                            </div>
                            <div class="text">
                                <h3>Casier</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">lab_profile</span>
                            </div>
                            <div class="text">
                                <h3>Report</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/ticket_settings/index.blade.php ENDPATH**/ ?>