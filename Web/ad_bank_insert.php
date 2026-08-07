<?php
session_start();
include('connect.php');

	$b_name = $_POST["b_name"];
	$b_number = $_POST["b_number"];
	$b_owner = $_POST["b_owner"];
	$bn_name = $_POST["bn_name"];

	if (is_uploaded_file($b_img['file1']['tmp_name'])) {
		$new_image_name = 'pr_'.uniqid().".".pathinfo(basename($b_img['file1']['name']), PATHINFO_EXTENSION);
		$image_upload_path = "b_img/".$new_image_name;
		move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
		} else {
		$new_image_name = "";
		}
 
$sql = "INSERT INTO bank (b_name, b_number, b_owner, bn_name, b_img)
VALUES ('$b_name','$b_number','$b_owner','$bn_name', '$new_image_name')";


$result = mysqli_query($conn,$sql);
$check_id = "SELECT * FROM bank WHERE b_number LIKE '$b_number'"; 




$re_check_id = mysqli_query($conn, $check_id);
$cou_check_id = mysqli_num_rows($re_check_id);


if ($cou_check_id > 0) {
echo "<script>";
echo "alert('มีการใช้เลขบัญชีนี้ไปแล้ว');";
echo "window.location=document.referrer;";
echo "</script>";
}
if($result){
echo "<script> alert('เรียบร้อยแล้ว');</script>";
echo "<script> window.location='ad_bank.php';</script>";
}else{
echo "<script> alert ('ยืนยันข้อมูลไม่ได้');</script>";
}
mysqli_close($conn);
?>
