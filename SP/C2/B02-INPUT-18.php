<?php 
$tanggal = date('Ymd');
$sekarang = date('d-m-Y');

$con = mysqli_connect("localhost", "root", "", "smhk");
$tampil = mysqli_query($con ,"SELECT * FROM spub WHERE tanggal = $tanggal and nama_tangki = 'C-2'") or die (mysqli_error());
$data = mysqli_fetch_array($tampil, MYSQLI_BOTH);

 ?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Production C 2</title>
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
      <li><a href="">INPUT C 2 pada 18.00</a></li>
      <li><a href="B02.php"><< PILIH WAKTU</a></li>
    </ul> 
  </div>
</nav>
<div class="container">
  <h3 align="center">INPUT STOCK 18.00 PADA <?php echo $sekarang ?></h3>
  <hr>
  <h3 align="center">STOCK PADA 12.00 : <?php echo $data['twelve'] ?></h3>
  <h3></h3>
  <hr>
  <div class="container">
 <form class="form-inline" action="prosesb0218.php" method="post" style="text-align: center">
  <div class="form-group">
    <label for="b0218">Input Produksi</label>
    <input type="number" class="form-control" id="b0218" name="b0218" step="0.0001" required>
  </div>
  <button type="submit" class="btn btn-default" onclick="
  var hasil = document.getElementById('b0218').value;
  return confirm('Stock SP C-2 @18.00 : '+hasil);">Submit</button>
</form>   
  </div>
  <hr> 
</div>
 
<footer>
        <h2 class="text-nowrap text-uppercase text-center">PPT PERTAMINA EP ASSET 5. <?php echo date('Y') ?></h2>
        <!--  Alvian "NOGOTSKIL" Wahyudhi -->
    </footer>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>