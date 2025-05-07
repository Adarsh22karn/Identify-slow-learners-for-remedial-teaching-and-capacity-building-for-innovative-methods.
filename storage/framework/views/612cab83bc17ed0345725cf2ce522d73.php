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
    <?php echo e(__('Disclaimer')); ?>

   <?php $__env->endSlot(); ?>

   <?php $__env->slot('hero', null, []); ?> 
    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">
            <h1 class="display-3 text-white animated slideInDown"><?php echo e(__('Disclaimer')); ?></h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo e(route('site.home')); ?>"><?php echo e(__('Home')); ?></a></li>
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo e(route('site.sitemap')); ?>"><?php echo e(__('Pages')); ?></a></li>
                <li class="breadcrumb-item text-white active" aria-current="page"><?php echo e(__('Disclaimer')); ?></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- Header End -->
   <?php $__env->endSlot(); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal09258b082cb7feea5c3a304d0211a36c)): ?>
<?php $component = $__componentOriginal09258b082cb7feea5c3a304d0211a36c; ?>
<?php unset($__componentOriginal09258b082cb7feea5c3a304d0211a36c); ?>
<?php endif; ?><?php /**PATH C:\Users\DELL\Downloads\learnopia-lms-master\learnopia-lms-master\resources\views/front-end/disclaimer.blade.php ENDPATH**/ ?>