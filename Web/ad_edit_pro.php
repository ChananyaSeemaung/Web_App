<?php
session_start();
include('connect.php');
    $id=$_GET['id_pro'];
    $name=$_GET['name_pro'];
    $type_id =$_GET['type_id'];
    $price=$_GET['price_pro'];
    $num=$_GET['num_pro'];
    $details=$_GET['details'];

    $up_pro="UPDATE product SET name_pro='$name', type_id='$type_id', price_pro='$price', num_pro='$num', details='$details' WHERE id_pro LIKE '$id'";
    if(mysqli_query($conn, $up_pro)){
        echo "<script>";
        echo "alert('แก้ไขข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'ad_home.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถแก้ไขข้อมูลได้');";
        echo "window.location.href = 'ad_home.php';";
        echo "</script>";
    }
?>