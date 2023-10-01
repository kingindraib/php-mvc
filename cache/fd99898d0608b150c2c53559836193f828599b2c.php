<?php if(!empty(session_message('success_message'))): ?>
 
<div class="alert alert-success" id="alert-message">
    <button type="button" class="close" data-dismiss="alert" id="close-btn">x</button>
    <strong>success!</strong>
    <?php echo e(session_message('success_message','message')); ?>

</div>
<?php echo e(unset_session('success_message')); ?>

<?php endif; ?>

<?php if(!empty(session_message('errors_message'))): ?>
<div class="alert alert-danger" id="alert-message">
    <button type="button" class="close" data-dismiss="alert" id="close-btn">x</button>
    <strong>Message!</strong>
    <?php echo e(session_message('errors_message','message')); ?>

</div>
<?php echo e(unset_session('errors_message')); ?>

<?php endif; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
    $('.close').on('click',function(){
        $('.alert').hide(300);
        // alert(true);
    });
});
</script><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/message/message.blade.php ENDPATH**/ ?>