<?php include 'connect.php'; 
session_start();

if (!isset($_SESSION["user"])) {

}
$id_or=$_GET['id_or'];

$sql1 = "SELECT * FROM order_tbl t, payment m WHERE t.id_or=m.id_or AND t.id_or = '$id_or' ";

$result1=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_array($result1);
$bill=$row1['pay_image'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    </head>
    <style>
        
    body{
    font-family: 'Mali', cursive ;
    color:#000;
    background-size: auto;
  }
    </style>
    <?php include ('ad_nav.php') ?>
<body>
            <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid px-4" style="width: 80pc;" >

                        <div class="card mb-4 mt-4">
                            <div class="card-header alert">
                                <i class="fas fa-table me-1"></i>
                                แสดงรายการสินค้า
                                <div><br>
                                <a href="re_order.php"><button type="button" class="btn btn-outline-success">กลับหน้าหลัก</button></a>
                                </div>
                            </div>
                        
                            <div class="card-body">
                                <h5>เลขที่ใบสั่งซื้อ : <?=$id_or?></h5>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>รหัสสินค้า</th>
                                            <th>ชื่อสินค้า</th>
                                            <th>ราคา</th>
                                            <th>จำนวน</th>
                                            <th>ราคารวม</th>
                                            
                                        </tr>
                                    </thead>
                                    
<?php
$sql = "SELECT * FROM order_tbl t, order_detail d, product p WHERE t.id_or=d.id_or 
and d.id_pro=p.id_pro and d.id_or='$id_or' ORDER BY d.id_pro ";
$result=mysqli_query($conn,$sql);
$sum_total=0;

while($row=mysqli_fetch_array($result)){
    $sum_total=$row['total_price'];

?>

                                        <tr>
                                            <td><?=$row['id_pro']?></td>
                                            <td><?=$row['name_pro']?></td>
                                            <td><?=$row['orderprice']?></td>
                                            <td><?=$row['orderqty']?></td>
                                            <td><?=$row['total']?></td>
                                        
                                    <?php
                                    }
                                    mysqli_close($conn);
                                    ?>
                                    </tbody>
                                </table>
                                <b>ราคารวมสุทธิ<?=number_format($sum_total,2)?>บาท</b>
                            </div>
                            <div>
                            <?php if($bill <> "") { ?>
                                        <h5>หลักฐานการชำระเงิน</h5><br>
                                        <img src="bill/<?=$row1['pay_image']?>" width="300px">
                                <?php } else{ ?>
                                    <h5  >ยังไม่ได้ชำระเงิน</h5>
                                
                                <?php } ?>
        
                                
                            </div>
                        </div>
                    </div>
                </main>
            
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
