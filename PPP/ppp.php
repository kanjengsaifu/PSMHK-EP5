<?php 
include "../storage.php";
$con = mysqli_connect("localhost", "root", "", "smhk");

function cek(){
  $con = mysqli_connect("localhost", "root", "", "smhk");
  $tanggal = date('Ymd');
  $cek = mysqli_query($con, "SELECT * FROM ppp WHERE tanggal = '$tanggal'") or die (mysqli_error());
  $cekin = mysqli_fetch_array($cek, MYSQLI_BOTH);
  if ($cekin['twelve'] == null) {
    echo "<li><a href='PPP-INPUT-12.php'>INPUT 12.00</a></li>";
  }elseif ($cekin['eightteen'] == null and $cekin['six'] <> null) {
    echo "
   <li><a href='PPP-INPUT-12.php'>INPUT 12.00</a></li>
   <li><a href='PPP-INPUT-18.php'>INPUT 18.00</a></li>";
  }else{
    echo "
   <li><a href='PPP-INPUT-12.php'>INPUT 12.00</a></li>
   <li><a href='PPP-INPUT-18.php'>INPUT 18.00</a></li>
   <li><a href='PPP-INPUT-24.php'>INPUT 24.00</a></li>";
  }
}
 ?>


<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Production PPP</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../assets/css/styles.css">
    
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../index.php">Pertamina EP Asset 5</a>
    </div>
    <ul class="nav navbar-nav">
      <?php cek(); ?>
      <li><a href="../index.php"><< HOME</a></li>
    </ul>
  </div>
</nav>
<div class="hero-image" style="
  background-image:url('../assets/img/pep5.jpg');
  ">
    <div class="hero-text">
    <h1>Pertamina EP Asset 5</h1>
    <h1>Penerimaan PPP</h1>
  </div>
    </div>
</body>
</html>