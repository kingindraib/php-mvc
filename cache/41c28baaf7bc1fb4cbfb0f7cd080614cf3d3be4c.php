<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Majja KO TV</title>
		<?php echo $__env->make('home.includes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<!-- sweet alert 2 -->
</head>

<body>
	<?php echo $__env->make('home.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

            <?php echo $__env->yieldContent('body'); ?>

    


<?php echo $__env->make('home.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('home.includes.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/master.blade.php ENDPATH**/ ?>