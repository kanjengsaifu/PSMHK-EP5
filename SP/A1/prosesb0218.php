<?php
include '../../storage.php';
$tanggal = date('Ymd');

if (isset($_POST)) {
    $sql = "update spub set eightteen='$_POST[b0218]' where tanggal = $tanggal and nama_tangki='A-1'";

    if ($dbh->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("location:B02.php");
?>
