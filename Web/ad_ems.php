<?php include 'connect.php';
session_start();
if (!isset($_SESSION["user"])) {}
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
<link rel="stylesheet" href="upload.css"/>
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

  .bg{
  backdrop-filter: blur(16px) saturate(180%);
  -webkit-backdrop-filter: blur(16px) saturate(180%);
  background-color: rgba(216, 90, 176, 0.25);
  border-radius: 12px;
  border: 1px solid rgba(255, 255, 255, 0.125);  
  padding: 38px;  
  filter: drop-shadow(0 30px 10px rgba(0,0,0,0.125));
  width: 40rem;
  height: 70rem;
  display: block;   
   margin-right: auto;  
   margin-left: auto; 
}
  </style>
</head>
<?php include ('ad_nav.php') ?>
<body  background="ad_image/33.jpg"  class="text-center">
<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5-col-xxl-4">
  <main class="form-signin w-100 m-auto">
  <?php
include('connect.php');

if (isset($_GET['id_or'])) {
    $id_or = $_GET['id_or'];

    $stmt = mysqli_prepare($conn, "SELECT * FROM order_tbl WHERE id_or = ?");
    mysqli_stmt_bind_param($stmt, "i", $id_or);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        // ตรวจสอบว่ามีข้อมูล order ที่ตรงกับ id_or หรือไม่
        $rw_data = $row;
    } else {
        // ไม่พบข้อมูล order ที่ตรงกับ id_or ในฐานข้อมูล
        die("ไม่พบข้อมูลออเดอร์ที่คุณระบุ");
    }

    mysqli_stmt_close($stmt);
} else {
    // ถ้าไม่มีค่า "id_or" ที่ถูกส่งมาให้ทำการจัดการข้อผิดพลาดที่นี่
    die("กรุณาระบุค่า 'id_or' ใน URL");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // แสดงแบบฟอร์มให้ผู้ใช้กรอกเลขพัสดุ
    ?>
    <form action="ad_ems_pro.php" method="GET">
      <img class="mb-4" src="ad_image/48.png" alt="" width="250" height="250">
        <h1 class="h3 mb-3 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">แจ้งเลขพัสดุออเดอร์</font></font></h1>
        <label>เลขที่ใบสั่งซื้อ</label>
        <input type="text" id="id_or" name="id_or" value="<?= $id_or ?>" required>
        <div class="form-floating">
        <input type="text"  class="form-control border-success" name = "ems" id="floatinginput" >
        <label for="floating"><font "><font  required>เลขพัสดุ</font></font></label><br>
      </div>
      <button type="submit" class="btn-4"  >บันทึก</button>
</div>
</div>

      </form> 
      </main>
      <?php
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // กระบวนการบันทึกข้อมูล 'ems' และอัปเดตในฐานข้อมูล
    if (isset($_POST['ems'])) {
        $ems = $_POST['ems'];

        // ทำการอัปเดตข้อมูลในฐานข้อมูล
        $sql = "UPDATE order_tbl SET order_status = ?, ems = ? WHERE id_or = ?";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            $order_status = 3;
            mysqli_stmt_bind_param($stmt, "isi", $order_status, $ems, $id_or);
            mysqli_stmt_execute($stmt);

            if (mysqli_stmt_affected_rows($stmt) > 0) {
                echo "อัปเดตข้อมูลสำเร็จ";
            } else {
                echo "ไม่สามารถอัปเดตข้อมูลได้";
            }

            mysqli_stmt_close($stmt);
        } else {
            echo "เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL";
        }
    } else {
        echo "กรุณากรอกเลขพัสดุ";
    }
}
?>
    </div>
  </div>
  <div class="col"></div>
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>
</html>