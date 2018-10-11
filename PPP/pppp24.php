<?php
include '../storage.php';
$tanggal = date('Ymd');

if (isset($_POST)) {
    $sql = "update ppp set twentyfour='$_POST[b026]' where tanggal = '$tanggal' and location='B-02'";

    if ($dbh->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}
}
header("location:ppp.php");
?>
