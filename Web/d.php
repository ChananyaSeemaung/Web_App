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

$data = "SELECT * FROM member_tbl WHERE idc LIKE '$idc'";
$re_data = mysqli_query($conn, $data);

if ($re_data) {
    $rw_data = mysqli_fetch_array($re_data);
    
    /*echo '<pre>';
    print_r($rw_data);
    echo '</pre>';*/
//} else {
    //echo "Error in query: " . mysqli_error($conn);


}
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
    <title>Document</title>
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
   nav{
            background-color: #fdd74e;
            width: 100%;
            height: 13vh;
        }
  body{
    font-family: 'Mali', cursive ;
    color:#ec407a;
    background-size: auto;
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
  z-index: 1;
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
    .cart-wrapper{
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1;
        padding-bottom: 5px;
        margin: 0 20px;
    }
    .card {
      width: 540px;
      height: 100%;
 margin-left: 600px;
  --bg: #ffb3e7;
  --contrast: #e2e0e0;
  --grey: #93a1a1;
  position: relative;
  padding: 9px;
  background-color: var(--bg);
  border-radius: 35px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
}

.card-overlay {
  position: absolute;
  inset: 0;
  pointer-events: none;
  background: repeating-conic-gradient(var(--bg) 0.0000001%, var(--grey) 0.000104%) 60% 60%/600% 600%;
  filter: opacity(10%) contrast(105%);
}

.card-inner {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  width: 190px;
  height: 254px;
  background-color: var(--contrast);
  border-radius: 30px;
  /* Content style */
  font-size: 30px;
  font-weight: 900;
  color: #c7c4c4;
  text-align: center;
  font-family: monospace;
}
  </style>
</head>
<?php include ('navber.php') ?>
<?
include('connect.php');
$act = (isset($_GET['act']) ? $_GET['act'] : '');
if($act=='edit'){


?>
<body  background="ad_image/43.jpg" class="text-center">
  <div class="card">
  <form action="edit_pro.php" method="GET">
  <img src="us_image/42.jpg" style="border-radius: 50%; width: 200px; height: 200px; ">
    <h1 class="h3 mb-3 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">แก้ไขข้อมูลส่วนตัว<?php echo $rw_data['user'];?></font></font></h1>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "idc" id="floatinginput"  value="<?php echo $rw_data['idc'];?>">
        <label for="floating"><font "><font  required>รหัสบัตรประชาชน</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "namem" id="floatinginput"  placeholder="ชื่อสินค้า" value="<?php echo $rw_data['namem'];?>">
        <label for="floating"><font "><font  required>ชื่อจริง</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "lnamem" id="floatinginput" placeholder="ราคาสินค้า" value="<?php echo $rw_data['lnamem'];?>">
        <label for="floating"><font "><font  required>นามสกุล</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "user" id="floatinginput" placeholder="จำนวนสินค้า" value="<?php echo $rw_data['user'];?>">
        <label for="floating"><font><font  required>ชื่อผู้ใช้</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "password" id="floatinginput" placeholder="จำนวนสินค้า" value="<?php echo $rw_data['password'];?>">
        <label for="floating"><font><font  required>รหัสผ่าน</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "phone" id="floatinginput" placeholder="จำนวนสินค้า" value="<?php echo $rw_data['phone'];?>">
        <label for="floating"><font><font  required>เบอร์โทรศัพท์</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "gmail" id="floatinginput" placeholder="จำนวนสินค้า" value="<?php echo $rw_data['gmail'];?>">
        <label for="floating"><font><font  required>อีเมล</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "address" id="floatinginput" placeholder="ที่อยู่" value="<?php echo $rw_data['address'];?>">
        <label for="floating"><font><font  required>ที่อยู่</font></font></label><br>
      </div>
      <button class="btn-4" >บันทึก</button>
      <?
}
?>
</div>

      </form> 
</body>
    <?php include ('footer.php') ?>
</html>
