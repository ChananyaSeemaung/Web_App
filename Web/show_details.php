<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="details.css" />
    <title>Document</title>
    <style>
.xzxz {
        display: flex;
        flex-direction: row;
        position: absolute;
        min-height: 40px;
        border-bottom: 1px solid rgb(239, 239, 244);
        margin-bottom: 50px;
        background-color: rgb(255, 255, 255);
        width: 100%;
        position: relative;
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
    height: 5.125rem;
    }
    .dffUbaPc {
        display: flex;
        position: absolute;
        right: 70px;
        justify-content: flex-end;
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
    .necklace{
        padding-left: 0;
        font-size: 14px;
        max-width: 30%;
        text-align: center;
        padding: 10px 15px;
    }
    .vf{
    text-decoration: none;
    color: rgba(0,0,0,.87);
    position: relative;
    overflow: visible;
    outline: 0;
    white-space: nowrap;
    display: block;
    color: rgba(0,0,0,.54);
    margin-left: 98px;
    color: hsla(0,0%,100%,.9);
    height: 0.875rem;
    line-height: 1.875rem;
    margin-top: 0rem;
}
.mUfiZ {
        display: flex;
        flex-direction: row;
        position: absolute;
        min-height: 40px;
        border-bottom: 1px solid rgb(239, 239, 244);
        left: 0px;
        right: 0px;
        bottom: 0px;
        background-color: rgb(255, 255, 255);
        margin: 0px auto;
        width: 100%;
        position: relative;
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
    .cart-wrapper{
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1;
        padding-bottom: 5px;
        margin: 0 20px;
    }
    .necklace{
        padding-left: 0;
        font-size: 14px;
        max-width: 30%;
        text-align: center;
        padding: 10px 15px;
    }
    .vf{
    text-decoration: none;
    color: rgba(0,0,0,.87);
    position: relative;
    overflow: visible;
    outline: 0;
    white-space: nowrap;
    display: block;
    color: rgba(0,0,0,.54);
    margin-left: 98px;
    color: hsla(0,0%,100%,.9);
    height: 0.875rem;
    line-height: 1.875rem;
    margin-top: 0rem;
}

    </style>
</head>
<nav style="height: 96px; width:1700px; " >
    <div style="width: 1700px; height: 96px;  position: absolute; background: white">
        <div style="width: 220px; height: 80px; left: 0px; top: 8px; position: absolute">
            <img src="us_image/8removebg.png"  style="width: 200px; height: 100px; left: 64.65px; top: -9px; position: absolute;">
        </div>
        <div style="left: 379px; top: 39px; position: absolute; justify-content: flex-start; align-items: center; gap: 68px; display: inline-flex">
            <div style="color: #2D2E2E; font-size: 16px; font-family: Inter; font-weight: 400; word-wrap: break-word">
            <a href="home.php" ><i class="fa-solid fa-house-chimney fa-2xl" style="color: #f9159a;"></i></a>
        </div>
            <div style="color: #2D2E2E; font-size: 16px; font-family: Inter; font-weight: 400; word-wrap: break-word">
             <a href="login.php" ><i class="fa-solid fa-basket-shopping fa-2xl" style="color: #f9159a;"></i></a>
             <div style="display: flex;" >
                <div id="navcol-2" class="collapse navbar-collapse">
                    <form class="d-flex">
                 <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="button">ค้นหา</button>
      </form>
        </div>
             </div>
        </div>
    </div>
    <div  style="display: flex; justify-content: flex-end; align-items: center; margin-right: 20px; margin-top: 10px; " >
        <button type="button" class="btn btn-primary btn-lg">เข้าสู่ระบบ</button>
        <button type="button" class="btn btn-primary btn-lg">สมัครสมาชิก</button>
    </div>

</div>
</nav>
<div class="xzxz">
    <div class="necklace">
        <div class="fUbaPc">
            <?php
            include("connect.php");

            $sql1 = "SELECT * FROM product_type ORDER BY type_id";
            $result1 = $conn->query($sql1);

            while ($row = $result1->fetch_assoc()) {
                $type_id = $row['type_id'];
                $type_name = $row['type_name'];
            ?>
            <div class="vf">
                <a href="show_type.php?type_id=<?= $type_id ?>" style="text-decoration: none; color: #ff70b5;">
                    <?= $type_name ?>
                </a>
            </div>
            <?php
            }

            // ปิดการเชื่อมต่อฐานข้อมูล
            $conn->close();
            ?>
        </div>
    </div>
</div>
<body style="font-family: 'Mali', cursive ; background-color:#fbfaf3; " >
<div class="container">
    <div class="con">
    <div class="row">
        <div class="col">
            <?php
            include("connect.php");
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
        <div class="cnd">
            <a style="margin-left: 15px;">มีสินค้าจำนวน<?=$rw_data['num_pro']?> ชิ้น</a>
        </div>
        </div>
    </div>
    <div style="margin-top : 15px;  ">
        <div style="padding-left: 20px;" >
            <div style="display: flex;">
                <button type="button" class="carte" aria-disabled="false"  >
                    <i class="fa-solid fa-cart-arrow-down"></i>
                    <a href="login.php" style="text-decoration:none; color:rgb(255, 46, 175);">เพิ่มเข้ารถเข็น</a></button>
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
</html>