<?php 
include 'connect.php';
$ids=$_GET['id'];
$ems=$_GET['ems'];

$sql="UPDATE payment SET ems='$ems' WHERE id_or='$ids' ";
$result=mysqli_query($conn,$sql);
if($result){
    //echo "<script>alert('ปรับสถานะเรียบร้อย'); </script>";
    echo "<script>window.location='re_order.php'; </script>";
}else{
    echo "<script>alert('ไม่สามารถปรับสถานะการสั่งซื้อได้'); </script>";
}

mysqli_close($conn);
?>