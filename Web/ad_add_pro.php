<?php
session_start();
include('connect.php');
    $name=$_POST['name_pro'];
    $type_id=$_POST['type_id'];
    $price=$_POST['price_pro'];  
    $num=$_POST['num_pro'];  
    $details=$_POST['details'];  
    
    if (is_uploaded_file($_FILES['file1']['tmp_name'])) {
        $new_image_name = 'pr_'.uniqid().".".pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
        $image_upload_path = "img/".$new_image_name; 
        move_uploaded_file($_FILES['file1']['tmp_name'],$image_upload_path); 
        } else {
        $new_image_name = "";

    }
    $insert_pro="INSERT INTO product (name_pro,type_id,price_pro,num_pro,details,image) 
    VALUES ('$name','$type_id','$price','$num','$details','$new_image_name')";

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