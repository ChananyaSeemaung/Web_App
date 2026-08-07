<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="upload.css" />
  <title>login</title>
  <style>
    button {
      padding: 1px 50px;
      font-size: 1.5rem;
      cursor: pointer;
      border: 0px;
      background: transparent;
      position: relative;
      margin: 20px;
      transition: all 0.25s ease;
    }
    .btn-4{
      color: #fff;
      overflow: hidden;
      border-radius: 30px;
      box-shadow: 0px -0px 0px 0px rgba(204, 102, 153, 0.5),
      0px 0px 0px 0px rgba(204, 102, 204, 0.5);
    }
    .btn-4:hover{
      transform: translate(0,-6px);
      box-shadow:  0px -10px 25px 0px rgba(204, 102, 153, 0.5),
      -10px 10px 25px 0px rgba(204, 102, 204, 0.5);
    }
   .btn-4:hover::after{
      transform: rotate(150deg);
   }
   .btn-4::after{
      content: "";
      width: 400px;
      height: 400px;
      position: absolute;
      top: -50px;
      left: -100px;
      background-color: #EEB8C5;
      background-image: linear-gradient(#EEB8C5 0%, #E688A1 100%, #F14668 50%);
      z-index: -1;
      transition: all 0.25s ease;

   }


    .btn-5{
      padding: 10px 20px;
      font-size: 1.0rem;
      color: #fff;
      overflow: hidden;
      border-radius: 30px;
      box-shadow: 0px -0px 0px 0px rgba(204, 102, 153, 0.5),
      0px 0px 0px 0px rgba(204, 102, 204, 0.5);
    }
    .btn-5:hover{
      transform: translate(0,-6px);
      box-shadow:  0px -10px 25px 0px rgba(204, 102, 153, 0.5),
      -10px 10px 25px 0px rgba(204, 102, 204, 0.5);
    }
   .btn-5:hover::after{
      transform: rotate(150deg);
   }
   .btn-5::after{
      content: "";
      width: 400px;
      height: 400px;
      position: absolute;
      top: -50px;
      left: -100px;
      background-color: #FF3399;
      background-image: linear-gradient(#FF99CC 25%, #FF6699 25%, #FF6699 50%);
      z-index: -1;
      transition: all 0.25s ease;

   }

  body{
    font-family: 'Mali', cursive ;
    color:#ec407a;
    background-size: auto;
  }

  </style>
</head>

<body  background="ad_image/33.jpg"  class="text-center">
<nav class="navbar navbar-light navbar-expand-md py-3" style="background-color:#FF99CC;">
    <div class="container"><img style="width: 90px;height: 90px;" src="ad_image/50.png" /><a class="navbar-brand d-flex align-items-center"><span style="color:#fff">Sweetheart jewelry shop<br />
    </span></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-3" class="collapse navbar-collapse" >
            <ul class="navbar-nav mx-auto"></ul>
        </div>  
        <button class="btn-5" onclick="document.location='ad_member.php'">ล็อกเอาท์</button> 
        <button class="btn-5" onclick="document.location='ad_home.php'">หน้าหลัก</button>
    </div>
</nav>
<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5-col-xxl-4">
    
  <?php
        $id_pro=$_GET['id_pro'];
        $data="SELECT*FROM product WHERE id_pro LIKE '$id_pro'";
        $re_data=mysqli_query($conn, $data);
        $rw_data=mysqli_fetch_array($re_data);

    ?>
  <main class="form-signin w-100 m-auto">
    <form action="ad_edit_pro.php" method="GET">
      <img class="mb-4" src="ad_image/48.png" alt="" width="250" height="250">
        <h1 class="h3 mb-3 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">แก้ไขรายการสินค้า<?php echo $rw_data['name_pro'];?></font></font></h1>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "id_pro" id="floatinginput"  readonly value="<?php echo $rw_data['id_pro'];?>">
        <label for="floating"><font "><font  required>รหัสสินค้า</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "name_pro" id="floatinginput"  placeholder="ชื่อสินค้า" value="<?php echo $rw_data['name_pro'];?>">
        <label for="floating"><font "><font  required>ชื่อสินค้า</font></font></label><br>
      </div>
      <label class="form-label">ประเภทสินค้า</label><br>
          <select class="form-select" name="type_id" required>
            <?php 
            session_start();
            include('connect.php');
            $data="SELECT * FROM product_type ORDER BY type_name";
            $re_data=mysqli_query($conn, $data);
            while($row=mysqli_fetch_array($re_data)){
            ?>
            <option value="<?=$row['type_id']?>"><?=$row['type_name']?></option>
            <?php
            }
            ?>
          </select><br>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "price_pro" id="floatinginput" placeholder="ราคาสินค้า" value="<?php echo $rw_data['price_pro'];?>">
        <label for="floating"><font "><font  required>ราคาสินค้า</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "num_pro" id="floatinginput" placeholder="จำนวนสินค้า" value="<?php echo $rw_data['num_pro'];?>">
        <label for="floating"><font><font  required>จำนวนสินค้า</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "details" id="floatinginput"  placeholder="รายระเอียดสินค้า" value="<?php echo $rw_data['details'];?>">
        <label for="floating"><font "><font  required>รายระเอียดสินค้า</font></font></label><br>
      </div>

      <button class="btn-4">บันทึก</button>
</div>
</div>
</div>
      </form> 
      </main>
    </body>
</html>