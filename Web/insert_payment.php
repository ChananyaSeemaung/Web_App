<?php
include 'connect.php';

$order_id = isset($_POST['id_or']) ? $_POST['id_or'] : "";
$totalPrice = isset($_POST['total_price']) ? $_POST['total_price'] : "";
$payDate = isset($_POST['pay_date']) ? $_POST['pay_date'] : "";
$payTime = isset($_POST['pay_time']) ? $_POST['pay_time'] : "";

if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
    $new_image_name = 'bill_' . uniqid() . "." . pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "bill/" . $new_image_name;
    move_uploaded_file($_FILES['file1']['tmp_name'], $image_upload_path);
} else {
    $new_image_name = "";
}

$sql = "INSERT INTO payment (id_or, pay_money, pay_date, pay_time, pay_image)
        VALUES ('$order_id', '$totalPrice', '$payDate', '$payTime', '$new_image_name')";

$hand = mysqli_query($conn, $sql);

    $sql2 = "UPDATE order_tbl SET order_status = '2' WHERE id_or = '$order_id'";
if (mysqli_query($conn, $sql2)) {
    echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');</script>";
    echo "<script>window.location='histo.php';</script>";
} else {
    echo "<script>alert('บันทึกข้อมูลไม่สำเร็จ รหัสข้อผิดพลาด: " . mysqli_error($conn) . "');</script>";
    echo "<script>window.location='histo.php';</script>";
}


mysqli_close($conn);
?>
