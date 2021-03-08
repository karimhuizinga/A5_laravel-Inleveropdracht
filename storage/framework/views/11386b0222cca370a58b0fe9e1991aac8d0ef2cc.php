

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><?php echo e(__('Gasten Pagina')); ?></div>
          <div class="card-body">
            <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('status')); ?>

            </div>
            <?php endif; ?>
            <p style="font-weight: bold;">Vind jou favoriete band!</p>
            <div class="row">
              <?php echo Form::open(['method'=>'GET','url'=>'/bands/','class'=>'navbar-form navbar-left','role'=>'search']); ?>

                    <div class="input-group custom-search-form">
                     <input style="margin: 20px; right:4.5%;" type="text" class="form-control" name="keyword" placeholder="Zoek...">
                    </div>
                <?php echo Form::close(); ?>

              </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\A5\blog\resources\views/guest.blade.php ENDPATH**/ ?>