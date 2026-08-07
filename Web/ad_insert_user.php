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

        if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
            $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
            $image_upload_path = "profile/".$new_image_name;
            move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path);
            } else {
            $new_image_name = "";
            }
    
           $sql="INSERT INTO member_tbl (idc, namem, lnamem, user, password, address, gmail, phone) 
           VALUES ('$idc' ,'$namem' ,'$lnamem','$user','$password', '$address', '$gmail', '$phone')";
            $result = mysqli_query($conn,$sql);
            $check_id = "SELECT * FROM member_tbl WHERE idc LIKE '$idc'"; 
       
    
    
            
            $re_check_id = mysqli_query($conn, $check_id);
            $cou_check_id = mysqli_num_rows($re_check_id);
            
      
        if ($cou_check_id > 0) {
            echo "<script>";
            echo "alert('มีการใช้เลขบัตรประชาชนนี้สมัครสมาชิกไปแล้ว');";
            echo "window.location=document.referrer;";
            echo "</script>";
        }
            if($result){
            echo "<script> alert('สมัครสมาชิกเรียบร้อยแล้ว');</script>";
            echo "<script> window.location='login.php';</script>";
            }else{
            echo "<script> alert ('บันทึกข้อมูลไม่ได้');</script>";
            }
    mysqli_close($conn);
    ?>
