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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
<link rel="stylesheet" href="upload.css"/>

  <title>member</title>
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
    color:#ff1f78;
    background-size: auto;
  }
  

form {
  display: block;
  margin: auto;
  width: 500px;
  border-radius: 60px;
  background: #fba2d6;
  box-shadow:  23px 23px 44px #df90be,
             -23px -23px 44px #ffb4ee;
}
  </style>
</head>
<body  background="ad_image/4e1f918ca4aacb17c036c9cbd77c5a3b.jpg" class="text-center">
<nav class="navbar navbar-light navbar-expand-md py-3" style="background-color:#FF99CC;">
    <div class="container"><img style="width: 90px;height: 90px;" src="ad_image/50.png" /><a class="navbar-brand d-flex align-items-center"><span style="color:#fff">Sweetheart jewelry shop<br />
    </span></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-3" class="collapse navbar-collapse" >
            <ul class="navbar-nav mx-auto"></ul>
        </div>  
        <button class="btn-5" onclick="document.location='login.php'" >ล็อกอิน</button> 
        <button class="btn-5" onclick="document.location='member.php'">สมัครสมาชิก</button> 
        <button class="btn-5" onclick="document.location='home.php'">หน้าหลัก</button>
    </div>
</nav>
<main  >
<div class="container">
<div class="row">
  <div class="col">
    <form  action="re.php"method="POST">
      <img class="mb-4" src="us_image/48.png" alt="" width="250" height="250">
      <h1 class="h3 mb-3 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; color: #FFF; ">สมัครสมาชิก</font></font></h1>
      <div class="row">
        <div class="col">
          <input type="text" name = "namem" class="form-control border-success"  placeholder="ชื่อ" aria-label="First name"required>
        </div>
        <div class="col">
          <input type="text" name = "lnamem" class="form-control border-success" placeholder="นามสกุล" aria-label="Last name"required><br>
        </div>
      </div>
      <div class="form-floating">
        <input type="numder"  class="form-control border-success"  name = "idc" placeholder="รหัสบัตรประชาชน" maxlength="13" minlength="13" required>
        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">รหัสบัตรประชาชน</font></font></label><br>
      </div>
      <div class="row">
        <div class="col">
          <input type="text" name = "user" class="form-control border-success"  placeholder="ชื่อผู้ใช้" aria-label="First name"required>
        </div>
        <div class="col">
          <input type="password" name = "password" class="form-control border-success" placeholder="รหัสผ่าน" aria-label="Last name"required><br>
        </div>
</div>
      <div class="form-floating">
        <input   class="form-control border-success"name = "gmail" type="email" placeholder="อีเมล"required>
        <label for="floatingPassword"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;">อีเมล</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="text"  class="form-control border-success"  name = "phone" placeholder="เบอร์โทรศัพท์" maxlength="10" minlength="10" required>
        <label for="floatingPassword"><font style="vertical-align: inherit;"><font  style="vertical-align: inherit;">เบอร์โทรศัพท์</font></font></label><br>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label" >ที่อยู่</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "address"></textarea>
        </div>

              <button class="btn-4">สมัครสมาชิก</button>
  
      </div>

</div>
</div>
</main>
</body>
<?php include('footer.php') ?>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
</html>