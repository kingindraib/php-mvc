<aside id="mobile-menu">
    <div class="top">
        <div class="logo">
            <img src="<?php echo e(url(_site_settings('favicon'))); ?>">
            
            <h2>IB <span class="danger">ADMIN</span></h2>
        </div>
        <div class="close" id="close-btn">
            <span class="material-symbols-sharp">close</span>
        </div>
    </div>


<div class="sidebar">
    <a href="<?php echo e(url('admin/dashboard')); ?>" class="active">
        <span class="material-symbols-sharp">grid_view</span>
        <h3>Dashboard</h3>
        
    </a>
    
    <a href="<?php echo e(url('admin/dashboard/user/index')); ?>">
        <span class="material-symbols-sharp">person</span>
        <h3>Users</h3>
    </a>
    <a href="<?php echo e(url('admin/dashboard/movie/tickets/settings/index')); ?>">
        <span class="material-symbols-sharp">order_approve</span>
        <h3>Tickets</h3>
    </a>
    <a href="<?php echo e(url('admin/dashboard/movie/index')); ?>">
        <span class="material-symbols-sharp">movie</span>
        <h3>Movie</h3>
    </a>
    <a href="<?php echo e(url('admin/dashboard/movie/settngs/index')); ?>">
        
        <span class="material-symbols-sharp">settings</span>
        <h3>Movie Settings</h3>
    </a>
    <a href="<?php echo e(url('admin/dashboard/distributor/index')); ?>">
        <span class="material-symbols-sharp">movie</span>
        <h3>Distributor</h3>
    </a>
    <a href="#">
        <span class="material-symbols-sharp">mail</span>
        <h3>Messages</h3>
        <span class="message-count">20</span>
    </a>
    <a href="<?php echo e(url('admin/dashboard/faq/index')); ?>">
        <span class="material-symbols-sharp">assignment</span>
        <h3>FAQs</h3>
    </a>
    <a href="<?php echo e(url('admin/dashboard/profile/index')); ?>">
        <span class="material-symbols-sharp">trending_up</span>
        <h3>Profile Settings</h3>
    </a>
    <a href="<?php echo e(url('admin/dashboard/movie/settings/index')); ?>">
        <span class="material-symbols-sharp">settings</span>
        <h3>Settings</h3>
    </a>
    <a href="<?php echo e(url('logout')); ?>">
        <span class="material-symbols-sharp">logout</span>
        <h3>Logout</h3>
    </a>
</div>
</aside>	
<!-- end of aside --><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/includes/sidebar.blade.php ENDPATH**/ ?>