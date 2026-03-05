<!DOCTYPE html> <html lang="en">
<head> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alin Anarghya</title>
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('bootstrap/css/style.css')); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container"> <a class="navbar-brand fw-bold" href="#">My Portofolio</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?php echo e(request()->is('/') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a>
                    <a class="nav-link <?php echo e(request()->is('about') ? 'active' : ''); ?>" href="<?php echo e(route('about')); ?>">About</a>
                    <a class="nav-link <?php echo e(request()->is('skills') ? 'active' : ''); ?>" href="<?php echo e(route('skills')); ?>">Skills</a>
                    <a class="nav-link <?php echo e(request()->is('contact') ? 'active' : ''); ?>" href="<?php echo e(route('contact')); ?>">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <main style="min-height: 80vh;"> <?php echo $__env->yieldContent('content'); ?>
    </main>
    
    <footer class="text-center py-4 mt-5 border-top footer bg-dark text-light">
        <p class="text-muted mb-0">&copy; 2026 Alin Anarghya. Built with Laravel.</p>
    </footer>

    <script src="<?php echo e(asset('bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html><?php /**PATH D:\ALIN\RPL\web-portofolio\todo-app\resources\views/layout/app.blade.php ENDPATH**/ ?>