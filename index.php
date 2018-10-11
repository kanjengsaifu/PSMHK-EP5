<?php 
include "storage.php";
session_start();
define("INDEX",true);
 ?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Production</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Pertamina EP Asset 5</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">SPU B
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="B02/B02.php">INPUT B 02</a></li>
          <li><a href="B03/B03.php">INPUT B 03</a></li>
          <li><a href="B04/B04.php">INPUT B 04</a></li>
          <li><a href="SP/SP.php">INPUT SP SPU B</a></li>
        </ul>
      </li>
      <li><a href="PPP/ppp.php">PPP</a></li>
      <li><a href="tb02.php">TABEL</a></li>
      <li><a href="grafik.php">GRAFIK</a></li>
    </ul>
  </div>
</nav>
  <div class="hero-image" style="
  background-image:url('assets/img/pep5.jpg');
  ">
    <div class="hero-text">
    <h1>Pertamina EP Asset 5</h1>
    <h1>Monitoring Stock Production Sangasanga</h1>
  </div>
    </div>
    
    <footer>
        <h2 class="text-nowrap text-uppercase text-center">PT PERTAMINA EP ASSET 5. <?php echo date('Y') ?></h2>
        <!--  Alvian "NOGOTSKIL" Wahyudhi -->
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>