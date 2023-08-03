
<?php $__env->startSection('title','movie management'); ?>
<?php $__env->startSection('page_title','Create Movie'); ?>
<?php $__env->startSection('body'); ?>
<?php
use App\Components\Form;
?>

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-8 m-auto">
            
			<?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<form action="<?php echo e(url('admin/dashboard/movie/store')); ?>" method="POST">
				<div class="row">
					<div class="col-md-12">
					<?php echo e(Form::formgroup('Movie Name','text','movie_name','','',old('movie_name'))); ?>

					</div>
					<div class="col-md-6">
					<?php echo e(Form::formgroup('Tailler','url','tailler','','',old('tailler'))); ?>

					</div>
					<div class="col-md-6">
						<table class="table">
							<tbody class="Cast">
								<tr>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Cast Name" name="cast_name[]">
										</div>
									</td>
									<td>
										<span class="btn btn-primary addcast">+</span>
										
									</td>
								</tr>
							</tbody>
						</table>
						
					
					</div>
					<div class="col-md-6">
						<table class="table">
							<tbody class="directors">
								<tr>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Director Name" name="director_name[]">
										</div>
									</td>
									<td>
										<span class="btn btn-primary adddirector">+</span>
										
									</td>
								</tr>
							</tbody>
						</table>
						
					
					</div>
					<div class="col-md-6">
						<table class="table">
							<tbody class="producers">
								<tr>
									<td>
										<div class="form-group">
											<input type="text" class="form-control" placeholder="Producres Name" name="producers_name[]">
										</div>
									</td>
									<td>
										<span class="btn btn-primary addproducres">+</span>
										
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
					<?php echo e(Form::formgroup('Release Date','date','release_date','','',old('release_date'))); ?>

					</div>
					<div class="col-md-6">
						<?php echo e(Form::formgroup('Duretion','text','duretion','','',old('duretion'))); ?>

					</div>
				   <div class="col-md-6">
					<?php echo e(Form::formgroup('ficial year','text','ficial_year','','',old('ficial_year'))); ?>

				   </div>
				   <div class="col-md-6">
					<?php echo e(Form::formgroup('Grade','text','grade','','',old('grade'))); ?>

				   </div>
				   <div class="col-md-6">
					<?php echo e(Form::formgroup('Language','text','language','','',old('language'))); ?>

				   </div>
				   <div class="col-md-6">
					<?php echo e(Form::formgroup('Production House','text','production_house','','',old('production_house'))); ?>

				   </div>
				   <div class="col-md-6">
					<?php echo e(Form::formgroup('Production House Type','text','production_house_type','','',old('production_house_type'))); ?>

				   </div>
				   <div class="col-md-6">
					<div class="form-group">
						<label for="">Threator</label>
						<select name="threator_id[]" id="movie_threator" class="select2 form-control" multiple="multiple" required>
							<option value="">select one</option>
							<?php $__currentLoopData = threator(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $threator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($threator['id']); ?>"><?php echo e($threator['threator_name']); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
				   </div>

				   

				   

				   <div class="col-md-6">
					<div class="form-group">
						<label for="">Distributor</label>
						<select name="distributor_code" id="" class="form-control" required>
							<option value="">select one</option>
							<?php $__currentLoopData = distributor(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dist): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e(obj($dist)->distributor_code); ?>"><?php echo e(obj($dist)->distributor_name); ?></option>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
			   </div>
				<div class="col-md-6">
					<input class="form-control" type="file" id="" onchange="imagepreview()" name="image">
					<img id="imagepriview" src="" class="ib-img" width="100%">
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label for="">Description</label>
						<textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
					</div>
				</div>
					<?php echo e(unset_session('old')); ?>

				   <?php echo e(unset_session('errors')); ?>

				   <div class="col-md-12">
					<button class="btn btn-danger" name="status" value="draft">Draft</button>
					<button class="btn btn-success" name="status" value="publish">Publish</button>
				   </div>
				</div>
			</form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
	$(document).ready(function() {
    $('.select2').select2();
	$('.select2').select2({
	placeholder: 'Select an option'
	});
});
</script>
	<script>
		$(document).ready(function(){
			$('.addcast').on('click',function(){
				var cast = '<tr>'+
							'<td>'+
								'<div class="form-group">'+
									'<input type="text" class="form-control" placeholder="Cast Name" name="cast_name[]">'+
								'</div>'+
							'</td>'+
							'<td>'+
								'<span class="btn btn-danger removecast" onclick="removecast(this)">-</span>'+
							'</td>'+
						'</tr>';
						$('.Cast').append(cast);
			})

			// $('#castfield').on('click', '.removecats', function() {
			// // $(this).closest('.cast-field').remove();
			// 	alert(true);
			// });

			// $('.removecats').on('click',function(){
			// 	// alert(true);
			// 	$(this).remove();
			// });

		});

		function removecast(v){
			// alert(v);
			$(v).parent().parent().remove();
		}
	</script>

	<script>
				$(document).ready(function(){
			$('.addproducres').on('click',function(){
				var producers = '<tr>'+
							'<td>'+
								'<div class="form-group">'+
									'<input type="text" class="form-control" placeholder="Prodecure Name" name="producers_name[]">'+
								'</div>'+
							'</td>'+
							'<td>'+
								'<span class="btn btn-danger removecast" onclick="removecast(this)">-</span>'+
							'</td>'+
						'</tr>';
						$('.producers').append(producers);
			})
		});

		function removecast(v){
			// alert(v);
			$(v).parent().parent().remove();
		}
	</script>

	<script>
		$(document).ready(function(){
	$('.adddirector').on('click',function(){
		var directors = '<tr>'+
					'<td>'+
						'<div class="form-group">'+
							'<input type="text" class="form-control" placeholder="Director Name" name="director_name[]">'+
						'</div>'+
					'</td>'+
					'<td>'+
						'<span class="btn btn-danger removecast" onclick="removecast(this)">-</span>'+
					'</td>'+
				'</tr>';
				$('.directors').append(directors);
	})
	});

	function removecast(v){
	// alert(v);
	$(v).parent().parent().remove();
	}
	</script>



	<script>
		function imagepreview() {
				// alert(true);
				imagepriview.src = URL.createObjectURL(event.target.files[0]);
			}
	</script>



<script>
	$(document).ready(function(){
		$('#movie_show').on('click',function(){
			var id = $('#movie_threator').val();
		});
	});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie/create.blade.php ENDPATH**/ ?>