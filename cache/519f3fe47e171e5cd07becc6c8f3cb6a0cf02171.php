
<?php $__env->startSection('title','profile settings'); ?>
<?php $__env->startSection('page_title','Dashboard'); ?>
<?php $__env->startSection('body'); ?>
<?php
use App\Components\Form;
?>

    <div class="container-md">
        <div class="row my-3">
            <div class="col-md-8 m-auto">
                <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			    <form action="<?php echo e(url('admin/dashboard/profile/update/'.auth()->id)); ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                        <?php echo e(Form::formgroup('First Name','text','first_name','','',auth()->first_name)); ?>

                        </div>
                        <div class="col-md-6">
                            <?php echo e(Form::formgroup('Last Name','text','last_name','','',auth()->last_name)); ?>

                        </div>
                        <div class="col-md-6">
                            <?php echo e(Form::formgroup('Email','email','email','','',auth()->email)); ?>

                        </div>
                        <div class="col-md-6">
                            <?php echo e(Form::formgroup('Phone','text','phone','','',auth()->phone)); ?>

                        </div>
                        <div class="col-md-6">
                            <?php echo e(Form::formgroup('Date Of Birth','date','birth','','',auth()->birth)); ?>

                        </div>
                        <div class="col-md-6 mt-4">
                           <a href="<?php echo e(url('admin/dashboard/profile/change_password')); ?>" class="btn btn-info">Change Password</a>
                        </div>
                        <?php echo e(unset_session('errors')); ?>

                        <div class="col-md-12">
                            <button class="btn btn-danger" name="status" value="update">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/profile/index.blade.php ENDPATH**/ ?>