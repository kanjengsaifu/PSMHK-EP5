<?php
include '../storage.php';

mysql_connect("localhost", "root", "") or
    die("Could not connect: " . mysql_error());
mysql_select_db("smhk");


$tanggal = date('Ymd');

$cek = mysql_query("SELECT * FROM ppp WHERE tanggal = $tanggal") or die (mysql_error());
$cekin = mysql_fetch_array($cek);

if (isset($_POST)) {
    
	if ($cekin['twelve']== 0 or $cekin['twelve']== null ) {
		$sql = "INSERT INTO ppp (tanggal, zero, six, twelve, location) values ('$tanggal', 0, 0, '$_POST[b026]', 'B-02')";
	}
	else {
		$sql = "update ppp set twelve='$_POST[b026]' where tanggal = '$tanggal' and location='B-02'";
	}



    
    if ($dbh->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("location:ppp.php");
?>
