<?php include ("connect.php");
session_start();

if (!isset($_SESSION["user"])) {
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="details.css" />
    <title>Document</title>
<style>
.shopinfo_join{
    width: 100%;
    max-width: 300px;
    margin: 20px auto;
    text-align: center;
}
.shopinfo_join_button{
  display: flex;
    flex-wrap: nowrap;
    justify-content: space-between;
    height: 42px;
    width: 300px;
    cursor: pointer;
    color: white;
    border: 1px solid;
    border-color: white;
    border-radius: 4px
}
.shopinfo_join_label{
  display: flex;
  align-items: center;
  flex: 4;
  flex-wrap: nowrap;
  flex-direction: column;
}

    .form-control{
        height: 40px;
        width: 500px;
    }
    .d-flex {
        position: absolute;
        left: 500px;
        align-items: center;
    }
    .btn-primary{
        background-color: #FF0099;
        border: 0;
    }
    .navbar__spacer{
        left: 100px;
    }
    .navbar__links{
    display: flex;
    align-items: center;
    list-style: none;
    padding: 0;
    margin: 0;
    height: 2.125rem;
    }
    .mem{
        cursor: pointer;
        padding: 0;
        user-select: none;
        position: relative;
        justify-content: center;
        display : flex;
        align-items: center;

    }
    .dffUbaPc {
        display: flex;
        position: absolute;
        left: 400px;
        right: 70px;
        justify-content: flex-end;
    }
    .dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 2;
  margin-top: 250px;

}
/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<?php include('navber.php'); ?>
<body style="font-family: 'Mali', cursive ;" >
<div class="container">
    <div class="con">
    <div class="row">
        <div class="col">
            <?php
            include ("connect.php");
            $ids=$_GET['id_pro'];
            $sql = "SELECT * FROM product WHERE id_pro like '$ids' ORDER BY id_pro";
            $re_data=mysqli_query($conn, $sql);
            $rw_data=mysqli_fetch_array($re_data);
            // ทำการเรียกข้อมูลมาจากตาราง product จากเงื่อนที่ใช้ id_pro มาอิงในการเรียก เพื่อนำข้อมูลนั้นมาแสดง
        ?>
            <img src="img/<?=$rw_data['image']?>" style="align-items: center;" width="500px"height="500px">
            </div>
            <div class="col">
                <div class="name_pro">
            <h4 ><?=$rw_data['name_pro']?></h4>
        </div>
        <div class="price_pro">
           <a style="color: #FF1493;" >฿ <?=$rw_data['price_pro']?></a></div>
        <div class="dfff">
    <div class="pntext">จำนวน</div>
    <div class="lnfl">
        <div style="margin-left: 15px;">
            <a style="margin-left: 15px;">มีสินค้าจำนวน<?=$rw_data['num_pro']?> ชิ้น</a>
        </div>
        </div>
    </div>
    <div style="margin-top : 15px;">
        <div style="padding-left: 20px;" >
            <div style="display: flex;">
                <button type="button" class="carte" aria-disabled="false"  >
                    <i class="fa-solid fa-cart-arrow-down"></i>
                    <a href="order.php?id_pro=<?=$rw_data['id_pro'];?>" style="text-decoration:none; color:rgb(255, 46, 175);">เพิ่มเข้ารถเข็น</a></button>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
    </div>
<div class="details">
    <a>รายละเอียด</a>
</div>
<div class="detailscon">
    <div class="detailstext">
        <a><?=$rw_data['details']?></a>
</div>
</div>
</div>
</body>
<?php include('footer.php') ?>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</html>