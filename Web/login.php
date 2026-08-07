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
      background-color: #FF3399;
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
    background-size: auto;
    background-image: url(ad_image/4e1f918ca4aacb17c036c9cbd77c5a3b.jpg);
  }
  nav{
    background-color: #ffdbe6;
    width: 100%;
    height: 13vh;
    border-radius: 30px;
  }
  .textbox{
    border-radius: 102px;
    height: 6vh;
    background: #FF3399;
  }

form {
  display: block;
  margin: auto;
  width: 400px;
  border-radius: 60px;
  background: #fba2d6;
  box-shadow:  23px 23px 44px #df90be,
             -23px -23px 44px #ffb4ee;
}

  </style>
</head>
<body class="text-center">
<nav class="navbar navbar-light navbar-expand-md py-3">
    <div class="container"><img style="width: 90px;height: 90px;" src="us_image/50.png" /><a class="navbar-brand d-flex align-items-center"><span class="textbox" style="color:#fff">Sweetheart jewelry shop<br />
    </span></a><button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-3"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-3" class="collapse navbar-collapse" >
            <ul class="navbar-nav mx-auto"></ul>
        </div>  
        <button class="btn-5" onclick="document.location='login.php'" >เข้าสู่ระบบ</button> 
        <button class="btn-5" onclick="document.location='member.php'">สมัครสมาชิก</button> 
        <button class="btn-5" onclick="document.location='home.php'">หน้าหลัก</button>
    </div>
</nav>


  <div class="col"></div>
  <div class="col">
    
  <main class="form-signin w-100 m-auto">
    <form action="datalogin.php" method="POST" >
      <img class="mb-4" src="us_image/48.png" alt="" width="250" height="250">
      <h1 class="h3 mb-3 fw-normal"><font style="color :#FFF;">กรุณาเข้าสู่ระบบ</font></h1>

      <div class="form-floating" >
        <input class="form-control border-pink "  placeholder="Username" type="name"   name = "user" id="floatinginput"required>
        <label for="floating"><font><font >ชื่อสมาชิก</font></font></label><br>
      </div>
      <div class="form-floating">
        <input type="Password"  class="form-control border-success" name = "password" id="floatinginput" placeholder="รหัสผ่าน"required>
        <label for="floating"><font><font  >รหัสผ่าน</font></font></label><br>
        <p style="color: #FFF;"> คุณยังไม่ได้เป็นสมาชิกใช่หรือไม่? <a href="member.php">สมัครสมาชิก ที่นี่</a></p>
      </div>
      <button class="btn-4">login</button>
      </main>
      
</form>
</body>
<?php include('footer.php') ?>
</html>
