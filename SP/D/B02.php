<?php 
include "../../storage.php";
mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("smhk");

function cek(){
  $tanggal = date('Ymd');
  $cek = mysql_query("SELECT * FROM spub WHERE tanggal = '$tanggal' and nama_tangki='D'") or die (mysql_error());
  $cekin = mysql_fetch_array($cek);
  if ($cekin['six'] == null) {
    echo "<li><a href='B02-INPUT-06.php'>INPUT 06.00</a></li>";
  }elseif ($cekin['twelve'] == null and $cekin['six'] <> null) {
   echo "<li><a href='B02-INPUT-06.php'>INPUT 06.00</a></li>
   <li><a href='B02-INPUT-12.php'>INPUT 12.00</a></li>";
  }elseif ($cekin['eightteen'] == null and $cekin['six'] <> null) {
    echo "<li><a href='B02-INPUT-06.php'>INPUT 06.00</a></li>
   <li><a href='B02-INPUT-12.php'>INPUT 12.00</a></li>
   <li><a href='B02-INPUT-18.php'>INPUT 18.00</a></li>";
  }else{
    echo "<li><a href='B02-INPUT-06.php'>INPUT 06.00</a></li>
   <li><a href='B02-INPUT-12.php'>INPUT 12.00</a></li>
   <li><a href='B02-INPUT-18.php'>INPUT 18.00</a></li>
   <li><a href='B02-INPUT-24.php'>INPUT 24.00</a></li>";
  }
}
 ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Production</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="../../assets/css/styles.css">
    
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../../index.php">Pertamina EP Asset 5</a>
    </div>
    <ul class="nav navbar-nav">
      <?php cek(); ?>
      <li><a href="../SP.php"><< PILIH SP</a></li>
    </ul>
  </div>
</nav>
</body>
</html>