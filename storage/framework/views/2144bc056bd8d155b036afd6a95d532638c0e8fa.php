

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

          <div class="card-body">
            <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
            <?php

            ?>
            <form action="edit" method="get">
              <input type="text" name="achtergrondkleur" value="<?php ?>"><br>
              <input type="text" name="letterkleur" value="<?php ?>"><br><br>
              <input type="submit" value="Update" name="update">
              <p>go back to <a href="http://127.0.0.1:8000/home">home page</a><br></p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\A5\blog\resources\views/editcolor.blade.php ENDPATH**/ ?>