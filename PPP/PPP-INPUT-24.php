<?php 
$tanggal = date('Ymd');
$sekarang = date('d-m-Y');

$con = mysqli_connect("localhost", "root", "", "smhk");
$tampil = mysqli_query($con, "SELECT * FROM ppp WHERE tanggal = $tanggal") or die (mysqli_error());
$data = mysqli_fetch_array($tampil, MYSQLI_BOTH);

 ?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Production</title>
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
      <li><a href="">INPUT PPP pada 24.00</a></li>
      <li><a href="ppp.php"><< PILIH WAKTU</a></li>
    </ul> 
  </div>
</nav>
<div class="container">
   <h3 align="center">INPUT PPP 24.00 PADA <?php echo $sekarang; ?></h3>
  <hr>
    <h3 align="center"> PPP 18.00: <?php echo $data['eightteen'] ?> </h3>
  <hr>
  <div class="container">
  <form class="form-inline" action="pppp24.php" method="post">
  <div class="form-group">
    <label for="b026">Input Produksi</label>
    <input type="number" class="form-control" id="b026" name="b026" step="0.0001" required>
  </div>
  <button type="submit" class="btn btn-default" onclick="
  var hasil = document.getElementById('b026').value;
  return confirm('Penerimaan PPP @24.00 : '+hasil);">Submit</button>
</form>    
  </div>
  <hr>
</div> 
<footer>
        <h2 class="text-nowrap text-uppercase text-center">PT PERTAMINA EP ASSET 5. <?php echo date('Y') ?></h2>
        <!--  Alvian "NOGOTSKIL" Wahyudhi -->
    </footer>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>