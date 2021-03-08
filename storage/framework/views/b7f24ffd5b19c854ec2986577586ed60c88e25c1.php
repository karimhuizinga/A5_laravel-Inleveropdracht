

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><?php echo e(__('Change Password')); ?></div>
          <div class="card-body">
            <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
            <?php echo Form::model($user, ['method'=>'POST','route'=>['updatepassword', $user->$id]]); ?>

            <div class="row">
              <div class="col-lg-3"><?php echo Form::label('old_password', 'oud wachtwoord:'); ?></div>
              <div class="col-lg-3"><?php echo Form::password('old_password', ['class'=>'form-control']); ?></div>
            </div>
            <div class="row">
              <div class="col-lg-3"><?php echo Form::label('new_password', 'nieuw wachtwoord:'); ?></div>
              <div class="col-lg-3"><?php echo Form::password('new_password', ['class'=>'form-control']); ?></div>
            </div>
            <div class="row">
              <div class="col-lg-3"><?php echo Form::label('controle_password', 'controle nieuw wachtwoord:'); ?></div>
              <div class="col-lg-3"><?php echo Form::password('controle_password', ['class'=>'form-control']); ?></div>
            </div>
            <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-3"><button type="submit" name="button">save</button></div>
            </div>
            <?php echo Form::close(); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\A5\blog\resources\views/password.blade.php ENDPATH**/ ?>