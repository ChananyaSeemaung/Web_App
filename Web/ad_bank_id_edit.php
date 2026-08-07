<?php
session_start();
include('connect.php');

    $b_name = $_GET["b_name"];
    $b_number = $_GET["b_number"];
    $b_owner = $_GET["b_owner"];


    $up_pro="UPDATE bank SET b_name='$b_name',b_number='$b_number', b_owner='$b_owner' WHERE b_number LIKE '$b_number'";
    if(mysqli_query($conn, $up_pro)){
        echo "<script>";
        echo "alert('แก้ไขข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'ad_bank.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถแก้ไขข้อมูลได้');";
        echo "window.location.href = 'ad_bank.php';";
        echo "</script>";
    }
?>
