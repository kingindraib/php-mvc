
<?php $__env->startSection('body'); ?>
<div class="container-md">
	<div class="row mt-4">
		<div class="col-md-5 m-auto">
		   <div class="card">
			<h1 class="text-center my-2">Login</h1>
			<form action="">
				<div class="row">
				   <div class="col-md-12">
					<div class="form-group">
						<label for="">Email :</label>
						<input type="email" class="form-control">
					</div>
				   </div>
				   <div class="col-md-12">
					<div class="form-group">
						<label for="">Password :</label>
						<input type="password" class="form-control">
					</div>
				   </div>
				   <div class="col-md-6">
					   <div class="form-group">
						<button class="btn btn-success w-100 mt-2">Login</button>
					   </div>
				   </div>
				   <div class="col-md-6 text-right mt-4">
					<a href="" class="register_section">Register Now</a>
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