<?php
session_start();
include('connect.php');
    $id_pro=$_GET['id_pro'];
    $del_pro="DELETE FROM product WHERE id_pro LIKE '$id_pro'";
    if(mysqli_query($conn, $del_pro)){
        echo "<script>";
        echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'home.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถลบข้อมูลได้');";
        echo "window.location.href = 'ad_home.php';";
        echo "</script>";
    }
?>
<meta http-equiv="refresh" content="0; url=ad_home.php">