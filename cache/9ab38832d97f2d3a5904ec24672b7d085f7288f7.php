
<?php $__env->startSection('title','Post Management'); ?>
<?php $__env->startSection('page_title','Post Category'); ?>
<?php
use App\Components\Form;
?>
<?php $__env->startSection('body'); ?>
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="<?php echo e(url('admin/dashboard/faq/index')); ?>" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-12 m-auto">
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(url('admin/dashboard/faq/store')); ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-8">
                        <?php echo e(Form::formgroup('Question','text','question','','',old('question'))); ?>

                    </div>
                    <div class="col-md-12">
                       <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="">Answer</label>
                                <textarea name="answer" id="editor" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>
                       </div>
                    </div>
                   
                   

                 
                    <?php echo e(unset_session('old')); ?>

                    <?php echo e(unset_session('errors')); ?>

                    <div class="col-md-12">
                        <button class="btn btn-danger" name="status" value="draft">Draft</button>
                        <button class="btn btn-success" name="status" value="publish">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<script>
    function imagepreview() {
            // alert(true);
            imagepriview.src = URL.createObjectURL(event.target.files[0]);
        }
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/faq/create.blade.php ENDPATH**/ ?>