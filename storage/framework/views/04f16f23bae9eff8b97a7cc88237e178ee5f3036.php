

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
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "a5_laravel";

              $conn = new mysqli($servername, $username, $password, $dbname);

              // check connection
              if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              $sql = "SELECT band_achtergrond_kleur, band_letter_kleur FROM band_info";
              $result = $conn -> query($sql);

              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                  $achtergrond_kleur = $row["band_achtergrond_kleur"];
                  $text_kleur = $row["band_letter_kleur"];
                  if (isset($_GET["Update"])) {
                    $backgroundcolor  = $_GET["backgroundcolor"];
                    $textcolor  = $_GET["textcolor"];
                    $sql = "UPDATE band_info set band_achtergrond_kleur = '$backgroundcolor', band_letter_kleur = '$textcolor'";

                    if ($conn->query($sql) === true) {
                      echo "Inserted Successfully";
                    } else {
                      echo "Error occured in the insert: " . $conn->error;
                    }
                    $conn->close();
                  }
                }
              }
              $user = Auth::user();
              ?>
              <!DOCTYPE html>
              <html>
              <head>
              </head>
              <body>
                <form method="get">
                  <input type="text" name="backgroundcolor" placeholder="backgroundcolor..."><br>
                  <input type="text" name="textcolor" placeholder="textcolor..."><br><br>
                  <input type="submit" value="Update" name="Update"><br><br>
                </form>
                <form action="update" method="get">
                  <input type="text" name="username" value="<?php echo $user->name; ?>"><br>
                  <input type="text" name="useremail" value="<?php echo $user->email; ?>"><br><br>
                  <input type="submit" value="Update" name="update"><br><br>
                </form>
              </body>
              </html>
              <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp1\htdocs\A5\blog\resources\views/editinfo.blade.php ENDPATH**/ ?>