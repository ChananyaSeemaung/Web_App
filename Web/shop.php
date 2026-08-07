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
<link rel="stylesheet" href="shop.css" />
  <title>shop</title>
  <style>
      nav{
    border-radius: 30px;
    background-color:#fdd74e;
    width: 100%;
    height: 18vh;
  }
  
    </style>
</head>
<body class="text-center" style="background-color: #fdd8ec;" >
<nav class="navbar navbar-light navbar-expand-md py-3">
    <div class="container">
    <img style="width: 4cm;height: 4cm;" src="us_image/8removebg.png"></img>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navcol-2"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div id="navcol-2" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link " href="member.php" style="color: #ffffff;">
                    <i class="fa-solid fa-user-plus"></i>   สมัครสมาชิก</a></li>
                <li class="nav-item"><a class="nav-link " href="login.php" style="color: #ffffff;">
                    <i class="fa-solid fa-user"></i>   เข้าสู่ระบบ</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="container">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="us_image/new.png" alt="Los Angeles" class="d-block" style="width:100%"></div>
        <div class="carousel-item">
            <img src="us_image/new1.png" alt="Chicago" class="d-block" style="width:100%"></div>
        <div class="carousel-item">
          <img src="us_image/new2.png" alt="New York" class="d-block" style="width:100%"></div>
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span></button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span></button>
    </div>
    <br>
    <div class="textbox" style="background-color: #ff61b5;" >
      <div class="container-sm" >
      <div class="col-md-8 col-xl-6 text-center mx-auto">
              <h5 class="w-lg-50" style="color: #fff;" ><br>หมวดหมู่สินค้า</h5>
          </div>
        <div class="row gy-4 row-cols-6 row-cols-md-7 row-cols-xl-7">
          <div class="col ">
              <div class="d-flex-content"><a href="login.php"><img src="us_image/5.jpg" width="60%"height="60%" style="border-radius: 30%;"></a>
                <p><br>สร้อยข้อมือ</p>
            </div>
          </div>
        <div class="col">
                <div class="d-flex-content"><img src="us_image/10.jpg" width="60%"height="60%" style="border-radius: 30%;">
                <p><br>สร้อยคอ</p>
                </div>
            </div>
        <div class="col">
                <div class="d-flex-content"><img src="us_image/7ฃ.jpg" width="60%"height="60%" style="border-radius: 30%;">
                <p><br>สร้อยข้อเท้า</p>
                </div>
            </div>
        <div class="col">
                <div class="d-flex-content"><img src="us_image/6.jpg" width="60%"height="60%" style="border-radius: 30%;">
                <p><br>แหวน</p>
                </div>
            </div>
        <div class="col">
                <div class="d-flex-content"><img src="us_image/13.jpg" width="60%"height="60%" style="border-radius: 30%;">
                <p><br>พวงกุญแจ</p>
            </div>
        </div>
        <div class="col">
                <div class="d-flex-content"><img src="us_image/14.jpg" width="60%"height="60%" style="border-radius: 30%;">
                <p><br>ปลอกคอสัตว์เลี้ยง</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="container">
  <br><br>
  <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
    <?php
    include("connect.php");
    $sql = "SELECT * FROM product ORDER BY id_pro";
    $result = $conn -> query($sql);
    while($data = $result->fetch_assoc()) {
    ?>
    <br><br>
    <div class="link254">
      <a data-sql="link" href="details.php?id_pro=<?php echo $data["id_pro"];?>" >
      <div class="card1">
        <div class="card-body p-3" >
        <img src="img/<?=$data['image']?>"width="150px"height="150px">
          <div class="card3">
            <div class="name_pro" >
              <a ><?=$data['name_pro']?></a></div>
                <div class="pricenum">
                  <div class="price_pro" >
                  <a>฿ <?=$data['price_pro']?></a></div>
                  <div class="num_pro" align = 'right'>
                <a>   เหลืออีก <?=$data['num_pro']?> ชิ้น</a></div>
            </div> 
          </div>
        </div>
      </div>
    </a>
  </div>
    <?php
    }
    mysqli_close($conn)
    ?>
        <br>
    <br>
</div>
</div>
</main>
</body>
<footer>
  <div class="social">
    <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
    <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
  </div>
  <p class="copyright" >Sweetheart jewelry shop @ 2023</p>
</footer>
</html>