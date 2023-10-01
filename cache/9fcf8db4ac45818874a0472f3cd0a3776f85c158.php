
<?php $__env->startSection('title','Change Password'); ?>
<?php $__env->startSection('page_title','Dashboard'); ?>
<?php $__env->startSection('body'); ?>
<?php
use App\Components\Form;
?>

    <div class="container-md">
        <div class="row my-3">
            <div class="col-md-6 m-auto">
                <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			    <form action="<?php echo e(url('admin/dashboard/profile/update_password')); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                        <?php echo e(Form::formgroup('Old Password','password','old_password','','','')); ?>

                        </div>
                        <div class="col-md-12">
                            <?php echo e(Form::formgroup('New Password','text','password','','','')); ?>

                        </div>
                        <div class="col-md-12">
                            <?php echo e(Form::formgroup('Confirm Password','text','confirm_password','','','')); ?>

                        </div>
                        <?php echo e(unset_session('errors')); ?>

                        <div class="col-md-12">
                            <button class="btn btn-danger" name="status" value="update">Change Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/profile/change_password.blade.php ENDPATH**/ ?>