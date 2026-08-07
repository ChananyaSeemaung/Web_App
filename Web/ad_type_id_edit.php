<?php
session_start();
include('connect.php');
    $type_id=$_GET['type_id'];
    $type_name=$_GET['type_name'];

    $up_pro="UPDATE product_type SET type_id='$type_id', type_name='$type_name' WHERE type_id LIKE '$type_id'";
    if(mysqli_query($conn, $up_pro)){
        echo "<script>";
        echo "alert('แก้ไขข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'ad_type.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถแก้ไขข้อมูลได้');";
        echo "window.location.href = 'ad_type.php';";
        echo "</script>";
    }
?>