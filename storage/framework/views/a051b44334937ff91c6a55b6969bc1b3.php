
<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-10 col-lg-3 mb-10">
        <img src="<?php echo e(asset('/img/pallete.png')); ?>" class="img-fluid rounded">
    </div>
    <div class="col-md-10 col-lg-3 mb-10">
        <img src="<?php echo e(asset('/img/lipstik.png')); ?>" class="img-fluid rounded">
    </div>
    <div class="col-md-10 col-lg-3 mb-10">
        <img src="<?php echo e(asset('/img/eyeshadow.png')); ?>" class="img-fluid rounded">
    </div>
    <div class="col-md-10 col-lg-3 mb-10">
        <img src="<?php echo e(asset('/img/blush.png')); ?>" class="img-fluid rounded">
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\my_app\resources\views/home/index.blade.php ENDPATH**/ ?>