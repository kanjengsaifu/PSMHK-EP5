<?php
include '../storage.php';

$con = mysqli_connect("localhost", "root", "", "smhk");


$tanggal = date('Ymd');

$cek = mysqli_query($con, "SELECT * FROM ppp WHERE tanggal = $tanggal") or die (mysqli_error());
$cekin = mysqli_fetch_array($cek, MYSQLI_BOTH);

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
