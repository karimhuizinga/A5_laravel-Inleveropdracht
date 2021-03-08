@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('guest') }}</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
            <form action="" method="GET">
            <input type="text" name="search" placeholder="bandnaam..." value="">
            <input type="submit" name="Submit"><br>
          </form>
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

          $sql = "SELECT band_link, band_naam FROM band";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            }
          }

          $sql = "SELECT * FROM band";
          if (isset($_GET["search"])) {
              $Qsearch =  $_GET["search"];
                $sql = "SELECT * FROM band where band_naam = '$Qsearch'";
          }
              $result = $conn->query($sql);
          while($row = $result->fetch_assoc()) {
          echo "<a href='".$row["band_link"]."'>".$row["band_naam"]."</a><br>";
        }
        echo "Find your favorite band!" . "<br><br>";
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
