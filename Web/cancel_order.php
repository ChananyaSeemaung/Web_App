<?php 
include 'connect.php';
$ids=$_GET['id'];

$sql="UPDATE order_tbl SET order_status = 0 WHERE id_or='$ids' ";
$result=mysqli_query($conn,$sql);
if($result){
    //echo "<script>alert('ยกเลิกใบสั่งซื้อเรียบร้อย'); </script>";
    echo "<script>window.location='re_order.php'; </script>";
}else{
    echo "<script>alert('ไม่สามารถลบข้อมูลได้'); </script>";
}

mysqli_close($conn);
?>