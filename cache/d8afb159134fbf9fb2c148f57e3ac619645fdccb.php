
<?php $__env->startSection('dash_title','Edit Detail'); ?>
<?php
use App\Components\Form;
?>
<?php $__env->startSection('user_account_body'); ?>


       <div class="col-md-8">
            <form action="<?php echo e(url('user/dashboard/update_profile')); ?>" method="POST">
                <div class="col-md-12">
                    <?php echo e(Form::formgroup('First Name','text','first_name','','',Auth()->first_name)); ?>

                </div>
                <div class="col-md-12">
                    <?php echo e(Form::formgroup('Last Name','text','last_name','','',Auth()->last_name)); ?>

                </div>
                <div class="col-md-12">
                    <?php echo e(Form::formgroup('Phone','text','phone','','',Auth()->phone)); ?>

                </div>
                <div class="col-md-12">
                    <?php echo e(Form::formgroup('Date of Birth','text','birth','','',Auth()->birth)); ?>

                </div>
                <div class="col-md-12">
                    <div class="form-group">
                       <button type="submit" class="btn btn-danger">Change</button>
                    </div>
                </div>
            </form>
       </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.account.dashboard_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/account/parts/profile_edit.blade.php ENDPATH**/ ?>