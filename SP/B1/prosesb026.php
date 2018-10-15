<?php
include "../../storage.php";
$con = mysqli_connect("localhost", "root", "", "smhk");

$tanggal = date('Ymd');

$tampil = mysqli_query($con, "SELECT * FROM spub WHERE tanggal = $tanggal-1 and nama_tangki = 'B-1'") or die (mysqli_error());
$data = mysqli_fetch_array($tampil, MYSQLI_BOTH);

$cek = mysqli_query($con, "SELECT * FROM spub WHERE tanggal = $tanggal and nama_tangki = 'B-1'") or die (mysqli_error());
$cekin = mysqli_fetch_array($cek, MYSQLI_BOTH);

if (isset($_POST)) {

	//cek kosong
	if ($cekin['six']== 0 or $cekin['six'] ==null) {
    	$sql = "INSERT INTO spub (tanggal, zero, six, nama_tangki) values ('$tanggal','$data[twentyfour]', '$_POST[b026]','B-1' )";	
	} else {
    	$sql = "update spub set six='$_POST[b026]' where tanggal = $tanggal and nama_tangki='B-1'";
	}
    

    if ($dbh->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $dbh->error;
}
}
header("location:B02.php");
?>
