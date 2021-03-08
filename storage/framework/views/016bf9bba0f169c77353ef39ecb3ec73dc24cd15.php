

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header"><?php echo e(__('bands')); ?></div>

          <div class="card-body">
            <?php if(session('status')): ?>
            <div class="alert alert-success" role="alert">
              <?php echo e(session('status')); ?>

            </div>
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div><br />
          <?php endif; ?>
          <form method="post" action="<?php echo e(route('bands.store')); ?>" enctype='multipart/form-data'>
            <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="name">Naam:</label>
                  <input type="text" class="form-control" name="name"/>
                </div>

                <div class="form-group">
                  <label for="imgname">Image:</label>
                  <input type="file" class="form-control" name="imgname"/>
                </div>

                <div class="form-group">
                  <label for="admins">Admins:</label>
                  <input type="text" class="form-control" name="admins"/>
                </div>


                <div class="form-group">
                  <label for="band_leden">Band_leden:</label>
                  <input type="text" class="form-control" name="band_leden"/>
                </div>

                <div class="form-group">
                  <label for="band_omschrijving">Band_omschrijving:</label>
                  <input type="text" class="form-control" name="band_omschrijving"/>
                </div>

                <div class="form-group">
                  <label for="band_achtergrond_kleur">Band_achtergrond_kleur:</label>
                  <input type="text" class="form-control" name="band_achtergrond_kleur"/>
                </div>

                <div class="form-group">
                  <label for="band_letter_kleur">Band_letter_kleur:</label>
                  <input type="text" class="form-control" name="band_letter_kleur"/>
                </div>

                <div class="form-group">
                  <label for="youtube_video1">Youtube_video1:</label>
                  <input type="text" class="form-control" name="youtube_video1"/>
                </div>

                <div class="form-group">
                  <label for="youtube_video2">Youtube_video2:</label>
                  <input type="text" class="form-control" name="youtube_video2"/>
                </div>

                <div class="form-group">
                  <label for="youtube_video3">Youtube_video3:</label>
                  <input type="text" class="form-control" name="youtube_video3"/>
                </div>

                <button type="submit" class="btn btn-primary">Toevoegen</button>
              </form>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\A5\blog\resources\views/bands/create.blade.php ENDPATH**/ ?>