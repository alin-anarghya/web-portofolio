

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row align-items-center py-5">
        <div class="col-lg-8">
            <h1 class="display-3 fw-bold">Hey there! I'm <br><span class="text-gradient">Alin Anarghya</span></h1>
            <p class="lead fs-4 text-neon">
                Mechatronics Undergraduate | Tech Enthusiast
            </p>
            <div class="mt-4">
                <a href="<?php echo e(route('skills')); ?>" class="btn btn-neon btn-lg px-4 me-2">Explore My Skills</a>
                <a href="<?php echo e(route('contact')); ?>" class="btn btn-outline-light btn-lg px-4">Let's Talk</a>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\ALIN\RPL\web-portofolio\todo-app\resources\views/home.blade.php ENDPATH**/ ?>