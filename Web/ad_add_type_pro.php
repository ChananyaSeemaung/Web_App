<?php
session_start();
include('connect.php');
    $type_name=$_POST['type_name'];


    $insert_pro="INSERT INTO product_type (type_name) 
    VALUES ('$type_name')";

    if(mysqli_query($conn, $insert_pro)){
        echo "<script>";
        echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'ad_type.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
        echo "window.location.href = 'ad_type.php';";
        echo "</script>";
    }
?>