<?php
include('connect.php');
    session_start();
    if(!isset($_SESSION["user"])){
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="stylenav.css" />
    <title> Admin Sweetheart jewelry shop</title>


    <style>
      table{
        display: block;
      }
      td{
        width: 11em;
      }
    body{
    font-family: 'Mali', cursive ;
    color:#FF99CC;

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

a{
  background-color: #FFFFFF;
  border: 1px solid rgb(209,213,219);
  border-radius: .5rem;
  color: #111827;
  font-family: ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: .875rem;
  font-weight: 600;
  line-height: 1.25rem;
  padding: .75rem 1rem;
  text-align: center;
  -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  cursor: pointer;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-user-select: none;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
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

.form-group {
  text-align: center;
}


</style>
</head>
<body  background="ad_image/33.jpg" > 
  <?php include ('ad_nav.php') ?>
                <main>
<div class="table-responsive-xxl">
    <button class="btn-5" onclick="document.location='ad_add_bank.php'">เพิ่มข้อมูลธนาคาร</button>
<center><div class="card shadow">
    <div class="card-header py-3" style="color: rgb(255,8,122);">
        <p  style="color:#ff007b;">จัดการข้อมูลธนาคาร</p>
    </div>
    <div class="card-body" style="color: var(--bs-gray-900);background: #ffffff;">
        <div id="dataTable" class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
            <table id="dataTable" class="table my-0">
                <thead style="color: #000000;">
                    <tr style="color: #000000;">
                        <th style="color: #ff008a;">ชื่อธนาคาร</th>
                        <th style="color: #ff008a;">เลขที่บัญชี</th>
                        <th style="color: #ff008a;">เจ้าของบัญชี</th>
                        <th style="color: #ff008a;">โลโก้ธนาคาร</th>
                    </tr>
                </thead>
                <tbody style="color: #000000;">
                    <tr style="color: #000000;"></tr>
                    <tr style="color: #000000;">
                    <?php

                    include("connect.php");
                    $sql = "SELECT * FROM bank ORDER BY b_number";
                    $result = $conn -> query($sql);
                    $n=1;
                    while($data = $result->fetch_assoc()) {
                    ?>
                        <td style="color: #000000;"><?php echo $data['b_name'];?></td>
                        <td style="color: #000000;"><?php echo $data['b_number'];?></td>
                        <td style="color: #000000;"><?php echo $data['b_owner'];?></td>
                        <td><img src = "b_img/<?php echo $data['b_img'];?>"width="100px" height="100px"></td>
                        <td><a href="ad_dal_bank.php?b_number=<?php echo $data["b_number"];?>" class="btn btn-danger" onclick="return confirm('จะลบเค้าหย๋อออ?')">ลบ</a>
                        <a href="ad_edit_bank.php?b_number=<?php echo $data["b_number"];?>" class="btn btn-warning">แก้ไข</a></td>
                    </tr>
                    <tr style="color: #000000;"></tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>
  </body>
</html>
