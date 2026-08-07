<?php
include('connect.php');
session_start();

if (isset($_GET['id_or'])) {
    $id_or = $_GET['id_or'];
    $ems = $_GET['ems'];

    // ตรวจสอบค่า "id_or" และ "ems" และดำเนินการตามต้องการ

    // เช่น อัปเดตข้อมูลในฐานข้อมูลด้วยค่า id_or และ ems
    $sql = "UPDATE order_tbl SET order_status = ?, ems = ? WHERE id_or = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        $order_status = 3; // กำหนดค่า order_status เป็น 3
        mysqli_stmt_bind_param($stmt, "isi", $order_status, $ems, $id_or);
        mysqli_stmt_execute($stmt);

        // ตรวจสอบว่าอัปเดตข้อมูลสำเร็จหรือไม่
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            echo "<script>";
            echo "window.location.href = 're_order_yes.php';";
            echo "</script>";
        }
    }
}
    mysqli_close($conn);
?>
