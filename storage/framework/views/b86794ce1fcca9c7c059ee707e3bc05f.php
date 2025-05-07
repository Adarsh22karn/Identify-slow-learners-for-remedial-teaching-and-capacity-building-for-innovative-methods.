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
    <?php echo e(__('Homepage')); ?>

   <?php $__env->endSlot(); ?>

   <?php $__env->slot('hero', null, []); ?> 
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
      <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="<?php echo e(asset('img/carousel-1.jpg')); ?>" alt="" />
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-sm-10 col-lg-8">
                  <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Remedial Learning Made Easy</h5>
                  <h1 class="display-3 text-white animated slideInDown">Get the Support You Need – Anytime, Anywhere</h1>
                  <p class="fs-5 text-white mb-4 pb-2">At Learnopia, we offer targeted online remedial classes designed especially for slow learners who 
                    need extra support in mastering core concepts. Our personalized lessons, interactive tools, and expert guidance help learners build confidence and improve academic performance at their own pace.</p>
                  <a href="javascript:void(0)" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo e(__('Read More')); ?></a>
                  <a href="<?php echo e(route('login')); ?>" class="btn btn-light py-md-3 px-md-5 animated slideInRight"><?php echo e(__('Join Now')); ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="owl-carousel-item position-relative">
          <img class="img-fluid" src="<?php echo e(('img/carousel-2.jpg')); ?>" alt="" />
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
            <div class="container">
              <div class="row justify-content-start">
                <div class="col-sm-10 col-lg-8">
                  <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Remedial Support for Slow Learners</h5>
                  <h1 class="display-3 text-white animated slideInDown">Learn at Your Own Pace, From Anywhere</h1>
                  <p class="fs-5 text-white mb-4 pb-2">At Learnopia, we provide specialized online classes tailored for slow learners who need extra guidance and 
                    support. Our platform offers remedial lessons, interactive exercises, and expert mentoring to help learners understand difficult concepts and build a strong academic foundation.</p>
                  <a href="javascript:void(0)" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"><?php echo e(__('Read More')); ?></a>
                  <a href="javascript:void(0)" class="btn btn-light py-md-3 px-md-5 animated slideInRight"><?php echo e(__('Join Now')); ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->
   <?php $__env->endSlot(); ?>

  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fas fa-3x fa-graduation-cap text-primary mb-4"></i>
              <h5 class="mb-3"><?php echo e(__('Skilled Remedial Instructors')); ?></h5>
              <p>Expert teachers focused on guiding slow learners with personalized support.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fas fa-3x fa-globe text-primary mb-4"></i>
              <h5 class="mb-3">Online Remedial Classes</h5>
              <p>Online sessions designed to help slow learners improve at their own pace.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fas fa-3x fa-home text-primary mb-4"></i>
              <h5 class="mb-3">Home-Based Learning</h5>
              <p>Interactive activities that reinforce learning outside the classroom.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
          <div class="service-item text-center pt-3">
            <div class="p-4">
              <i class="fas fa-3x fa-book-open text-primary mb-4"></i>
              <h5 class="mb-3">Remedial Resource Library</h5>
              <p>Easy access to simplified study materials tailored for slow learners.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Service End -->



  
  <!-- About Start -->
  <!-- <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
          <div class="position-relative h-100">
            <img class="img-fluid position-absolute w-100 h-100" src="<?php echo e(asset('img/about.jpg')); ?>" alt="" style="object-fit: cover;" />
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
          <h6 class="section-title bg-white text-start text-primary pe-3"><?php echo e(__('About Us')); ?></h6>
          <h1 class="mb-4">Welcome to <?php echo e(config('app.name')); ?></h1>
          <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
          <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
          <div class="row gy-2 gx-4 mb-4">
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Online Classes</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>International Certificate</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>Online Classes</p>
            </div>
            <div class="col-sm-6">
              <p class="mb-0"><i class="fas fa-arrow-right text-primary me-2"></i>International Certificate</p>
            </div>
          </div>
          <a class="btn btn-primary py-3 px-5 mt-2" href="<?php echo e(route('site.about')); ?>"><?php echo e(__('Read More')); ?></a>
        </div>
      </div>
    </div>
  </div> -->


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



  <!-- Categories Start -->
  <div class="container-xxl py-5 category">
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
                <img class="img-fluid" src="<?php echo e(asset('img/cat-1.jpg')); ?>" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                  <h5 class="m-0">Web Design</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
              <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                <img class="img-fluid" src="<?php echo e(asset('img/cat-2.jpg')); ?>" alt="" />
                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                  <h5 class="m-0">Graphic Design</h5>
                  <small class="text-primary">49 Courses</small>
                </div>
              </a>
            </div>
            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
              <a class="position-relative d-block overflow-hidden" href="javascript:void(0)">
                <img class="img-fluid" src="<?php echo e(asset('img/cat-3.jpg')); ?>" alt="" />
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
            <img class="img-fluid position-absolute w-100 h-100" src="<?php echo e(asset('img/cat-4.jpg')); ?>" alt="" style="object-fit: cover;" />
            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
              <h5 class="m-0">Online Marketing</h5>
              <small class="text-primary">49 Courses</small>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Categories Start -->

  <!-- Courses Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <!-- <h6 class="section-title bg-white text-center text-primary px-3"><?php echo e(__('Courses')); ?></h6>
        <h1 class="mb-5"><?php echo e(__('Popular Courses')); ?></h1> -->
      </div>
      <div class="row g-4 justify-content-center">
        <?php
          $courses = App\Models\Course::where('featured', 1)->paginate(6);
        ?>
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="course-item bg-light">
              <div class="position-relative overflow-hidden">
                <img class="img-fluid" src="<?php echo e(Storage::url($course->details->thumbnail )); ?>" alt="" />
                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                  <a href="<?php echo e(route('course.display', ['slug' => $course->slug])); ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;"><?php echo e(__('Read More')); ?></a>
                  <a href="<?php echo e(route('enrollment', ['slug' => $course->slug, 'course_id' => $course->id])); ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;"><?php echo e(__('Enroll Now')); ?></a>
                </div>
              </div>
              <div class="text-center p-4 pb-0">
                <h3 class="mb-0"><?php echo e($course->regular_price); ?></h3>
                
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
  <!-- Courses End -->

  <!-- Team Start -->
  <!-- <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s"> -->
        <!-- <h6 class="section-title bg-white text-center text-primary px-3"><?php echo e(__('Instructors')); ?></h6> -->
        <!-- <h1 class="mb-5"><?php echo e(__('Founder')); ?></h1>
      </div>
      <div class="row g-4">
        <?php
          $instructors = App\Models\User::where([['role_id', 7],['status', 1]])->get();
        ?>
        <?php $__empty_1 = true; $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
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
                <a href="<?php echo e(route('team.instructor', ['uname' => $instructor->username])); ?>">
                  <h5 class="mb-0"><?php echo e($instructor->firstname . ' ' . $instructor->lastname); ?></h5> -->
                <!-- </a>
                <h5 class="mb-0">Adarsh Karn</h5>
                <small>CEO</small>
              </div>
            </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <?php endif; ?>
      </div>
    </div>
  </div> -->
  <!-- Team End -->

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
              <h5 class="mb-0">Tanya Chatterjee</h5>
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
              <h5 class="mb-0">Abhinav Mani Tripathi</h5>
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
<?php endif; ?><?php /**PATH C:\Users\DELL\Downloads\learnopia-lms-master\learnopia-lms-master\resources\views/front-end/home.blade.php ENDPATH**/ ?>