
<?php $__env->startSection('title','movie management'); ?>
<?php $__env->startSection('page_title','Assign threator Create'); ?>
<?php $__env->startSection('body'); ?>
<?php
use App\Components\Form;
?>

<div class="container-md">
    <div class="row my-3">
        <div class="col-md-8 m-auto">
            
			<?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<form action="<?php echo e(url('admin/dashboard/movie/assign/store/')); ?>" method="POST">
                <input type="hidden" name="movie_id" id="" value="<?php echo e($movie_id); ?>">
				<div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Select Screen</label>
                            
                            <select name="screen_code" id="screen_id" class="form-control">
                                <option value="">Select one</option>
                                <?php $__currentLoopData = threator_screen($data->threator_code); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $screen): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $screen = obj($screen); ?>
                                <option value="<?php echo e($screen->screen_code); ?>"><?php echo e($screen->screen_name); ?></option>,
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="">Show</label>
                            <select name="shows_id[]" id="movie_show" class="select2 form-control" multiple="multiple" required>
                                <option value="">select one</option>
 
                            </select>
                        </div>
                       </div>
					<?php echo e(unset_session('old')); ?>

				   <?php echo e(unset_session('errors')); ?>

				   <div class="col-md-12">
					<button class="btn btn-danger" name="status" value="draft" type="submit">create +</button>
					
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
        $('#screen_id').on('change',function(){
            var id = $(this).val();
            // alert(id);
            $.ajax({
                url: "<?php echo e(url('admin/dashboard/movie/assign/get_show/')); ?>"+id,
                type: "GET",
                success: function(show){
                    // console.log(show);
                    var showJson = JSON.parse(show);
                    $.each(showJson, function(index,value){
                        console.log(value.id);
                        $('#movie_show').empty();
                        $('#movie_show').append('<option value="'+value.id+'">'+value.show_name+'</option>');
                    });
                },
            });
        });
    });
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/movie/assign_create.blade.php ENDPATH**/ ?>