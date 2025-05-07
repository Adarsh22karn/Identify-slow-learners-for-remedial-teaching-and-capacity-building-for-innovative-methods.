<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
  <a href="<?php echo e(route('site.home')); ?>" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i><?php echo e(config('app.name')); ?></h2>
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="<?php echo e(route('site.home')); ?>" class="nav-item nav-link active"><?php echo e(__('Home')); ?></a>
      <a href="<?php echo e(route('site.about')); ?>" class="nav-item nav-link"><?php echo e(__('About')); ?></a>
      <a href="<?php echo e(route('site.courses')); ?>" class="nav-item nav-link"><?php echo e(__('Courses')); ?></a>
      
      <a href="<?php echo e(route('site.contact')); ?>" class="nav-item nav-link"><?php echo e(__('Contact')); ?></a>
    </div>
    <a href="javascript:void(0)" class="btn btn-success py-4 px-lg-4 d-none d-lg-block"><?php echo e(__('Enroll Now')); ?><i class="fas fa-arrow-right ms-3"></i></a>
  </div>
</nav>
<!-- Navbar End --><?php /**PATH C:\Users\DELL\Downloads\learnopia-lms-master\learnopia-lms-master\resources\views/partials/front/navbar.blade.php ENDPATH**/ ?>