<?php $__env->startSection('content'); ?>
<div class="col-sm-12">
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/css/show.css')); ?>" />
    <div class="title">
      <t><?php echo e($band->name); ?></t>
    </div>
  </head>
  <body class="show">
    </br>
      <div class="row">
        <center><img src = "/storage/cover_images/<?php echo e($band->imgname); ?>" height="100%" width="100%"></center>
      </div>
      <div class="column">
        <p><?php echo e($band->band_omschrijving); ?> <br><br>
            Band Leden: <?php echo e($band->band_leden); ?>

          </p>
      </div>
      <?php
      $PartYtCodeLink1 = substr("{$band->youtube_video1}",-11);
      $FullYtCodeLink1 = "https://www.youtube.com/embed/$PartYtCodeLink1";

      $PartYtCodeLink2 = substr("{$band->youtube_video2}",-11);
      $FullYtCodeLink2 = "https://www.youtube.com/embed/$PartYtCodeLink2";

      $PartYtCodeLink3 = substr("{$band->youtube_video3}",-11);
      $FullYtCodeLink3 = "https://www.youtube.com/embed/$PartYtCodeLink3";
       ?>
      <div class="iframe">
        <iframe width="100%" height="35%" src="<?php echo e($FullYtCodeLink1); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="iframe">
        <iframe width="100%" height="35%" src="<?php echo e($FullYtCodeLink2); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="iframe">
        <iframe width="100%" height="35%" src="<?php echo e($FullYtCodeLink3); ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
  </body>

</html>
<?php $__env->stopSection(); ?>
<style>
  body{
    color: <?php echo e($band->band_letter_kleur); ?>!important;
    background-color: <?php echo e($band->band_achtergrond_kleur); ?>!important;
  }
  </style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\A5\blog\resources\views/bands/show.blade.php ENDPATH**/ ?>