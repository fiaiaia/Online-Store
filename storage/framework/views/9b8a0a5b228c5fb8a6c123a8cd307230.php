 <?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('subtitle', $viewData["subtitle"]); ?> <?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header"> Purchase Completed
    </div>
    <div class="card-body">
        <div class="alert alert-success" role="alert">
            Congratulations, purchase completed. Order number is <b>#<?php echo e($viewData["order"]->getId()); ?></b>
        </div>
    </div>
</div> <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\my_app\resources\views/cart/purchase.blade.php ENDPATH**/ ?>