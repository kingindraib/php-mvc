<!-- custom -->
<script src="<?php echo e(url('public/admin/js/index.js')); ?>"></script>

<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- bootstrap -->
<!-- <script src="js/bootstrap.min.js"></script>  -->
<!-- fontawsome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#menu-btn').on('click',function(){
			// alert(true);
			$('#mobile-menu').toggle(350);
		});
		$('#close-btn').on('click',function() {
			$('#mobile-menu').toggle(350);
		});
	});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>



<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

<script>
	ClassicEditor
			.create( document.querySelector( '#editor' ) )
			.then( editor => {
					console.log( editor );
			} )
			.catch( error => {
					console.error( error );
			} );
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>
<?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/includes/js.blade.php ENDPATH**/ ?>