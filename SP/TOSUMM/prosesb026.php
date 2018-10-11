	<?php
include "../../storage.php";
mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("smhk");

$tanggal = date('Ymd');

$tampil = mysql_query("SELECT * FROM spub WHERE tanggal = $tanggal-1 and nama_tangki = 'TOS-UMM'") or die (mysql_error());
$data = mysql_fetch_array($tampil);

$cek = mysql_query("SELECT * FROM spub WHERE tanggal = $tanggal and nama_tangki = 'TOS-UMM'") or die (mysql_error());
$cekin = mysql_fetch_array($cek);

if (isset($_POST)) {

	//cek kosong
	if ($cekin['six']== 0 or $cekin['six'] ==null) {
    	$sql = "INSERT INTO spub (tanggal, zero, six, nama_tangki) values ('$tanggal','$data[twentyfour]', '$_POST[b026]','TOS-UMM' )";	
	} else {
    	$sql = "update spub set six='$_POST[b026]' where tanggal = $tanggal and nama_tangki='TOS-UMM'";
	}
    

    if ($dbh->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $dbh->error;
}
}
header("location:B02.php");
?>
