
<?php $__env->startSection('title','login'); ?>
<?php $__env->startSection('body'); ?>
<?php
use App\Components\Form;
// print_r(session_message('errors'));
// echo "<br>";
// print_r(get_message('errors','message'));
?>

<div class="container-md">
	<div class="row mt-4">
		<div class="col-md-5 m-auto">
		   <div class="card">
			<h1 class="text-center my-2">Login</h1>
			<?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<form action="<?php echo e(url('login/submit')); ?>" method="POST">
				<div class="row">
				   <div class="col-md-12">
					<?php echo e(Form::formgroup('Email','email','email','','','')); ?>

					<?php echo e(Form::formgroup('name','name','name','','','')); ?>

				   </div>
				   <div class="col-md-12">
					<?php echo e(Form::formgroup('Password','password','password','pass','','')); ?>

				   </div>
				   <?php echo e(unset_session('errors')); ?>

				   <div class="col-md-6">
					
					<button class="btn btn-success w-100 mt-2">login</button>
				   </div>
				   <div class="col-md-6 text-right mt-4">
					<a href="<?php echo e(url('register')); ?>" class="register_section">Register Now</a>
				   </div>
				   <div class="col-md-6 text-center m-auto mt-4">
					<a href="" class="register_section">Forget Password ?</a>
				   </div>
				</div>
			</form>
		   </div>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('home.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/auth/login.blade.php ENDPATH**/ ?>