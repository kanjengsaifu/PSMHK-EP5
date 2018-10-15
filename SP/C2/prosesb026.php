	<?php
include "../../storage.php";
$con = mysqli_connect("localhost", "root", "", "smhk");

$tanggal = date('Ymd');

$tampil = mysqli_query($con, "SELECT * FROM spub WHERE tanggal = $tanggal-1 and nama_tangki = 'C-2'") or die (mysqli_error());
$data = mysqli_fetch_array($tampil, MYSQL_BOTH));

$cek = mysqli_query($con, "SELECT * FROM spub WHERE tanggal = $tanggal and nama_tangki = 'C-2'") or die (mysqli_error());
$cekin = mysqli_fetch_array($cek, MYSQL_BOTH));

if (isset($_POST)) {

	//cek kosong
	if ($cekin['six']== 0 or $cekin['six'] ==null) {
    	$sql = "INSERT INTO spub (tanggal, zero, six, nama_tangki) values ('$tanggal','$data[twentyfour]', '$_POST[b026]','C-2' )";	
	} else {
    	$sql = "update spub set six='$_POST[b026]' where tanggal = $tanggal and nama_tangki='C-2'";
	}
    

    if ($dbh->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $dbh->error;
}
}
header("location:B02.php");
?>
