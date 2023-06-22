<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php echo $__env->make('home.test', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  welcome to movie management
  <br>
  <?php if(1==1): ?>
     true 
  <?php else: ?>
      false
  <?php endif; ?>
  <hr/>
  <?php echo $__env->make('home.test', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/index.blade.php ENDPATH**/ ?>