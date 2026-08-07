<?php
session_start();

if(isset($_POST['user'])){
    include('connect.php');

$user = $_POST['user'];
$password = $_POST['password'];
$query = "SELECT*FROM member_tbl WHERE user LIKE '$user' AND password LIKE '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1){
    if ($row=mysqli_fetch_array($result)){
    $_SESSION['idc'] = $row['idc'];
    $_SESSION['user'] = $row['user'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['namem'] = $row['namem'];
    $_SESSION['lnamem'] = $row['lnamem'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['userleverl'] = $row['type'];
        if ($_SESSION['userleverl'] == '1'){
            header("location:ad_user.php");
        }
        if ($_SESSION['userleverl'] == '0'){
            header("location:home_login.php");
        }  
}else{
    echo "<script>alert ('รหัสผ่านหรือชื่อผู้ใช้ไม่ถูกต้องกรุณาตรวจสอบใหม่อีกครั้ง')</script>";
}
}else{
    header("location:home.php");
}
}
?>
