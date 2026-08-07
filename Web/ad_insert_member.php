<?php
require_once "connect.php";

$fname = $_POST['fname_mem,'];
$lname = $_POST['lname_mem'];
$username = $_POST['user_mem'];
$password = $_POST[' pass_mem'];
$idcard = $_POST['id_card'];


$check_id = "SELECT * FROM member_tbl WHERE id_card LIKE '$idcard'"; 
$re_check_id = mysqli_query($conn, $check_id);
$cou_check_id = mysqli_num_rows($re_check_id);
if ($cou_check_id > 0) {
    echo "<script>";
    echo "alert('มีการใช้เลขบัตรประชาชนนี้สมัครสมาชิกไปแล้ว');";
    echo "window.location=document.referrer;";
    echo "</script>";
} else {
    $in_mem = "INSERT INTO member_tbl (fname_mem, lname_mem, user_mem, pass_mem, id_card) VALUES ('$fname',
    '$lname','$username','$password', '$idcard')";
    if (mysqli_query($conn, $in_mem)) {
        echo "<script>";
        echo "alert('สมัครสมาชิกเรียบร้อยแล้ว');";
        echo "</script>";
        header('Location: ?page=lg');
    } else {
        echo "<script>";
        echo "alert('มีการใช้ Id Card นี้ในการสมัครสมาชิกแล้ว');";
        echo "window.location=document.referrer;";
        echo "</script>";
    }
}

?>
