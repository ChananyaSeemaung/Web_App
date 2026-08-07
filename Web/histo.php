<?php 
    //print_r($_SESSION);
    include('connect.php');
    session_start();
    if (!isset($_SESSION["user"])) {
        header("location:histo.php");
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
    } else {
        echo "Error in query: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    ?>

้<!DOCTYPE html>
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
    <title>Document</title>
<style>
    body {
            font-family: 'Mali', cursive;
        }
        .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 250px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 2;
        margin-top: 10px;

        }
        </style>
</head>
<?php include ('navber.php') ?>
<body>
    <div class="container">
<?php  
include('connect.php');
$idc = $_SESSION["idc"];
$queryorder= "SELECT * FROM order_tbl WHERE idc='$idc'";
$rsorder	= mysqli_query($conn, $queryorder);
//echo $queryorder;
?>
<div class="alert alert-warning" role="alert">
  <h3>ประวัติการสั่งซื้อ</h3>
</div>
<table width="1100"  align="center" id="example1" class="table table-bordered table-striped">
<thead>
<tr bgcolor="#F9D5E3">
    <th width="5%">#</th>
    <th width="5%">สถานะ</th>
    <th width="10%">วันที่สั่งซื้อ</th>
    <th width="10%">ราคา</th>
    <th width="10%">เลขพัสดุ</th>
</tr>
</thead>
<tbody>
    <?php foreach($rsorder as $row){ ?>
    <tr>
        <td><?php echo $row['id_or'];?></td>
        <td><?php  $row['order_status'];
            $st = $row['order_status'];
            if ($st == 1) {
                echo "<a class='btn btn-primary' href='payment.php?id_or={$row['id_or']}'>ชำระเงิน</a>";
            } elseif ($st == 2) {
                echo "<div class='text-success'>";
                echo "ชำระเงินแล้ว";
                echo "</div>";
            } elseif ($st == 3) {
                echo "ได้รับเลข EMSแล้ว";
            }
        ?></td>
        <td><?php echo $row['reg_date'];?></td>
        <td align="right"><?php echo number_format($row['total_price'], 2);?></td>
        <!-- เพิ่มส่วนที่แสดงรูปภาพหลักฐานการชำระเงิน -->
        <td><?php
        if(isset($row['ems'])){
         echo $row['ems'];
        }
    }
    
         ?>

</tr>
</tbody>


</table>
</div>
</body>
<?php include ('footer.php') ?>
</html>