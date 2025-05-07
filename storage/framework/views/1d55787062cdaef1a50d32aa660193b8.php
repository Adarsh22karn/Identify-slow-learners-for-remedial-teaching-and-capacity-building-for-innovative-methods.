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
    <?php echo e(__('About Us')); ?>

   <?php $__env->endSlot(); ?>

   <?php $__env->slot('hero', null, []); ?> 
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown"><?php echo e(__('About Us')); ?></h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo e(route('site.home')); ?>"><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo e(route('site.sitemap')); ?>"><?php echo e(__('Pages')); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php echo e(__('About')); ?></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
   <?php $__env->endSlot(); ?>

  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="<?php echo e(asset('img/about.jpg')); ?>" alt="" style="object-fit: cover;" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo e(__('About Us')); ?></h6>
          <h1 class="mb-4"><?php echo e(__('Welcome to ') . config('app.name')); ?></h1>
          <p class="mb-4">At Learnopia, we believe that every student has unique potential. Our mission is to bridge learning gaps by identifying slow learners early and supporting them through innovative remedial teaching and capacity-building strategies.</p>
          <p class="mb-4">We understand that every learner is different. Learnopia uses intelligent tools to assess student performance, recognize learning difficulties early, and create customized remedial plans. These plans help students overcome challenges and build a strong foundation for lifelong learning.</p>
          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Identifying Slow Learners</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Remedial Teaching Plans</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Skill & Capacity Building</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Online Classes</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Teacher Support System</p>
            </div>
          </div>
          <a class="btn btn-primary py-3 px-5 mt-2" href="javascript:void(0)">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Mission Start -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo e(__('Mission')); ?></h6>
          <h2 class="mb-4"><?php echo e(__('Empowering through Education')); ?></h2>
          <p class="mb-4">At Learnopia, our mission is to transform education by creating a supportive and inclusive platform specifically designed for slow learners. We are committed to identifying learning difficulties early and providing remedial teaching methods that cater to each student's unique pace and needs. 
            Our platform fosters a culture of growth, patience, and personalized learning, ensuring that no student is left behind. Through intelligent assessment tools, skilled instructors, and customized remedial pathways, we aim to build the confidence, skills, and academic success of every learner.
            Driven by a passion for equitable education, Learnopia believes in the power of remedial education to unlock hidden potential and pave the way toward a more inclusive and empowered learning environment.</p>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="<?php echo e(asset('img/about.jpg')); ?>" alt="" style="object-fit: cover;" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mission End -->

  <!-- Vision Start -->
  <div class="container-xxl py-5">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="<?php echo e(asset('img/about.jpg')); ?>" alt="" style="object-fit: cover;" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo e(__('Vision')); ?></h6>
          <h2 class="mb-4"><?php echo e(__('Empowering Growth, Everywhere')); ?></h2>
          <p class="mb-4">To create an inclusive educational ecosystem where every slow learner is identified, supported, and empowered through effective remedial 
            teaching and innovative learning strategies. We envision a future where personalized education bridges learning gaps, boosts confidence, and enables every 
            student to thrive academically—regardless of their pace or starting point. At Learnopia, we aim to be a catalyst for equitable education by ensuring that no learner is left behind.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Vision End -->

  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3"><?php echo e(__('Instructors')); ?></h6>
        <h1 class="mb-5"><?php echo e(__('Expert Instructors')); ?></h1>
      </div>
      <div class="row g-4">
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="<?php echo e(asset('img/team-1.jpg')); ?>" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Adarsh Karn</h5>
              <small>CEO</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="<?php echo e(asset('img/team-2.jpg')); ?>" alt="">
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Abhinav Mani Thipathi</h5>
              <small>Product Manager</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="<?php echo e(asset('img/team-3.jpg')); ?>" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Kuldeep Pathak</h5>
              <small>Lead Remedial Instructor</small>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="team-item bg-light">
            <div class="overflow-hidden">
              <img class="img-fluid" src="<?php echo e(asset('img/team-4.jpg')); ?>" alt="" />
            </div>
            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
              <div class="bg-light d-flex justify-content-center pt-2 px-1">
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square btn-primary mx-1" href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
            <div class="text-center p-4">
              <h5 class="mb-0">Praveen Kaur</h5>
              <small>Remedial Education Specialist</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Team End -->

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal09258b082cb7feea5c3a304d0211a36c)): ?>
<?php $component = $__componentOriginal09258b082cb7feea5c3a304d0211a36c; ?>
<?php unset($__componentOriginal09258b082cb7feea5c3a304d0211a36c); ?>
<?php endif; ?><?php /**PATH C:\Users\DELL\Downloads\learnopia-lms-master\learnopia-lms-master\resources\views/front-end/about.blade.php ENDPATH**/ ?>