
<?php
session_start();
include('connect.php');



    $idc=$_GET['idc'];
    $namem=$_GET['namem'];
    $lnamem=$_GET['lnamem'];
    $user =$_GET['user'];
    $password=$_GET['password'];
    $phone=$_GET['phone'];
    $gmail=$_GET['gmail'];
    $address=$_GET['address'];

    $up_pro="UPDATE member_tbl SET namem='$namem', lnamem='$lnamem', user='$user', password='$password', phone='$phone', gmail='$gmail', address='$address' WHERE idc LIKE '$idc'";
    if(mysqli_query($conn, $up_pro)){
        echo "<script>";
        echo "alert('แก้ไขข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'ad_porfile.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถแก้ไขข้อมูลได้');";
        echo "window.location.href = 'ad_porfile.php';";
        echo "</script>";
    }
?>
