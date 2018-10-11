  <?php 
  include 'storage.php';
  mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
  mysql_select_db("smhk");

  //b02
  $tampil = mysql_query("SELECT * FROM spub WHERE nama_tangki = 'B-02'") or die (mysql_error());
  $data = mysql_fetch_array($tampil);
  
  //b03
  $tampil2 = mysql_query("SELECT * FROM spub WHERE nama_tangki = 'B-03'") or die (mysql_error());
  $data2 = mysql_fetch_array($tampil2);
  
  //b04
  $tampil3 = mysql_query("SELECT * FROM spub WHERE nama_tangki = 'B-04'") or die (mysql_error());
  $data3 = mysql_fetch_array($tampil3);

  //sp
    //a1
    $tampil4 = mysql_query("SELECT * FROM spub WHERE nama_tangki = 'A-1'") or die (mysql_error());
    $data4 = mysql_fetch_array($tampil4); 

    //b1
    $tampil5 = mysql_query("SELECT * FROM spub WHERE nama_tangki = 'B-1'") or die (mysql_error());
    $data5 = mysql_fetch_array($tampil5);
    //c2
    $tampil6 = mysql_query("SELECT * FROM spub WHERE nama_tangki = 'C-2'") or die (mysql_error());
    $data6 = mysql_fetch_array($tampil6);
    //d
    $tampil7 = mysql_query("SELECT * FROM spub WHERE nama_tangki = 'D'") or die (mysql_error());
    $data7 = mysql_fetch_array($tampil7);
    //m1
    $tampil8 = mysql_query("SELECT * FROM spub WHERE nama_tangki = 'M-1'") or die (mysql_error());
    $data8 = mysql_fetch_array($tampil8);
    //TOS SUM
    $tampil9 = mysql_query("SELECT * FROM spub WHERE nama_tangki = 'TOS-SUM'") or die (mysql_error());
    $data9 = mysql_fetch_array($tampil9);

  //
    $coba = mysql_query("SELECT spub.tanggal as waktu, (sum(spub.twentyfour-spub.zero))+ppp.twentyfour as expected, ppp.twentyfour as nyata FROM spub, ppp WHERE ppp.tanggal=spub.tanggal group by spub.tanggal") or die (mysql_error());

  //ppp
    $tampil = mysql_query("SELECT * FROM ppp") or die (mysql_error());
    $data10 = mysql_fetch_array($tampil);
  
  //rumus
    $real = ($data['twentyfour']-$data['twentyfour'])
          +($data['twentyfour']-$data['zero'])
          +($data2['twentyfour']-$data2['zero'])
          +($data3['twentyfour']-$data3['zero'])
          +($data4['twentyfour']-$data4['zero'])
          +($data5['twentyfour']-$data5['zero'])
          +($data6['twentyfour']-$data6['zero'])
          +($data7['twentyfour']-$data7['zero'])
          +($data8['twentyfour']-$data8['zero'])
          +($data9['twentyfour']-$data9['zero']);
    
    $p3 = $data10['twentyfour'];
    $estimated=$p3+$real;

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
          <?php while ($datas = mysql_fetch_array($coba)) {
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
    </body>
</html>
