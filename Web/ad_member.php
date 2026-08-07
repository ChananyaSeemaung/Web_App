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
      width: 500px;
      height: 500px;
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
    color:#FF99CC;
    background-size: auto;
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
<body  background="ad_image/33.jpg"  class="text-center">
<nav class="navbar navbar-light navbar-expand-md py-3" style="background-color:#FF99CC;">
    <div class="container"><img style="width: 90px;height: 90px;" src="ad_image/50.png" /><a class="navbar-brand d-flex align-items-center"><span style="color:#fff">Sweetheart jewelry shop<br />
    </span></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-3" class="collapse navbar-collapse" >
            <ul class="navbar-nav mx-auto"></ul>
        </div>  
        <button class="btn-5" onclick="document.location='ad_logout.php'" >ออกจากระบบ</button> 
        <button class="btn-5" onclick="document.location='ad_member.php'">เพิ่มข้อมูลผู้ดูแลระบบ</button> 
        <button class="btn-5" onclick="document.location='ad_index.php'">หน้าหลัก</button>
    </div>
</nav>
<div class="row">
<div class="card">
  <div class="col">
  <main class="form-signin w-100 m-auto">
    <form  action="ad_re.php"method="POST">
    <img src="ad_image/60.png" style="border-radius: 50%; width: 200px; height: 200px; ">
      <h1 class="h3 mb-3 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; color: #fff; ">เพิ่มข้อมูลผู้ดูแลระบบ</font></font></h1>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "namem" placeholder="ชื่อผู้ดูแลระบบ"required>
        <label ><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;">ชื่อผู้ดูแลระบบ</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "lnamem" placeholder="นามสกุลผู้ดูแลระบบ"required>
        <label ><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;">นามสกุลผู้ดูแลระบบ</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="numder"  class="form-control border-success"  name = "user" placeholder="Usernameผู้ดูแลระบบ"required>
        <label "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Usernameผู้ดูแลระบบ</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "password" placeholder="passwordผู้ดูแลระบบ"required>
        <label for="floatingPassword"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;">passwordผู้ดูแลระบบ</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success" id="floatingPassword" name = "idc" placeholder="รหัสบัตรประชาชนผู้ดูแลระบบ"required>
        <label for="floatingPassword"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;">รหัสบัตรประชาชนผู้ดูแลระบบ</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="password"  class="form-control border-success" id="floatingPassword"  name = "phone" placeholder="เบอร์โทรผู้ดูแลระบบ"required>
        <label for="floatingPassword"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;">เบอร์โทรผู้ดูแลระบบ</font></font></label><br>
      </div>
      <button type="submit" name="submit"class="btn-4" onclick="document.location='ad_re.php'">บันทึกข้อมูล</button>
      </main>
      </div>
</div>
</div>
</body>
</html>