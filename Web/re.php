<?php
       session_start();
       include('connect.php');
        $idc = $_POST['idc'];
        $namem = $_POST['namem'];
        $lnamem = $_POST['lnamem'];
        $user = $_POST['user'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $gmail = $_POST['gmail'];
        $phone = $_POST['phone'];
        
       
        $check_id = "SELECT * FROM member_tbl WHERE idc LIKE '$idc'"; 
        $re_check_id = mysqli_query($conn, $check_id);
        $cou_check_id = mysqli_num_rows($re_check_id);
    if ($cou_check_id > 0) {
        echo "<script>";
        echo "alert('มีการใช้เลขบัตรประชาชนนี้สมัครสมาชิกไปแล้ว');";
        echo "window.location=document.referrer;";
        echo "</script>";
    }else{
            $sql="INSERT INTO member_tbl (type,namem,lnamem,user,password,idc,phone,gmail,address) 
            VALUES ('0','$namem','$lnamem','$user','$password','$idc','$phone','$gmail','$address')";
        if(mysqli_query($conn,$sql)){
            echo "<script> alert('สมัครสมาชิกเรียบร้อยแล้ว');</script>";
            echo "<script> window.location='login.php';</script>";
        }else{
            echo "<script> alert ('บันทึกข้อมูลไม่ได้');</script>";
            echo "<script> window.location='member.php';</script>";
        }
    }
mysqli_close($conn);
?>