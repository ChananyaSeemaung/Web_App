<?php
session_start();
include('connect.php');
$user = $_POST['user'];
$password = $_POST['password'];


$check = "SELECT*FROM member_tbl WHERE user LIKE '$user' AND password LIKE '$password'";
$re_check = mysqli_query($conn, $check);
$cou_check = mysqli_num_rows($re_check);
if($cou_check>0){

    $rw_check=mysqli_fetch_array($re_check);
    $_SESSION['namem']= $rw_check[1]." ".$rw_check[2];
    $_SESSION['type']= $rw_check[6];

    header('Location: ad_home.php');

} else {
    echo "<script>";
    echo "alert('กรุณาตรวจสอบ Username / Password ของท่านให้ถูกต้อง');";
    echo "window.location.href = 'ad_login.php';";
    echo "</script>";
}
?>
