<?php
session_start();
include('connect.php');

/*echo'<pre>';
print_r($_GET);
echo'</pre>';
exit();*/

    $id=$_GET['idc'];
    $namem=$_GET['namem'];
    $lnamem=$_GET['lnamem'];
    $address=$_GET['address'];

    $up_pro="UPDATE member_tbl SET namem='$namem', lnamem='$lnamem', address='$address' WHERE idc LIKE '$id'";
    if(mysqli_query($conn, $up_pro)){
        echo "<script>";
        echo "alert('แก้ไขข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'cart.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถแก้ไขข้อมูลได้');";
        echo "window.location.href = 'cart.php';";
        echo "</script>";
    }
?>