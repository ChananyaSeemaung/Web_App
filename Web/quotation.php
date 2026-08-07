
<?php 
session_start();
include('connect.php');

/*echo '<pre>';
print_r($_SESSION['idc']);
echo '</pre>';*/


$sql = "SELECT * FROM order_tbl WHERE id_or='". $_SESSION["order_id"] ."'";
$result = mysqli_query($conn, $sql);
$rs = mysqli_fetch_array($result);
$total = $rs['total_price'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Document</title>

    <style>
        .btn-primary{
            background-color: #FF0099;
            border: 0;
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
    <?php include ('navber.php') ?>
</head>
<body>
<div class="card">
  <div class="card-header" style="text-align: center;" >
    <h5>ใบแจ้งการชำระเงิน/ใบเสร็จ</h5>
  </div>
  <div class="card-body">
    <div class="container px-4">
        <div class="row gx-5">
            <div  div class="col">
                <div class="p-3 border bg-light">
                    <div style="display: flex;  ">
                        <img src="us_image/8removebg.png" width="200px" height="100px" >
                    <div style="margin-top: 50px;" >
                        <h6 style="text-align: center;" >ที่อยู่</h6>
                        <a>บ้านเลขที่ 8 หมู่13 ต.โคกตูม </a>
                        <br><a>จ.ลพบุรี 15210 </a>
                        <br><a>โทร 082-345-6789 </a>
                        </div>
                    </div>
                    <div>
            
                        <h6>ลูกค้า</h6>
                        <a >คุณ  <?=$rs['namem'] ?>   <?=$rs['lnamem'] ?></a>
                        <br><a ><?=$rs['address'] ?></a>
                    </div>
                </div>
                    </div>
                    <div class="col">
                 <div class="p-3 border bg-light"> <a>เลขที่: <?=$rs['id_or'] ?></a>
                 <br><a>วันที่/เวลา: <?=$rs['reg_date']?></a>
                 <br><a>ผู้ขาย:  Sweetheart</a>
                 
                </div>
            </div>
        </div>
    </div>
    <form id="form2">
        <div class="card shadow">
            <div class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                <table id="dataTable" class="table my-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>รายระเอียด</th>
                            <th>จำนวน</th>
                            <th>ราคาต่อชิ้น</th>
                            <th>มูลค่า</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php

                            include('connect.php');
                            $sql1 = "SELECT * FROM order_detail d, product p WHERE d.id_pro = p.id_pro AND d.id_or = '" . $_SESSION["order_id"] . "'";
                            $result1 = mysqli_query($conn, $sql1);
                            $n = 1; 
                            $totalPrice = 0;

                            while ($rs = mysqli_fetch_array($result1)) {
                                if (!is_null($rs)) { 
                                ?>
                                    <tr>
                                        <td><?php echo $n++; ?></td>
                                        <td><?php echo $rs['name_pro']; ?></td>
                                        <td><?php echo $rs['orderqty']; ?></td>
                                        <td><?php echo $rs['orderprice']; ?></td>
                                        <td><?php echo $rs['total']; ?></td>
                                    </tr>
                                    <?php
                                    $totalPrice += $rs['total']; 
                                }
                            }
                            ?>

                            <tr>
                                <td></td>
                                <td colspan="3" align="left" style="background-color: #ffd6ea;">ราคารวม</td>
                                <td align="left"  style="background-color: #ffd6ea;">
                                    <?php
                                    // Calculate and display the total price
                                    $totalPrice = 0;
                                    mysqli_data_seek($result1, 0); // Reset result set pointer
                                    while ($rs = mysqli_fetch_array($result1)) {
                                        $totalPrice += $rs['total'];
                                    }
                                    echo number_format($totalPrice);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3" align="left" style="background-color: #ffd6ea;">ภาษีมูลค่าเพิ่ม 7%</td>
                                <td align="left" style="background-color: #ffd6ea;">
                                    <?php
                                    $tax = $totalPrice * 0.07; // Calculate and display the tax amount
                                    echo  number_format($tax);
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3" align="left" style="background-color: #ffd6ea;">ค่าขนส่ง</td>
                                <td align="left" style="background-color: #ffd6ea;">45</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3" align="left"  style="background-color: #ffd6ea;">ราคารวมทั้งสิ้น</td>
                                <td align="left" style="background-color: #ffd6ea;">
                                    <?php
                                    $nettotal = $totalPrice + $tax + 45; // Calculate and display the net total
                                    echo  number_format($nettotal);
                                    ?>
                                </td>
                            </tr>
                            </tbody>
                            </table>
                            <!--แสดงข้อมูลใบเสร็จ-->

                    <div class="container overflow-hidden">
                        <div class="row gx-5">
                            <div class="col">
                                <div class="p-3 border bg-light">
                                    <h4>ช่องทางการชำระเงิน</h4>
                                    <div style="display: flex;  ">
                                    <?php 
                                    $sql2 = "SELECT * FROM bank WHERE b_number ";
                                    $result2 = $conn -> query($sql2);
                                    while($data = $result2->fetch_assoc()) {
                                    ?>
                                        <img src="b_img/<?php echo $data["b_img"];?>" width="200px" height="200px" >
                                    <div style="margin-left: 5px;" >
                                        <br><a>ธนาคาร: <?php echo $data["b_name"];?></a>
                                        <br><a>ชื่อบัญชี: <?php echo $data["b_owner"];?></a>
                                        <br><a>เลขบัญชี: <?php echo $data["b_number"];?></a>
                                        <?php } ?>
                                    </div>
                                    </div>
                                    <a style="color: #c4176b;" > ***กรุณาโอนเงินภายใน 7 วันหลังการสั่งซื้อ </a>
                                </div>
                            </div>
                        <div class="col">
                        <?php
            include ("connect.php");
            $idc=$_SESSION['idc'];
            $sql4 = "SELECT * FROM member_tbl WHERE idc like '$idc' ORDER BY idc";
            $re_data=mysqli_query($conn, $sql4);
            $rw_data=mysqli_fetch_array($re_data);
        ?>
                    <div class="p-3 border bg-light" align="right" >
                        <a class="btn btn-primary" href="home_login.php" role="button">กลับไปหน้าหลัก</a>
                        <a class="btn btn-primary" href="histo.php?idc=<?=$rw_data['idc'];?>" role="button">แจ้งหลักฐานการชำระเงิน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
</form>
</body>
<?php include ('footer.php') ?>
</html>