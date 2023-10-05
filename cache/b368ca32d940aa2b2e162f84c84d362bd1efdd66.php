
<?php $__env->startSection('title','Category Management'); ?>
<?php $__env->startSection('page_title','Create Category'); ?>
<?php
use App\Components\Form;
?>
<?php $__env->startSection('body'); ?>
<div class="container-md">
    <div class="row">
        <div class="col-md-8 mt-3">
            <a href="<?php echo e(url('admin/dashboard/category/index')); ?>" class="btn btn-success">back <i class="fa-solid fa-backward"></i></a>
        </div>
        <div class="col-md-6 m-auto">
            <?php echo $__env->make('message.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <form action="<?php echo e(url('admin/dashboard/category/update/'.$data->id)); ?>" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <?php echo e(Form::formgroup('Category Name','text','category_name','','',$data->category_name)); ?>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">IS Nav</label>
                            <select name="is_nav" id="" class="form-control">
                                <?php if($data->is_nav == 1): ?>
                                <option value="1" selected>yes</option>
                                <option value="0">No</option>
                                <?php elseif($data->is_nav ==0): ?>
                                <option value="0" selected>No</option>
                                <option value="1">yes</option>
                                <?php else: ?>
                                <option value="1">yes</option>
                                <option value="0">No</option>
                                <?php endif; ?>
                            </select>
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
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\php xampp\xampp second\htdocs\movie\views/admin/settings/category/edit.blade.php ENDPATH**/ ?>