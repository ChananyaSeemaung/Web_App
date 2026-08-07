<?php
include("connect.php");
$idc = $_GET['idc'];
$sql = "DELETE FROM member_tbl WHERE idc='$idc'";
$conn->query($sql);
?>
<meta http-equiv="refresh" content="0; url=ad_user.php">