<?php
include("connect.php");
$type_id = $_GET['type_id'];
$sql = "DELETE FROM product_type  WHERE type_id ='$type_id'";
$conn->query($sql);
?>
<meta http-equiv="refresh" content="0; url=ad_type.php">