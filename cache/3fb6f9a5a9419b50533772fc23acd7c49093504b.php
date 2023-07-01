
<?php $__env->startSection('title','register'); ?>
<?php $__env->startSection('body'); ?>
<?php
use App\Components\Form;
?>

<div class="container-md">
    <div class="row mt-4">
        <div class="col-md-5 m-auto">
           <div class="card">
            <h1 class="text-center my-2">Register</h1>
            <form action="<?php echo e(url('register/submit')); ?>" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('First Name','text','first_name','','',old('first_name'))); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('Last Name','text','last_name','','','')); ?>

                    </div>
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('Phone','phone','phone','','','')); ?>

                    </div>
                   <div class="col-md-12">
                    <?php echo e(Form::formgroup('Email','email','email','','','')); ?>

                   </div>
                   <div class="col-md-12">
                    <?php echo e(Form::formgroup('Date of Birth','date','birth','','','')); ?>

                   </div>
                   <div class="col-md-12">
                    <?php echo e(Form::formgroup('Password','password','password','','','')); ?>

                   </div>
                   <div class="col-md-12">
                    <?php echo e(Form::formgroup('Confirm Password','password','confirm_password','','','')); ?>

                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                        <button class="btn btn-success w-100 mt-2">Register</button>
                       </div>
                   </div>
                   <div class="col-md-6 text-right mt-4">
                    <a href="" class="register_section">Login Now</a>
                   </div>
                </div>
            </form>
           </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/auth/register.blade.php ENDPATH**/ ?>