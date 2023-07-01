<!-- jqury -->
	<!-- <script src="https://code.jquery.com/jquery.min.js"></script> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
	<!-- owl cursure -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
	<!-- owl cursure mini -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<!-- font awsome js -->
	<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
	<!-- index.js -->
	<script type="text/javascript" src="<?php echo e(url('public/home/js/index.js')); ?>"></script>
	<!-- sweet alert 2 js -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	
	<script>
		$(document).ready(function(){
			$('#close-btn').click(function(){
				$('#alert-message').hide(300);
			})
		});
	</script>
	<?php echo $__env->yieldPushContent('home_script'); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/includes/js.blade.php ENDPATH**/ ?>