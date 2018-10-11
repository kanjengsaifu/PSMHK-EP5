<?php
include '../storage.php';
$tanggal = date('Ymd');

if (isset($_POST)) {
    $sql = "update spub set twentyfour='$_POST[b0224]' where tanggal = $tanggal and nama_tangki='B-02'";

    if ($dbh->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("location:B02.php");
?>
