<?php
session_start();
include('connect.php');
    $b_number=$_GET['b_number'];
    $del_pro="DELETE FROM bank WHERE b_number LIKE '$b_number'";
    if(mysqli_query($conn, $del_pro)){
        echo "<script>";
        echo "alert('ลบข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'ad_bank.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถลบข้อมูลได้');";
        echo "window.location.href = 'ad_bank.php';";
        echo "</script>";
    }
?>
<meta http-equiv="refresh" content="0; url=ad_bank.php">