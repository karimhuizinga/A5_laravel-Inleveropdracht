

<?php $__env->startSection('content'); ?>
<div class="col-sm-12">

  <?php if(session()->get('success')): ?>
    <div class="alert alert-success">
      <?php echo e(session()->get('success')); ?>

    </div>
  <?php endif; ?>
  <?php if(Auth::check()): ?>
  <a style="margin: 19px; position:relative; right:4.5%;" href="<?php echo e(route('bands.create')); ?>" class="btn btn-primary">Band toevoegen</a>
  <?php endif; ?>
 </div>
 <div class="row">
 <br></br><?php echo Form::open(['method'=>'GET','url'=>'/bands/','class'=>'navbar-form navbar-left','role'=>'search']); ?></br>
         <div class="input-group custom-search-form">
          <input type="text" class="form-control" name="keyword" placeholder="Zoek...">
           <span class="input-group-btn">
             <button class="btn btn-default-sm" type="submit">
               <i class="fa fa-search"><span class="glyphicon glyphicon-search" />
             </button>
           </span>
         </div>
     <?php echo Form::close(); ?>

   </div>
   <div class="row">
     <div class="col-sm-12">
    <h1 class="display-3">Bands</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>Naam</td>
          <td>Image</td>
          <td>Admins</td>
          <td>Band_leden</td>
          <td>Band_omschrijving</td>
          <td colspan = 2>Acties</td>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $bands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $band): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($band->name); ?></td>
            <td>
            <?php if($band->imgname!=""): ?>
              <img src = "/storage/cover_images/<?php echo e($band->imgname); ?>" height="50px">
            <?php endif; ?>
            </td>
            <td>
              <?php $__currentLoopData = $band->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo e($admin->name); ?><br>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </td>
            <td><?php echo e($band->band_leden); ?></td>
            <td><?php echo e($band->band_omschrijving); ?></td>
            <td>
                <a style="width: 100%" href="<?php echo e(route('bands.show',$band->id)); ?>" class="btn btn-primary">Bekijken</a><br><br>
                <?php if($band->isAdmin()): ?>
                <a style="width: 100%" href="<?php echo e(route('bands.edit',$band->id)); ?>" class="btn btn-primary">Aanpassen</a>
                <?php endif; ?>
            </td>
            <td>
                <form action="<?php echo e(route('bands.destroy', $band->id)); ?>" method="post">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('DELETE'); ?>
                  <?php if($band->isAdmin()): ?>
                  <button class="btn btn-danger" type="submit">Verwijderen</button>
                      <?php endif; ?>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\A5\blog\resources\views/bands/index.blade.php ENDPATH**/ ?>