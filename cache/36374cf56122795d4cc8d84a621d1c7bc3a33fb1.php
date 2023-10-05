
<?php $__env->startSection('title','Settings'); ?>
<?php $__env->startSection('page_title','Movie Seetings'); ?>
<?php $__env->startSection('body'); ?>
    <div class="container-md">
        <div class="row my-3">
            <div class="col-md-4">
                <a href="<?php echo e(url('admin/dashboard/movie/slider/index')); ?>">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">sliders</span>
                            </div>
                            <div class="text">
                                <h3>Slider</h3>
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
                                <span class="material-symbols-sharp">attach_money</span>
                            </div>
                            <div class="text">
                                <h3>Payment</h3>
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
                                <h3>Site settings</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(url('admin/dashboard/category/index')); ?>">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">menu_book</span>
                            </div>
                            <div class="text">
                                <h3>Category</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo e(url('admin/dashboard/post_management/index')); ?>">
                    <div class="card">
                        <div class="container-box">
                            <div class="icon">
                                <span class="material-symbols-sharp">post_add</span>
                            </div>
                            <div class="text">
                                <h3>Category Post</h3>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/settings/index.blade.php ENDPATH**/ ?>