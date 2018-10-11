<?php 
    include 'storage.php';
	date_default_timezone_set("Asia/Bangkok");
    $tanggal = date('d-m-y');
    $tanggalan = date('mm/dd/yyyy');
    $sekarang = date('Ymd'); 
    $data=0;
    $data3=0;
    $data4=0;
    $data5=0;
    $data6=0;
    $data7=0;
    $data8=0;
    $data9=0;
    $data10=0;
    $datas=0;

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
      <li><a href="">TABEL PRODUKSI B 02 PADA <?php echo $tanggal ?></a></li>
      <li><a href="index.php"><< Home</a></li>
    </ul> 
  </div>
</nav>
<h1 class="text-center"> TABEL INVENTORY 7055 : <?php echo $tanggal;?> </h1>
    <hr>
            <form class="form-inline" action="when.php" method="post" style="text-align: center">  
                    <div class="form-group"> 
                        <label for="date"> Tanggal Produksi </label>
                        <input type="date" class="form-control" id="b026" name="b026" value="<?php 
                        echo $tanggalan ?>"arequired>

                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> search</button>
            </form>
    <hr>
    <div class="container">
        <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th colspan="2">Location</th>
                        <th>@00.00</th>
                        <th>@06.00</th>
                        <th>Perubahan Stock @06.00</th>
                        <th>@12.00</th>
                        <th>Perubahan Stock @12.00</th>
                        <th>@18.00</th>
                        <th>Perubahan Stock @18.00</th>
                        <th>@24.00</th>
                        <th>Perubahan Stock @24.00</th>
                    </tr>
                </thead>
                <!-- B02 -->
                <tbody>
                   <td rowspan="4" align="center">SPU B</td>
                        <?php
                        $sql = "SELECT * FROM spub where tanggal = '$sekarang' and nama_tangki= 'B-02'";
                        $no  = 1;
                        foreach ($dbh->query($sql) as $data) :
                        ?>
                    <tr>
                        
                        <td>B 02</td>
                        <td><?php echo $data['zero'] ?></td>

                        <td><?php echo $data['six'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data['six']==0 or $data['six']==null) {
                                echo 0;
                            }else{
                                echo $data['six'] - $data['zero'];  
                            }
                            ?>
                        </td>
                        <td><?php echo $data['twelve'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data['twelve']==0 or $data['twelve']==null) {
                                echo 0;
                            }else{
                            echo $data['twelve'] - $data['zero'] ;
                                }?>
                            </td>
                        <td><?php echo $data['eightteen'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data['eightteen']==0 or $data['eightteen']==null) {
                                echo 0;
                            }else{
                            echo $data['eightteen'] - $data['zero'] ;
                            }?>
                            </td>
                        <td><?php echo $data['twentyfour'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data['twentyfour']==0 or $data['twentyfour']==null) {
                                echo 0;
                            }else{
                            echo $data['twentyfour'] - $data['zero']; 
                            }?>
                            </td>
                    </tr>
                <?php
                endforeach;
                ?>

                <!-- B03 -->
                <tr>
                    <?php
                        $sql3 = "SELECT * FROM spub where tanggal = '$sekarang' and nama_tangki='B-03'";
                        $no  = 1;
                        foreach ($dbh->query($sql3) as $data3) :
                        ?>
                    <td>B 03</td>  
                    <td><?php echo $data3['zero'] ?>    
                    </td>

                        <td><?php echo $data3['six'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data3['six']==0 or $data3['six']==null) {
                                echo 0;
                            }else{
                                echo $data3['six'] - $data3['zero'];  
                            }
                            ?>
                        </td>
                        <td><?php echo $data3['twelve'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data3['twelve']==0 or $data3['twelve']==null) {
                                echo 0;
                            }else{
                            echo $data3['twelve'] - $data3['zero'] ;
                                }?>
                            </td>
                        <td><?php echo $data3['eightteen'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data3['eightteen']==0 or $data3['eightteen']==null) {
                                echo 0;
                            }else{
                            echo $data3['eightteen'] - $data3['zero'] ;
                            }?>
                            </td>
                        <td><?php echo $data3['twentyfour'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data3['twentyfour']==0 or $data3['twentyfour']==null) {
                                echo 0;
                            }else{
                            echo $data3['twentyfour'] - $data3['zero']; 
                            }?>
                            </td>
                    </tr>
                <?php
                endforeach;
                ?>                
                <!-- B04 -->
                <tr>
                    <?php
                        $sql4 = "SELECT * FROM spub where tanggal = '$sekarang' and nama_tangki='B-04'";
                        $no  = 1;
                        foreach ($dbh->query($sql4) as $data4) :
                        ?>
                    <td>B 04</td>  
                    <td><?php echo $data4['zero'] ?>
                        
                    </td>

                        <td><?php echo $data4['six'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data4['six']==0 or $data4['six']==null) {
                                echo 0;
                            }else{
                                echo $data4['six'] - $data4['zero'];  
                            }
                            ?>
                        </td>
                        <td><?php echo $data4['twelve'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data4['twelve']==0 or $data4['twelve']==null) {
                                echo 0;
                            }else{
                            echo $data4['twelve'] - $data4['zero'] ;
                                }?>
                            </td>
                        <td><?php echo $data4['eightteen'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data4['eightteen']==0 or $data4['eightteen']==null) {
                                echo 0;
                            }else{
                            echo $data4['eightteen'] - $data4['zero'] ;
                            }?>
                            </td>
                        <td><?php echo $data4['twentyfour'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data4['twentyfour']==0 or $data4['twentyfour']==null) {
                                echo 0;
                            }else{
                            echo $data4['twentyfour'] - $data4['zero']; 
                            }?>
                            </td>
                    </tr>
                <?php
                endforeach;
                ?>
                <!-- SP -->
                <tr>
                    <td rowspan="6"> SP SPU B</td>
                    <td>TOS UMM</td>
                    <?php
                        $sql5 = "SELECT * FROM spub where tanggal = '$sekarang' and nama_tangki='TOS-UMM'";
                        $no  = 1;
                        foreach ($dbh->query($sql5) as $data5) :
                    ?>
                    <td><?php echo $data5['zero'] ?>    
                    </td>

                        <td><?php echo $data5['six'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data5['six']==0 or $data5['six']==null) {
                                echo 0;
                            }else{
                                echo $data5['six'] - $data5['zero'];  
                            }
                            ?>
                        </td>
                        <td><?php echo $data5['twelve'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data5['twelve']==0 or $data5['twelve']==null) {
                                echo 0;
                            }else{
                            echo $data5['twelve'] - $data5['zero'] ;
                                }?>
                            </td>
                        <td><?php echo $data5['eightteen'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data5['eightteen']==0 or $data5['eightteen']==null) {
                                echo 0;
                            }else{
                            echo $data5['eightteen'] - $data5['zero'] ;
                            }?>
                            </td>
                        <td><?php echo $data5['twentyfour'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data5['twentyfour']==0 or $data5['twentyfour']==null) {
                                echo 0;
                            }else{
                            echo $data5['twentyfour'] - $data5['zero']; 
                            }?>
                            </td>
                    
                <?php
                endforeach;
                ?>
                <tr>
                    <td>M-1</td>
                     <?php
                        $sql6 = "SELECT * FROM spub where tanggal = '$sekarang' and nama_tangki='M-1'";
                        $no  = 1;
                        foreach ($dbh->query($sql6) as $data6) :
                    ?>
                    <td><?php echo $data6['zero'] ?>    
                    </td>

                        <td><?php echo $data6['six'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data6['six']==0 or $data6['six']==null) {
                                echo 0;
                            }else{
                                echo $data6['six'] - $data6['zero'];  
                            }
                            ?>
                        </td>
                        <td><?php echo $data6['twelve'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data6['twelve']==0 or $data6['twelve']==null) {
                                echo 0;
                            }else{
                            echo $data6['twelve'] - $data6['zero'] ;
                                }?>
                            </td>
                        <td><?php echo $data6['eightteen'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data6['eightteen']==0 or $data6['eightteen']==null) {
                                echo 0;
                            }else{
                            echo $data6['eightteen'] - $data6['zero'] ;
                            }?>
                            </td>
                        <td><?php echo $data6['twentyfour'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data6['twentyfour']==0 or $data6['twentyfour']==null) {
                                echo 0;
                            }else{
                            echo $data6['twentyfour'] - $data6['zero']; 
                            }?>
                            </td>
                    </tr>
                <?php
                endforeach;
                ?>
                </tr>
                <tr>
                    <td>B-1</td>
                     <?php
                        $sql7 = "SELECT * FROM spub where tanggal = '$sekarang' and nama_tangki='B-1'";
                        $no  = 1;
                        foreach ($dbh->query($sql7) as $data7) :
                    ?>
                    <td><?php echo $data7['zero'] ?>    
                    </td>

                        <td><?php echo $data7['six'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data7['six']==0 or $data7['six']==null) {
                                echo 0;
                            }else{
                                echo $data7['six'] - $data7['zero'];  
                            }
                            ?>
                        </td>
                        <td><?php echo $data7['twelve'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data7['twelve']==0 or $data7['twelve']==null) {
                                echo 0;
                            }else{
                            echo $data7['twelve'] - $data7['zero'] ;
                                }?>
                            </td>
                        <td><?php echo $data7['eightteen'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data7['eightteen']==0 or $data7['eightteen']==null) {
                                echo 0;
                            }else{
                            echo $data7['eightteen'] - $data7['zero'] ;
                            }?>
                            </td>
                        <td><?php echo $data7['twentyfour'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data7['twentyfour']==0 or $data7['twentyfour']==null) {
                                echo 0;
                            }else{
                            echo $data7['twentyfour'] - $data7['zero']; 
                            }?>
                            </td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr>
                    <td>C-2</td>
                     <?php
                        $sql8 = "SELECT * FROM spub where tanggal = '$sekarang' and nama_tangki='C-2'";
                        $no  = 1;
                        foreach ($dbh->query($sql8) as $data8) :
                    ?>
                    <td><?php echo $data8['zero'] ?>    
                    </td>

                        <td><?php echo $data8['six'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data8['six']==0 or $data8['six']==null) {
                                echo 0;
                            }else{
                                echo $data8['six'] - $data8['zero'];  
                            }
                            ?>
                        </td>
                        <td><?php echo $data8['twelve'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data8['twelve']==0 or $data8['twelve']==null) {
                                echo 0;
                            }else{
                            echo $data8['twelve'] - $data8['zero'] ;
                                }?>
                            </td>
                        <td><?php echo $data8['eightteen'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data8['eightteen']==0 or $data8['eightteen']==null) {
                                echo 0;
                            }else{
                            echo $data8['eightteen'] - $data8['zero'] ;
                            }?>
                            </td>
                        <td><?php echo $data8['twentyfour'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data8['twentyfour']==0 or $data8['twentyfour']==null) {
                                echo 0;
                            }else{
                            echo $data8['twentyfour'] - $data8['zero']; 
                            }?>
                            </td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr>
                    <td>A-1</td>
                     <?php
                        $sql9 = "SELECT * FROM spub where tanggal = '$sekarang' and nama_tangki='A-1'";
                        $no  = 1;
                        foreach ($dbh->query($sql9) as $data9) :
                    ?>
                    <td><?php echo $data9['zero'] ?>    
                    </td>

                        <td><?php echo $data9['six'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data9['six']==0 or $data9['six']==null) {
                                echo 0;
                            }else{
                                echo $data9['six'] - $data9['zero'];  
                            }
                            ?>
                        </td>
                        <td><?php echo $data9['twelve'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data9['twelve']==0 or $data9['twelve']==null) {
                                echo 0;
                            }else{
                            echo $data9['twelve'] - $data9['zero'] ;
                                }?>
                            </td>
                        <td><?php echo $data9['eightteen'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data9['eightteen']==0 or $data9['eightteen']==null) {
                                echo 0;
                            }else{
                            echo $data9['eightteen'] - $data9['zero'] ;
                            }?>
                            </td>
                        <td><?php echo $data9['twentyfour'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data9['twentyfour']==0 or $data9['twentyfour']==null) {
                                echo 0;
                            }else{
                            echo $data9['twentyfour'] - $data9['zero']; 
                            }?>
                            </td>
                    </tr>
                <?php
                endforeach;
                ?>
                <tr>
                    <td>D</td>
                 <?php
                        $sql10 = "SELECT * FROM spub where tanggal = '$sekarang' and nama_tangki='D'";
                        $no  = 1;
                        foreach ($dbh->query($sql10) as $data10) :
                    ?>
                    <td><?php echo $data10['zero'] ?>    
                    </td>

                        <td><?php echo $data10['six'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data10['six']==0 or $data10['six']==null) {
                                echo 0;
                            }else{
                                echo $data10['six'] - $data10['zero'];  
                            }
                            ?>
                        </td>
                        <td><?php echo $data10['twelve'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data10['twelve']==0 or $data10['twelve']==null) {
                                echo 0;
                            }else{
                            echo $data10['twelve'] - $data10['zero'] ;
                                }?>
                            </td>
                        <td><?php echo $data10['eightteen'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data10['eightteen']==0 or $data10['eightteen']==null) {
                                echo 0;
                            }else{
                            echo $data10['eightteen'] - $data10['zero'] ;
                            }?>
                            </td>
                        <td><?php echo $data10['twentyfour'] ?></td>
                        <td style="background-color: red; color:white;">
                            <?php 
                            if ($data10['twentyfour']==0 or $data10['twentyfour']==null) {
                                echo 0;
                            }else{
                            echo $data10['twentyfour'] - $data10['zero']; 
                            }?>
                            </td>
                    </tr>
                <?php
                endforeach;
                ?>

                <!-- total -->
                <div id="total">
                    <tr>
                    <td colspan="2" style="background-color: blue; color: white"> TOTAL </td>
                    <td style="background-color: blue; color: white"><?php 
                    echo ($data['zero']+$data3['zero']+$data4['zero']+$data5['zero']+$data6['zero']+$data7['zero']+$data8['zero']+$data9['zero']+$data10['zero']);?>
                        
                    </td>
                    <td style="background-color: blue; color: white"><?php echo ($data['six']+$data3['six']+$data4['six']+$data5['six']+$data6['six']+$data7['six']+$data8['six']+$data9['six']+$data10['six']); ?></td>
                    <td style="background-color: blue; color: white">
                        <?php  
                        $satu1 = $data['six'] - $data['zero'];
                        $satu2 = $data3['six'] - $data3['zero'];
                        $satu3 = $data4['six'] - $data4['zero'];
                        $satu4 = $data5['six'] - $data5['zero'];
                        $satu5 = $data6['six'] - $data6['zero'];
                        $satu6 = $data7['six'] - $data7['zero'];
                        $satu7 = $data8['six'] - $data8['zero'];
                        $satu8 = $data9['six'] - $data9['zero'];
                        $satu9 = $data10['six'] - $data10['zero'];
                        $dua1= $satu1+$satu3+$satu3+$satu4+$satu5+$satu6+$satu7+$satu8+$satu9;
                        echo $dua1;
                        ?></td>

                    <td style="background-color: blue; color: white">
                    <?php echo ($data['twelve']+$data3['twelve']+$data4['twelve']+$data5['twelve']+$data6['twelve']+$data7['twelve']+$data8['twelve']+$data9['twelve']+$data10['twelve']); ?></td>

                    <td style="background-color: blue; color: white">
                        <?php  
                        $satu1 = $data['twelve'] - $data['zero'];
                        $satu2 = $data3['twelve'] - $data3['zero'];
                        $satu3 = $data4['twelve'] - $data4['zero'];
                        $satu4 = $data5['twelve'] - $data5['zero'];
                        $satu5 = $data6['twelve'] - $data6['zero'];
                        $satu6 = $data7['twelve'] - $data7['zero'];
                        $satu7 = $data8['twelve'] - $data8['zero'];
                        $satu8 = $data9['twelve'] - $data9['zero'];
                        $satu9 = $data10['twelve'] - $data10['zero'];
                        
                        $dua2=$satu1+$satu3+$satu3+$satu4+$satu5+$satu6+$satu7+$satu8+$satu9;
                        echo $dua2;
                        ?></td>
                    <td style="background-color: blue; color: white"><?php  echo ($data['eightteen']+$data3['eightteen']+$data4['eightteen']+$data5['eightteen']+$data6['eightteen']+$data7['eightteen']+$data8['eightteen']+$data9['eightteen']+$data10['eightteen']);?>
                        
                    </td>
                    <td style="background-color: blue; color: white">
                        <?php  
                        $satu1 = $data['eightteen'] - $data['zero'];
                        $satu2 = $data3['eightteen'] - $data3['zero'];
                        $satu3 = $data4['eightteen'] - $data4['zero'];
                        $satu4 = $data5['eightteen'] - $data5['zero'];
                        $satu5 = $data6['eightteen'] - $data6['zero'];
                        $satu6 = $data7['eightteen'] - $data7['zero'];
                        $satu7 = $data8['eightteen'] - $data8['zero'];
                        $satu8 = $data9['eightteen'] - $data9['zero'];
                        $satu9 = $data10['eightteen'] - $data10['zero'];
                        
                        $dua3=$satu1+$satu3+$satu3+$satu4+$satu5+$satu6+$satu7+$satu8+$satu9;
                        echo $dua3;
                        ?></td>
                    <td style="background-color: blue; color: white"><?php echo ($data['twentyfour']+$data3['twentyfour']+$data4['twentyfour']+$data5['twentyfour']+$data6['twentyfour']+$data7['twentyfour']+$data8['twentyfour']+$data9['twentyfour']+$data10['twentyfour']); ?></td>
                    <td style="background-color: blue; color: white">
                        <?php  
                        $satu1 = $data['twentyfour'] - $data['zero'];
                        $satu2 = $data3['twentyfour'] - $data3['zero'];
                        $satu3 = $data4['twentyfour'] - $data4['zero'];
                        $satu4 = $data5['twentyfour'] - $data5['zero'];
                        $satu5 = $data6['twentyfour'] - $data6['zero'];
                        $satu6 = $data7['twentyfour'] - $data7['zero'];
                        $satu7 = $data8['twentyfour'] - $data8['zero'];
                        $satu8 = $data9['twentyfour'] - $data9['zero'];
                        $satu9 = $data10['twentyfour'] - $data10['zero'];
                        
                        $dua4=$satu1+$satu3+$satu3+$satu4+$satu5+$satu6+$satu7+$satu8+$satu9;
                        echo $dua4;
                        ?></td>
                </tr>
                <tr>
                    <td colspan="11" style="background-color: yellow; color: white"></td>
                </tr>
                <!-- PPP -->
                <tr>
                    <td colspan="3">PPP</td>
                    <?php
                        $sql2 = "SELECT * FROM ppp where tanggal = '$sekarang'";  
                        foreach ($dbh->query($sql2) as $datas) :
                    ?>
                    <td colspan="2">
                        <?php  
                        if ($datas['six']==0 or $datas['six']==null) {
                                echo 0;
                            }else{
                            echo $datas['six'];
                            }
                        ?>
                    </td>
                    <td colspan="2">
                        <?php  
                        if ($datas['twelve']==0 or $datas['twelve']==null) {
                                echo 0;
                            }else{
                            echo $datas['twelve'];
                            }
                        ?>
                    </td>
                    <td colspan="2">
                        <?php  
                        if ($datas['eightteen']==0 or $datas['eightteen']==null) {
                                echo 0;
                            }else{
                            echo $datas['eightteen'];
                            }
                        ?>
                    </td>
                    <td colspan="2">
                        <?php  
                        if ($datas['twentyfour']==0 or $datas['twentyfour']==null) {
                                echo 0;
                            }else{
                            echo $datas['twentyfour'];
                            }
                        ?>
                    </td>
                </tr>
                <?php
                endforeach;
                ?>    
                </div>
                
                <!-- estimaed production -->
                <tr>
                <td colspan="5">ESTIMATED PRODUCTION</td>
                <td colspan="2"><?php
                if ($datas['twelve']==0 or $datas['twelve']==null or $data['twelve']==0 or $data['twelve']==null) {
                        echo 0;
                    }else{
                    echo sprintf("%.2f",($datas['twelve']*(24/12))+(($dua2)*(24/12))); 
                    }
                    ?>  
                        
                    </td>
                <td colspan="2"><?php 
                if ($datas['eightteen']==0 or $datas['eightteen']==null or $data['eightteen']==0 or $data['eightteen']==null){
                    echo 0;
                } else{
                    echo sprintf("%.2f", ($datas['eightteen']*(24/18))+($dua3)*(24/18))        
                ;
                }
                ?>
                    
                </td>
                <td colspan="2"><?php 
                if ($data['twentyfour']==0 or $data['twentyfour']==null or $datas['twentyfour']==0 or $datas['twentyfour']==null) {
                    echo 0;
                }else{
                    echo sprintf("%.2f", ($datas['twentyfour']*(24/24))+($dua4*(24/24)));
                }
                ?>
                </td>
                </tr>

                </tbody>    
            </table>
        </div>
    </div>
    </div>
    <hr>
    <footer>
        <h2 class="text-nowrap text-uppercase text-center">PT PERTAMINA EP ASSET 5. <?php echo date('Y') ?></h2>
        <!--  Alvian "NOGOTSKIL" Wahyudhi -->
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>