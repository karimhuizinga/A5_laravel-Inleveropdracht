

<?php $__env->startSection('content'); ?>
<div class="row">
  <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Contact toevoegen</h1>
  </div>
  <div>
    <?php if($errors->any()): ?>
      <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </div><br />
    <?php endif; ?>
      <form method="post" action="<?php echo e(route('contacts.store')); ?>">
          <?php echo csrf_field(); ?>
          <div class="form-group">
              <label for="first_name">Voornaam:</label>
              <input type="text" class="form-control" name="first_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Achternaam:</label>
              <input type="text" class="form-control" name="last_name"/>
          </div>

          <div class="form-group">
              <label for="company">Bedrijf</label>
              <?php echo Form::select('company_id', $companies, null, ['placeholder' => 'Kies een bedrijf...','class' => 'form-control']); ?>

          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="city">Woonplaats:</label>
              <input type="text" class="form-control" name="city"/>
          </div>
          <div class="form-group">
              <label for="country">Land:</label>
              <input type="text" class="form-control" name="country"/>
          </div>
          <div class="form-group">
              <label for="job_title">Functie:</label>
              <input type="text" class="form-control" name="job_title"/>
          </div>
          <button type="submit" class="btn btn-primary">Toevoegen</button>
      </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\A5\blog\resources\views/contacts/create.blade.php ENDPATH**/ ?>