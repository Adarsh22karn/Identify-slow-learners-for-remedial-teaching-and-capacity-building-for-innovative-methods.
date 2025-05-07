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
    <?php echo e(__('Our Courses')); ?>

   <?php $__env->endSlot(); ?>

   <?php $__env->slot('hero', null, []); ?> 
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown"><?php echo e(__('Our Courses')); ?></h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo e(route('site.home')); ?>"><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo e(route('site.sitemap')); ?>"><?php echo e(__('Pages')); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php echo e(__('Courses')); ?></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
   <?php $__env->endSlot(); ?>

  <!-- Categories Start -->
  <section class="container-xxl py-5 category">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3"><?php echo e(__('Categories')); ?></h6>
        <h1 class="mb-5"><?php echo e(__('Courses Categories')); ?></h1>
      </div>
      <div class="row g-3">
        <div class="col-lg-7 col-md-6">
          <div class="row g-3">
            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
              <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                <img class="img-fluid" src="img/cat-1.jpg" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                  <h5 class="m-0">Web Design</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
              <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                <img class="img-fluid" src="img/cat-2.jpg" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                  <h5 class="m-0">Graphic Design</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
              <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                <img class="img-fluid" src="img/cat-3.jpg" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                  <h5 class="m-0">Video Editing</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
          <a class="position-relative d-block h-100 overflow-hidden" href="javascript:void(0)">
            <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;" />
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
              <h5 class="m-0">Online Marketing</h5>
              <small class="text-primary">49 Courses</small>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- Categories Start -->

  <!-- Courses Start -->
  <section class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3"><?php echo e(__('Courses')); ?></h6>
        <h1 class="mb-5"><?php echo e(__('Our Courses')); ?></h1>
      </div>
      <div class="row g-4 justify-content-center">
        <?php $__empty_1 = true; $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="<?php echo e(Storage::url($course->details->thumbnail )); ?>" alt="">
                
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                  <a href="<?php echo e(route('course.display', ['slug' => $course->slug])); ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;"><?php echo e(__('Read More')); ?></a>
                  <a href="<?php echo e(route('enrollment', ['slug' => $course->slug, 'course_id' => $course->id])); ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;"><?php echo e(__('Enroll')); ?></a>
                </div>
              </div>
              <div class="text-center p-4 pb-0">
                <h3 class="mb-0">$<?php echo e($course->regular_price); ?></h3>
                <div class="mb-3">
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small class="fas fa-star text-primary"></small>
                  <small>(123)</small>
                </div>
                <div class="mb-4">
                  <h5><?php echo e($course->title); ?></h5>
                  <small class="flex-fill text-center border-end py-2"><i class="fa fa-user-tie text-primary me-2"></i><?php echo e($course->user->firstname . ' ' . $course->user->lastname); ?></small>
                </div>
              </div>
              <div class="d-flex border-top">
                <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>1.49 Hrs</small>
                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 Students</small>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <?php echo e(__('No Data Found')); ?>

        <?php endif; ?>
      </div>
    </div>
  </section>
  <!-- Courses End -->

  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
      <div class="text-center">
        <h6 class="section-title bg-white text-center text-primary px-3"><?php echo e(__('Testimonial')); ?></h6>
        <h1 class="mb-5"><?php echo e(__('Our Students Say!')); ?></h1>
      </div>
      <div class="owl-carousel testimonial-carousel position-relative">
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo e(asset('img/testimonial-1.jpg')); ?>" style="width: 80px; height: 80px;" />
          <h5 class="mb-0">Priya</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">The personalized lessons allowed me to learn at my own pace, and now I feel more confident in my studies!</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo e(asset('img/testimonial-2.jpg')); ?>" style="width: 80px; height: 80px;" />
          <h5 class="mb-0">Ravi</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">The resources in the library and the home projects really helped me strengthen my skills. I love how the platform adapts to my needs!</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo e(asset('img/testimonial-3.jpg')); ?>" style="width: 80px; height: 80px;" />
          <h5 class="mb-0"> Anand</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">The instructors are patient and understanding, and they make learning enjoyable. I can now tackle even the most challenging subjects!</p>
          </div>
        </div>
        <div class="testimonial-item text-center">
          <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo e(asset('img/testimonial-4.jpg')); ?>" style="width: 80px; height: 80px;" />
          <h5 class="mb-0">Sweta</h5>
          <p>Profession</p>
          <div class="testimonial-text bg-light text-center p-4">
            <p class="mb-0">I used to struggle with catching up in class, but thanks to the remedial classes and support from the instructors, I’m now keeping up and even excelling!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial End -->

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal09258b082cb7feea5c3a304d0211a36c)): ?>
<?php $component = $__componentOriginal09258b082cb7feea5c3a304d0211a36c; ?>
<?php unset($__componentOriginal09258b082cb7feea5c3a304d0211a36c); ?>
<?php endif; ?><?php /**PATH C:\Users\DELL\Downloads\learnopia-lms-master\learnopia-lms-master\resources\views/front-end/courses.blade.php ENDPATH**/ ?>