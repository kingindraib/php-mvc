
<?php $__env->startSection('title','movie management'); ?>
<?php $__env->startSection('page_title','Assign threator'); ?>
<?php $__env->startSection('body'); ?>
<?php
use App\Components\Form;
?>

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-8 m-auto">
            
            <div class="row">
                <div class="col-md-6">
                    <p>Duretion : <span><?php echo e($data->duretion); ?></span> days</p>
                </div>
            </div>

			<?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<form action="<?php echo e(url('admin/dashboard/movie/assign/display/'.$data->id)); ?>" method="POST">
				<div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Select Threator</label>
                            <select name="threator_id" id="" class="form-control">
                                <?php $__currentLoopData = movie_threator($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movieth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e(threator_name(obj($movieth)->threator_id)->id); ?>"><?php echo e(threator_name(obj($movieth)->threator_id)->threator_name); ?></option>,
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
					<?php echo e(unset_session('old')); ?>

				   <?php echo e(unset_session('errors')); ?>

				   <div class="col-md-12">
					<button class="btn btn-danger" name="status" value="draft">create +</button>
					
				   </div>
				</div>
			</form>
        </div>
        <div class="col-md-12 mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>threator</th>
                        <th>Detail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;  ?>
                    <?php $__empty_1 = true; $__currentLoopData = movie_threator($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thdetail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <?php $thdetail = obj($thdetail); ?>
                    <tr>
                        <td><?php echo e($i++); ?></td>
                        <td><?php echo e(threator_name($thdetail->threator_id)->threator_name); ?></td>
                        <td>
                            <ul>
                                <?php $__currentLoopData = movie_screen($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movieScreen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>* <?php echo e(screen_name(obj($movieScreen)->screen_id)->screen_name); ?>

                                    <ul>
                                        <?php $__currentLoopData = movie_show($data->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movieshow): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li> - <?php echo e(show_name(obj($movieshow)->shows_id)->show_name); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </td>
                        <td>
                            <a href="<?php echo e(url('admin/dashboard/movie/movietheator/edit/'.$data->id)); ?>" class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="<?php echo e(url('admin/dashboard/movie/movietheator/delete/'.$data->id)); ?>" class="btn btn-danger" onclick="return confirm('are you sure ?')"><i class="fa-solid fa-trash"></i></a>    
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="4">No data found</td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie/assign.blade.php ENDPATH**/ ?>