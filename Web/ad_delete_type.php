<?php
session_start();
include('connect.php');
    $type_id=$_GET['type_id'];
    $del_pro="DELETE FROM product_type WHERE type_id LIKE '$type_id'";
    if(mysqli_query($conn, $del_pro)){
        echo "<script>";
        echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'ad_type.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถลบข้อมูลได้');";
        echo "window.location.href = 'ad_type.php';";
        echo "</script>";
    }
?>
<meta http-equiv="refresh" content="0; url=ad_type.php">