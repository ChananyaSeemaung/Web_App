<?php
include("connect.php");
$b_number = $_GET['b_number'];
$sql = "DELETE FROM bank WHERE b_number ='$b_number'";
$conn->query($sql);
?>
<meta http-equiv="refresh" content="0; url=ad_bank.php">