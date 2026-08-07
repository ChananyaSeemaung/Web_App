<?php
session_start();

// ยกเลิกค่าใน $_SESSION['idc']
unset($_SESSION['idc']);

// ทำลาย session ทั้งหมด
session_destroy();

// สร้าง session ใหม่
session_start();

// ส่งผู้ใช้กลับไปยังหน้า home.php
header("Location: home.php");
exit;
?>
