  <?php 
  include 'storage.php';
$con = mysqli_connect("localhost", "root", "", "smhk");

  //
    $coba = mysqli_query($con, "SELECT spub.tanggal as waktu, (sum(spub.twentyfour-spub.zero))+ppp.twentyfour as expected, ppp.twentyfour as nyata FROM spub, ppp WHERE ppp.tanggal=spub.tanggal group by spub.tanggal") or die (mysqli_error());
   ?>

     <html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Production</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Estimated', 'Real'],
          //pake perulangan
          <?php while ($datas = mysqli_fetch_array($coba, MYSQLI_BOTH)) {
            if ($datas['nyata'] == null) {
              $datas['nyata'] =0;
            }
            if ($datas['expected'] == null) {
              $datas['expected'] = 0;
            }
              echo "['".$datas["waktu"]."', ".$datas["expected"].", ".$datas["nyata"]."],";
          } ?>
        ]);

        var options = {
          hAxis: {
          title: 'TIME'
        },
        vAxis: {
          title: 'STOCK'
        },
          legend: { position: 'bottom' },
        crosshair: {
          color: '#000',
          trigger: 'selection'
        },
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
       <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Pertamina EP Asset 5</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="">Grafik Inventory 7055</a></li>
      <li><a href="index.php"><< Home</a></li>
    </ul> 
  </div>
</nav>
<br>
<br>
<div class="container">
    <hr>
      <h3 style="text-align: center">Grafik Inventory 7055</h3>
    <hr>
    <div class="container">
      <div id="curve_chart" style="height: 500px;"></div>
    </div>
</div>
<br>
  <footer>
        <h2 class="text-nowrap text-uppercase text-center">PT PERTAMINA EP ASSET 5. <?php echo date('Y') ?></h2>
        <!--  Alvian "NOGOTSKIL" Wahyudhi -->
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
