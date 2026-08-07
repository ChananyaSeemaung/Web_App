<?php 
include('connect.php');
session_start();

if (!isset($_SESSION["user"])) {
    header("location:login.php");
    exit(); // ออกจากการทำงานเพื่อป้องกันการทำงานต่อ
}

$idc = $_SESSION['idc'];
$namem = $_SESSION['namem'];
$lnamem = $_SESSION['lnamem'];
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];

$data = "SELECT * FROM member_tbl WHERE idc LIKE '$idc'";
$re_data = mysqli_query($conn, $data);

if ($re_data) {
    $rw_data = mysqli_fetch_array($re_data);
    
    /*echo '<pre>';
    print_r($rw_data);
    echo '</pre>';*/
//} else {
    //echo "Error in query: " . mysqli_error($conn);



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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
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
  nav{
            background-color: #fdd74e;
            width: 100%;
            height: 13vh;
        }
        .mUfiZ {
        display: flex;
        flex-direction: row;
        position: absolute;
        min-height: 60px;
        border-bottom: 1px solid rgb(239, 239, 244);
        left: 0px;
        right: 0px;
        bottom: 0px;
        background-color: rgb(255, 255, 255);
        margin: 0px auto;
        width: 100%;
        position: relative;
        }
    .fUbaPc {
        display: flex;
        position: absolute;
        left: 400px;
        right: 70px;
    }
    .necklace{
        padding-left: 0;
        font-size: 14px;
        max-width: 30%;
        text-align: center;
        padding: 10px 15px;
    }
    .form-control{
        height: 40px;
        width: 500px;
    }
    .d-flex {
        position: absolute;
        left: 800px;
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
    .cart-wrapper{
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1;
        padding-bottom: 5px;
        margin: 0 20px;
    }
    .catfon{
    margin-left: 1.9375rem;
    border-left: 0.0625rem solid #fff;
    }
    .vtrWey{
        height: 3px;
    width: 100%;
    background-position-x: -30px;
    background-size: 116px 3px;
    background-image: repeating-linear-gradient(45deg,#6fa6d6,#6fa6d6 33px,transparent 0,transparent 41px,#f18d9b 0,#f18d9b 74px,transparent 0,transparent 82px);
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
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
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
.xzxz {
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
        footer{
    display: block;
    position: relative;
    margin: 0 auto;
    border-radius: 30px;
    background-color:#ffdbe6;
    padding-top: 60px;
    
}
.footer_wrapper{
    display: flex;
    align-items: flex-start;
    flex-wrap: nowrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto 20px;
}
.footer_left{
  display: flex;
    flex-basis: 300px;
    flex-wrap: wrap;
    justify-content: space-between;
}
.footer_left{
    display: flex;
    align-items: center;
    flex-wrap: nowrap;
    justify-content: flex-start;
    width: calc(100% - 36px);
    text-align: left;
    flex-direction: column;
}
  </style>
</head>


<div class="mUfiZ">
    <div class="dffUbaPc" >
        <div class="necklace">
            <div class="navbar__spacer"></div>
                <ul class="navbar__links">
                    <li class="mem">
                        <div class="dropdown">
                        <a  style="color: #ff70b5; text-decoration:none; font-size: 18px; ">
                        <img src="us_image/20.jpg" style="border-radius: 50px; width: 50px; height: 50px; " >
                        <?php echo $_SESSION['user'];?>
                        <div class="dropdown-content">
                            <a href="home_login.php"><i class="fa-solid fa-user-pen" style="color: #000000;"></i>    หน้าหลัก</a>
                            <a href="d.php"><i class="fa-solid fa-user-pen" style="color: #000000;"></i>     แก้ไขข้อมูลส่วนตัว</a>
                            <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #000000;"></i>      ออกจากระบบ</a>
                        </div>
            </ul>
        </div>
    </div>
</div>
<nav class="navbar navbar-light navbar-expand-md py-3">
    <div class="container">
    <img style="width: 4cm;height: 4cm;" src="us_image/8removebg.png"></img>
    <div class="catfon">
        <div style="position: relative;" >
            <div style="padding: 20px 0;" >
                <i class="fa-solid fa-cart-shopping fa-2xl" style="color: #ffffff; margin-left: 1.9375rem;"></i>
            </div>
        </div>
    </div>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-2" class="collapse navbar-collapse">
        <form class="d-flex">
            <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">ค้นหา</button>
      </form>
        </div>
        <div style="position: relative;" >
            <div style="padding: 20px 0;" >
                <a href="home_login.php" ><i class="fa-solid fa-house fa-2xl" style="color: #ffffff;"></i></a>
            </div>
        </div>
</nav>
<div class="xzxz">
    <div class="fUbaPc" >
        <div class="necklace">
            <a href="#" style="text-decoration: none; color: #ff70b5; "> สร้อยคอลูกปัด </a>
        </div>
        <div class="necklace">
            <a href="#" style="text-decoration: none; color: #ff70b5; "> สร้อยข้อมือลูกปัด</a>
        </div>
        <div class="necklace">
            <a href="#" style="text-decoration: none; color: #ff70b5; "> สร้อยข้อเท้าลูกปัด</a>
        </div>
        <div class="necklace">
            <a href="#" style="text-decoration: none; color: #ff70b5; "> แหวนลูกปัด</a>
        </div>
        <div class="necklace">
            <a href="#" style="text-decoration: none; color: #ff70b5; "> ปลอกคอสัตว์เลี้ยง</a>
        </div>
        <div class="necklace">
            <a href="#" style="text-decoration: none; color: #ff70b5; " > พวงกุญแจลูกปัด</a>
        </div>
    </div>
</div>
<body  background="ad_image/43.jpg" class="text-center">
<div class="container" style="display: flex; justify-content: center;" >
    <div class="col-md-8 col-lg-6 col-xl-5-col-xxl-4" style="text-align: center;" >
  <main class="form-signin w-100 m-auto">
    <form  action="edit_add_pro.php" method="GET">
      <img class="mb-4" src="ad_image/48.png" alt="" width="250" height="250">
        <h1 class="h3 mb-3 fw-normal"><font style="vertical-align: inherit;"><font style="text-align: center;">แก้ไขที่อยู่</font></font></h1>
      <div class="form-floating"  >
        <input type="text"  class="form-control border-success" name = "idc" id="floatinginput"  placeholder="ชื่อผู้รับ" readonly value="<?php echo $rw_data['idc'];?>">
        <label for="floating"><font "><font  required>รหัสบัตรประชาชน</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "namem" id="floatinginput"  placeholder="ชื่อผู้รับ" value="<?php echo $rw_data['namem'];?>">
        <label for="floating"><font "><font  required>ชื่อผู้รับ</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "lnamem" id="floatinginput" placeholder="ผู้รับนามสกุล" value="<?php echo $rw_data['lnamem'];?>">
        <label for="floating"><font "><font  required>ผู้รับนามสกุล</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "phone" id="floatinginput" placeholder="เบอร์โทรศัทพ์" value="<?php echo $rw_data['phone'];?>">
        <label for="floating"><font><font  required>เบอร์โทรศัทพ์</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "address" id="floatinginput" placeholder="ที่อยู่" value="<?php echo $rw_data['address'];?>">
        <label for="floating"><font><font  required>ที่อยู่</font></font></label><br>
      </div>
      <button class="btn-4">บันทึก</button>
</div>
</div>
</div>
      </form> 
      </main>
    </body>
    <?php
    }
    ?>
   <footer>
    <div class="footer_wrapper">
        <div class="footer_left" >
            <div class="footer_left" >
                <img src="us_image/8removebg.png" width="200px" height="200px" >
                    <div class="shopinfo_join_button">
                        <div class="shopinfo_join_label">
                                <i class="fa-solid fa-user-plus" style="color: #FF0099;"></i>
                                <a style="color: #FF0099;" >สมัครเป็นสมาชิกของทางร้าน</a>
                            <div style="margin-top: 8px; color: #c59bb6; font-size: 12px; " >
                                    <a>สมัครสมาชิกร้านนี้ เพื่อรับสิทธิพิเศษ</a>
                                </div>
                                <a style="font-size: 15px; color: #c59bb6; " >ลิขสิทธิ์ © 2023 Sweetheart Shop สงวนลิขสิทธิ์</a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="footer_right" style="padding-left: 40px; flex: 1;" >
                <div style="text-align: left; " >
                    <a href="home.php" style="text-decoration:none; color: #863cc3; margin-right: 20px;">หน้าแรก</a>
                    <a href="member.php" style="text-decoration:none; color: #863cc3; margin-right: 20px;">สมัครสมาชิก</a>
                    <a href="login.php" style="text-decoration:none; color: #863cc3; margin-right: 20px;">เข้าสู่ระบบ</a>
                    <a href="#" style="text-decoration:none; color: #863cc3; margin-right: 20px;">สร้อยข้อมือ</a>
                    <a href="#" style="text-decoration:none; color: #863cc3; margin-right: 20px;">สร้อยข้อเท้า</a>
                    <a href="#" style="text-decoration:none; color: #863cc3; margin-right: 20px;">สร้อยคอ</a>
                    <a href="#" style="text-decoration:none; color: #863cc3; margin-right: 20px;">แหวน</a>
                    <a href="#" style="text-decoration:none; color: #863cc3; margin-right: 20px;">ปลอกคอสัตว์เลี้ยง</a>
                    <a href="cart.php" style="text-decoration:none; color: #863cc3; margin-right: 20px;">ตะกร้าสินค้า</a>
                    <br><br><a style="font-size: 20px;" >ช่องทางการชำระเงิน</a>
                    <img src="us_image/bank.png" height="300px" width="900px" >
                    <br><br><a style="font-size: 20px;">การจัดส่ง</a>
                    <br><br><img src="us_image/e.png" height="100px" width="400px" >
                </div>
            </div>
        <div style="text-align: center; margin: 15px auto;"></div>
        <div>
            
        </div>
    </div>
</footer>
</html>