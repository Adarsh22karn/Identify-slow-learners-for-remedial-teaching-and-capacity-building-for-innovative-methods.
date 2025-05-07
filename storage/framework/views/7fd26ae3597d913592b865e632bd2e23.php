<?php if (isset($component)) { $__componentOriginal09258b082cb7feea5c3a304d0211a36c = $component; } ?>
<?php $component = App\View\Components\MasterLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('master-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\MasterLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

   <?php $__env->slot('title', null, []); ?> 
    <?php echo e(__('Sitemap')); ?>

   <?php $__env->endSlot(); ?>

   <?php $__env->slot('hero', null, []); ?> 
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown"><?php echo e(__('Sitemap')); ?></h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo e(route('site.home')); ?>"><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo e(route('site.sitemap')); ?>"><?php echo e(__('Pages')); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php echo e(__('Sitemap')); ?></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
   <?php $__env->endSlot(); ?>

  <!-- Sitemap Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3"><?php echo e(__('Sitemap')); ?></h6>
        <h1 class="mb-5"><?php echo e(config('app.name') . __(' Pages Sitemap')); ?></h1>
      </div>
      <div class="col-12 d-flex justify-content-center">
        <div class="col-10 col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
          <ul class="list-group">
            <li class="list-group-item"><a href="#">Home</a></li>
            <li class="list-group-item">
              <a href="#">Courses</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">All Courses</a></li>
                <li class="list-group-item"><a href="#">Popular Courses</a></li>
                <li class="list-group-item"><a href="#">Categories</a></li>
                <li class="list-group-item"><a href="#">Search Courses</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="#">My Courses</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">Enrolled Courses</a></li>
                <li class="list-group-item"><a href="#">Completed Courses</a></li>
                <li class="list-group-item"><a href="#">In Progress Courses</a></li>
                <li class="list-group-item"><a href="#">Certificates</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="#">Instructors</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">All Instructors</a></li>
                <li class="list-group-item"><a href="#">Instructor Profiles</a></li>
                <li class="list-group-item"><a href="#">Become an Instructor</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="#">About Us</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">Mission and Vision</a></li>
                <li class="list-group-item"><a href="#">Team</a></li>
                <li class="list-group-item"><a href="#">Testimonials</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="#">Blog</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">All Posts</a></li>
                <li class="list-group-item"><a href="#">Categories</a></li>
                <li class="list-group-item"><a href="#">Tags</a></li>
              </ul>
            </li>
            <li class="list-group-item">
              <a href="#">Contact Us</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">Contact Information</a></li>
                <li class="list-group-item"><a href="#">Contact Form</a></li>
                <li class="list-group-item"><a href="#">Support Center</a></li>
              </ul>
            </li>
            <li class="list-group-item"><a href="#">FAQ</a></li>
            <li class="list-group-item"><a href="#">Privacy Policy</a></li>
            <li class="list-group-item"><a href="#">Terms of Service</a></li>
            <li class="list-group-item"><a href="#">Sign Up / Register</a></li>
            <li class="list-group-item"><a href="#">Log In</a></li>
            <li class="list-group-item">
              <a href="#">User Profile</a>
              <ul class="list-group">
                <li class="list-group-item"><a href="#">Personal Information</a></li>
                <li class="list-group-item"><a href="#">Course Progress</a></li>
                <li class="list-group-item"><a href="#">Notifications</a></li>
                <li class="list-group-item"><a href="#">Settings</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Sitemap End -->

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal09258b082cb7feea5c3a304d0211a36c)): ?>
<?php $component = $__componentOriginal09258b082cb7feea5c3a304d0211a36c; ?>
<?php unset($__componentOriginal09258b082cb7feea5c3a304d0211a36c); ?>
<?php endif; ?><?php /**PATH C:\Users\DELL\Downloads\learnopia-lms-master\learnopia-lms-master\resources\views/front-end/sitemap.blade.php ENDPATH**/ ?>