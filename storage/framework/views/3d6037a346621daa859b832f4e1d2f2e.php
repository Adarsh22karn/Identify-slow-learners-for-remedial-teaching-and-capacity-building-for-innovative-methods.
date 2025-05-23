<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes" />
    <meta name="author" content="Muhammad Nasir Uddin Khan Shawon" />
    <meta name="description" content="Embark on a limitless learning journey with Learnopia, the ultimate Learning Management System (LMS). Access diverse courses, learn from experts, and cultivate valuable skills effortlessly. Discover boundless opportunities to grow and thrive. Get started now!" />
    <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JavaScript, JS, Vanilla JS, Bootstrap, Bootstrap 5, Sass, SCSS, PHP, Laravel, Blade, Feather Icons, AdminKit, Admin Panel, Template, Dashboard, Front-End, Back-End, UI Kit, Web, Website, Responsive, Learning Management System, LMS, Online Education, E-Learning, Courses, Expert Instructors, Skill Development, Personalized Learning, Education Platform, Interactive Learning, Web Development, Programming, Design, Technology, Self-improvement, Knowledge, Growth, Online Courses, Student Resources" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title><?php echo e($title); ?> | <?php echo e(config('app.name', 'Laravel')); ?> - <?php echo e(config('app.tagline')); ?></title>
    <!-- Favicon -->
    <link href="<?php echo e(asset('img/favicon.ico')); ?>" rel="icon">
    <link rel="canonical" href="https://github.com/shawonk007/learnopia-lms" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" />
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('plugins/animate/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('plugins/owlcarousel/assets/owl.carousel.min.css')); ?>" />
    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>" />
  </head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php if(auth()->guard()->check()): ?>
      <?php if (isset($component)) { $__componentOriginal8393548512add73c3898c1e1e6d638bf = $component; } ?>
<?php $component = App\View\Components\FrontTopbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-topbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontTopbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8393548512add73c3898c1e1e6d638bf)): ?>
<?php $component = $__componentOriginal8393548512add73c3898c1e1e6d638bf; ?>
<?php unset($__componentOriginal8393548512add73c3898c1e1e6d638bf); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal378989310882355ba3f59740dcfbae25 = $component; } ?>
<?php $component = App\View\Components\FrontNavbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontNavbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal378989310882355ba3f59740dcfbae25)): ?>
<?php $component = $__componentOriginal378989310882355ba3f59740dcfbae25; ?>
<?php unset($__componentOriginal378989310882355ba3f59740dcfbae25); ?>
<?php endif; ?>

    <?php if(isset($hero)): ?>
      <?php echo e($hero); ?>

    <?php endif; ?>

    <?php echo e($slot); ?>

        

    <?php if (isset($component)) { $__componentOriginal1a9c5e6148ebb2fb26008b3ddc77c1fb = $component; } ?>
<?php $component = App\View\Components\FrontFooter::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('front-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\FrontFooter::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1a9c5e6148ebb2fb26008b3ddc77c1fb)): ?>
<?php $component = $__componentOriginal1a9c5e6148ebb2fb26008b3ddc77c1fb; ?>
<?php unset($__componentOriginal1a9c5e6148ebb2fb26008b3ddc77c1fb); ?>
<?php endif; ?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('plugins/wow/wow.min.js' )); ?>"></script>
    <script src="<?php echo e(asset('plugins/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/owlcarousel/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
	  <script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.all.min.js')); ?>"></script>
    <!-- Template Javascript -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <?php echo $__env->make('partials.admin.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
      var stripe = Stripe('pk_test_51NjDwlSD9efIpDnkzJHyxyifgXgCFsfpPtjU4yGIIqbfaV4FELkeR5zuJOAA0v5moJChG6dLzx9jDEoEKHsgjrML009hG558hA');
    </script>
    <script>
      document.getElementById('payment-form').addEventListener('submit', function(event) {
        // event.preventDefault();
  
        var card = {
          number: '4242424242424242',
          exp_month: 12,
          exp_year: 25,
          cvc: '123'
        };
  
        stripe.createToken(card).then(function(result) {
          if (result.error) {
            // Handle error
          } else {
            // Handle successful payment simulation
            console.log(result.token);
          }
        });
      });
    </script>
    <?php if(isset($script)): ?>
      <?php echo e($script); ?>

    <?php endif; ?>
</body>

</html><?php /**PATH C:\Users\DELL\Downloads\learnopia-lms-master\learnopia-lms-master\resources\views/layouts/master.blade.php ENDPATH**/ ?>