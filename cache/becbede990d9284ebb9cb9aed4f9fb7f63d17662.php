
<?php $__env->startSection('title','dashboard'); ?>
<?php $__env->startSection('page_title','Create Ditributor'); ?>
<?php $__env->startSection('body'); ?>
<?php
use App\Components\Form;
?>

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-8 m-auto">
            
			<?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<form action="<?php echo e(url('admin/dashboard/distributor/store')); ?>" method="POST">
				<div class="row">
					<div class="col-md-12">
					<?php echo e(Form::formgroup('Distributor Name','text','distributor_name','','','')); ?>

					</div>
					<div class="col-md-6">
					<?php echo e(Form::formgroup('Email','email','email','','','')); ?>

					</div>
					<div class="col-md-6">
					<?php echo e(Form::formgroup('Phone','text','phone','','','')); ?>

					</div>
				   <div class="col-md-6">
					<?php echo e(Form::formgroup('Address','text','address','','','')); ?>

				   </div>
				   <div class="col-md-6">
					<?php echo e(Form::formgroup('Website','url','website','','','')); ?>

				   </div>
				   <?php echo e(unset_session('old')); ?>

				   <?php echo e(unset_session('errors')); ?>

				   <div class="col-md-12">
					
					<button class="btn btn-success w-100 mt-2">Create</button>
				   </div>
				</div>
			</form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
	<script>
		$(document).ready(function(){
			$('#addcast').on('click',function(){
				$('#castfield').append('<div class="form-group">'+
							'<label for="">Cast <span class="btn-info px-2 my-1 cast-field">-</span></label>'+
							'<input type="text" class="form-control">'+
						'</div>');
			})

			$('#castfield').on('click', '.remove-cast', function() {
			// $(this).closest('.cast-field').remove();
				alert(true);
			});

		});


	</script>
	<script>
		function imagepreview() {
				// alert(true);
				imagepriview.src = URL.createObjectURL(event.target.files[0]);
			}
	</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/distributor/edit.blade.php ENDPATH**/ ?>