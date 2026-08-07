<?php
session_start();
include('connect.php');
    $name=$_GET['name_pro'];
    $price=$_GET['price_pro'];  
    $num=$_GET['num_pro'];  
    $details=$_GET['details'];  
    
     //อัพโหลดรูป 
    //is_uploaded_fileการเช็คว่ามีการกดปุ่มอัพโหลดไฟล์ไหม
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
        $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);//เปลี่ยนชื่อไฟล์รูป
        $image_upload_path = "img/".$new_image_name; 
        move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path); //บันทึกไปยังโฟเดอร์ img
        } else {
        $new_image_name = "";
        
    //เพิ่มข้อมูล
    }
    $insert_pro="INSERT INTO product (name_pro,price_pro,num_pro,details,image) 
    VALUES ('$name','$price','$num','$details','$new_image_name')";

    // echo $insert_pro;
    // exit();

    if(mysqli_query($conn, $insert_pro)){
        echo "<script>";
        echo "alert('เพิ่มข้อมูลเรียบร้อยแล้ว');";
        echo "window.location.href = 'ad_home.php';";
        echo "</script>";
    }else{
        echo "<script>";
        echo "alert('ไม่สามารถเพิ่มข้อมูลได้');";
        echo "window.location.href = 'ad_home.php';";
        echo "</script>";
    }
?>