<?php
include("connect.php");
$id_pro = $_GET['id_pro'];
$sql = "DELETE FROM product WHERE id_pro='$id_pro'";
$conn->query($sql);
?>
<meta http-equiv="refresh" content="0; url=ad_home.php">