<?php if(!empty(session_message('success_message'))): ?>
<div class="alert alert-success" id="alert-message">
    <button type="button" class="close" data-dismiss="alert" id="close-btn">x</button>
    <strong>success!</strong>
    <?php echo e(get_message('success_message','message')); ?>

</div>
<?php echo e(unset_session('success_message')); ?>

<?php endif; ?>

<?php if(!empty(session_message('errors_message'))): ?>
<div class="alert alert-danger" id="alert-message">
    <button type="button" class="close" data-dismiss="alert" id="close-btn">x</button>
    <strong>Failled!</strong>
    <?php echo e(get_message('errors_message','message')); ?>

</div>
<?php echo e(unset_session('errors_message')); ?>

<?php endif; ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/message/message.blade.php ENDPATH**/ ?>