<?php 
include('connect.php');

if (!isset($_SESSION["user"])) {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="stylenav.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title> Admin Sweetheart jewelry shop</title>
<style>
    body{
    font-family: 'Mali', cursive ;

  }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
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
      .btn-5{
      padding: 10px 20px;
      font-size: 1.0rem;
      color: #fff;
      overflow: hidden;
      background-color: #ff008a;
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
   .btn-4{
      padding: 5px 30px;
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
button:hover {
  background-color: #f9fafb;
}

button:focus {
  outline: 2px solid rgba(0,0,0,0.1);
  outline-offset: 2px;
}

button:focus-visible {
  -webkit-box-shadow: none;
  box-shadow: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
.d-flex{
  width: 90pc;
}
nav{
  color: #ff008a;
}

</style>
</head>


      <div id="page-content-wrapper">
              <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                  <div class="d-flex align-items-center">
                  <img style="width: 80px;height: 80px;" src="ad_image/47.png"id="menu-toggle"></img>
                      <h2 class="fs-2 m-0"  >Sweetheart jewelry shop</h2>
                      <button class="btn-5" onclick="document.location='ad_member.php'">เพิ่มข้อมูลผู้ดูแลระบบ</button> 
                      <div class="collapse navbar-collapse">
                          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          <div class="dropdown">
                            <a  style="color: #ff70b5; text-decoration:none; font-size: 18px; ">
                              <?php echo $_SESSION['user'];?>
                              <div class="dropdown-content">
                                  <a href="ad_edit.php"><i class="fa-solid fa-user-pen" style="color: #000000;"></i>     แก้ไขข้อมูลส่วนตัว</a>
                                  <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #000000;"></i>      ออกจากระบบ</a>
                              </div>
                  </div>
                          </ul>
                      </div> 
                  </div>
              </nav>
          <div class="d-flex ">
                <div class="bg-white" id="sidebar-wrapper">
                  <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                  <img style="width: 50px;height: 50px;" src="ad_image/48.png" />Admin</div>
                  <div class="list-group list-group-flush my-3">
                      <a href="ad_user.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                          <i class="fa-solid fa-users-gear"></i>   ข้อมูลสมาชิก</a>
                      <a href="ad_type.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                          <i class="fa-regular fa-gem"></i>    ประเภทสินค้า</a>
                      <a href="ad_home.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                          <i class="fa-solid fa-tachograph-digital"></i>    จัดการสินค้า</a>
                      <a href="ad_bank.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                          <i class="fa-solid fa-building-columns"></i>    ข้อมูลธนาคาร</a>
                      <a href="re_order.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                          <i class="fa-brands fa-shopify"></i>   จัดการออเดอร์</a>
                      <a href="ad_porfile.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                          <i class="fa-solid fa-user-pen"></i>    แก้ไขข้อมูลส่วนตัว</a>
                      <a href="ad_logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">
                        <i class="fas fa-power-off me-2"></i>   ออกจากระบบ</a>
                  </div>
                </div>


</body>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
  

</html>