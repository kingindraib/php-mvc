<header>
    <div class="header">
        <div class="logo">
            <img src="<?php echo e(url(_site_settings('logo'))); ?>">
            
        </div>
        <div class="menu">
            <div class="mobile_menu" style="display: none;">
                <i class="fa fa-bars"></i>
            </div>
            <div class="mobile_menue_items" style="display: none;">
                <ul>
                    <ul>
                        <li><a href="<?php echo e(url('')); ?>">Home </a></li>
                        <li><a href="#">Movie </a></li>
                        <?php $__currentLoopData = getCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item['status']=='publish' && $item['is_nav']==1): ?>
                        <li><a href="#"><?php echo e($item['category_name']); ?> </a></li>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="#">login</a></li>
                    </ul>
                    
                </ul>
            </div>
            <nav>
                <ul>
                    <li><a href="<?php echo e(url('')); ?>">Home </a></li>
                    <li><a href="#">Movie </a></li>
                    <?php $__currentLoopData = getCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($item['status']=='publish' && $item['is_nav']==1): ?>
                    <li><a href="<?php echo e(url('archive-page/'.$item['id'])); ?>"><?php echo e($item['category_name']); ?> </a></li>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(Auth()): ?>
                    <li><a href="<?php echo e(url('user/dashboard')); ?>">My Account</a></li>
                    <?php else: ?>
                    <li><a href="<?php echo e(url('login')); ?>"><img src="<?php echo e(url('public/home/images/user.png')); ?>" alt=""></a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </div>
</header><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/home/includes/header.blade.php ENDPATH**/ ?>