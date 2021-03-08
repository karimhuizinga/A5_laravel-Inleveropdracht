

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
                      $user = Auth::user();
                    ?>
                    <!DOCTYPE html>
                    <html lang="en" dir="ltr">
                      <head>
                        <meta charset="utf-8">
                      </head>
                      <body style="
                      background-color:
                      <?php if(isset($_GET["update"])) {
                        echo $_GET["backgroundcolor"];
                      }
                      ?>;
                      color:
                      <?php if(isset($_GET["update"])) {
                        echo $_GET["textcolor"];
                      }
                        ?>;
                      ">
                      <form>
                        <input type="text" name="backgroundcolor" placeholder="backgroundcolor..."><br>
                        <input type="text" name="textcolor" placeholder="textcolor..."><br><br>
                        <input type="submit" value="Update" name="update"><br><br>
                        <p>go back to <a href="http://127.0.0.1:8000/home">home page</a><br></p>
                      </form>
                      </body>
                    </html>
                    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\A5\blog\resources\views/editband.blade.php ENDPATH**/ ?>