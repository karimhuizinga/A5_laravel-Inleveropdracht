

  <?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-sm-12">
      <h1 class="display-3">Contacten</h1>

      <table class="table table-striped">
        <thead>
          <tr>
            <td>ID</td>
            <td>Naam</td>
            <td>Bedrijf</td>
            <td>Email</td>
            <!-- hier stond meer -->
            <td colspan = 2>Actions</td>
          </tr>
        </thead>
        <tbody>
          <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($contact->id); ?></td>
            <td><?php echo e($contact->first_name); ?> <?php echo e($contact->last_name); ?></td>
            <td><?php echo e($contact->company->name); ?></td>
            <td><?php echo e($contact->email); ?></td>
            <!-- hier stond meer -->
            <td>
              <a href="<?php echo e(route('contacts.edit',$contact->id)); ?>"
                class="btn btn-primary">Aanpassen</a>
              </td>
              <td>
                <form action="<?php echo e(route('contacts.destroy', $contact->id)); ?>"
                  method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <button class="btn btn-danger" type="submit">Verwijderen</button>
                </form>
              </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>
        <div>
        </div>
        <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\A5\blog\resources\views/contacts/index.blade.php ENDPATH**/ ?>