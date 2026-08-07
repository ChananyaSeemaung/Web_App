<?php
session_start();
include('connect.php');
    $b_name = $_POST["b_name"];
    $b_number = $_POST["b_number"];
    $b_owner = $_POST["b_owner"]; 
    
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
        $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
        $image_upload_path = "b_img/".$new_image_name; 
        move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path); 
        } else {
        $new_image_name = "";
        
   
    }
    $insert_pro="INSERT INTO bank (b_name,b_number,b_owner,b_img) 
    VALUES ('$b_name','$b_number','$b_owner','$new_image_name')";


    if(mysqli_query($conn, $insert_pro)){
        echo "<script>";
        echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'ad_bank.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
        echo "window.location.href = 'ad_bank.php';";
        echo "</script>";
    }
?>