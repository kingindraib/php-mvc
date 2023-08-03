<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie || <?php echo $__env->yieldContent('title'); ?></title>

    <?php echo $__env->make('admin.includes.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>

	<div class="container">
        <?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('admin.includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


	<!-- main part star -->
	<main>
		<h1><?php echo $__env->yieldContent('page_title'); ?></h1>
		<div class="date">
			<input type="date" name="" value="2020-02-23">
		</div>

        <?php echo $__env->yieldContent('body'); ?>
    </main>
	<!-- main part end -->

	
</div>

<?php echo $__env->make('admin.includes.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/master.blade.php ENDPATH**/ ?>