<script>
  <?php if(session('created')): ?>
    Swal.fire({
      title: 'Created',
      text: '<?php echo e(session('created')); ?>',
      icon: 'success',
      confirmButtonText: 'OK'
    });
  <?php endif; ?>
  <?php if(session('success')): ?>
    Swal.fire({
      title: 'Purchased',
      text: '<?php echo e(session('success')); ?>',
      icon: 'success',
      confirmButtonText: 'OK'
    });
  <?php endif; ?>
  <?php if(session('updated')): ?>
    Swal.fire({
      title: 'Updated',
      text: '<?php echo e(session('updated')); ?>',
      icon: 'success',
      confirmButtonText: 'OK'
    });
  <?php endif; ?>
  <?php if(session('deleted')): ?>
    Swal.fire({
      title: 'Deleted',
      text: '<?php echo e(session('deleted')); ?>',
      icon: 'success',
      confirmButtonText: 'OK'
    });
  <?php endif; ?>
  <?php if(session('warning')): ?>
    Swal.fire({
      title: 'Duplicate',
      text: '<?php echo e(session('warning')); ?>',
      icon: 'error',
      confirmButtonText: 'OK'
    });
  <?php endif; ?>
  <?php if(session('error')): ?>
    Swal.fire({
      title: 'Error',
      text: '<?php echo e(session('error')); ?>',
      icon: 'error',
      confirmButtonText: 'OK'
    });
  <?php endif; ?>
</script><?php /**PATH C:\Users\DELL\Downloads\learnopia-lms-master\learnopia-lms-master\resources\views/partials/admin/flash.blade.php ENDPATH**/ ?>