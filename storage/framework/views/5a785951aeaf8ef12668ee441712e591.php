

<?php $__env->startSection('content'); ?>
<div class="container py-1">
    <div class="text-center mb-5">
        <h2 class="display-4 fw-bold text-white">Get In <span class="text-gradient">Touch</span></h2>
        <p class="text-muted">Feel free to reach out for collaborations or just a friendly hello!</p>
    </div>

    <div class="row g-5 justify-content-center">
        <div class="col-lg-4">
            <div class="contact-info-card p-4 h-100">
                <h4 class="text-neon mb-4">Contact Info</h4>
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-envelope-fill text-neon me-3 fs-4"></i>
                    <div>
                        <span class="d-block text-muted small">EMAIL</span>
                        <span class="text-white">chatarinaanarghya@gmail.com</span>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="bi bi-linkedin text-neon me-3 fs-4"></i>
                    <div>
                        <span class="d-block text-muted small">LINKEDIN</span>
                        <span class="text-white">linkedin.com/in/chaya-lintang-anarghya</span>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <i class="bi bi-github text-neon me-3 fs-4"></i>
                    <div>
                        <span class="d-block text-muted small">GITHUB</span>
                        <span class="text-white">github.com/alin-anarghya</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="about-text-box p-4 p-md-5">
                <form action="#" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="mb-3">
                        <label class="form-label text-neon small fw-bold">NAME</label>
                        <input type="text" class="form-control bg-dark-input text-white border-neon-subtle" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-neon small fw-bold">EMAIL</label>
                        <input type="email" class="form-control bg-dark-input text-white border-neon-subtle" placeholder="your@email.com">
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-neon small fw-bold">MESSAGE</label>
                        <textarea class="form-control bg-dark-input text-white border-neon-subtle" rows="4" placeholder="How can I help you?"></textarea>
                    </div>
                    <button type="submit" class="btn btn-neon w-100 py-2 fw-bold">SEND MESSAGE</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\ALIN\RPL\web-portofolio\todo-app\resources\views/contact.blade.php ENDPATH**/ ?>