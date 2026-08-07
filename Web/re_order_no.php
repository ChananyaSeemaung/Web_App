<?php include 'connect.php';
session_start();
if (!isset($_SESSION["user"])) {}
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
    <body  background="ad_image/33.jpg" >

            <div id="layoutSidenav_content">
                <main>
                    
                    <div class="container-fluid px-4">

                        <div class="card mb-4 mt-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                แสดงการข้อมูลการสั่งซื้อสินค้า (ยกเลิกใบสั่งซื้อ)
                                <div><br>
                                <a href="re_order_yes.php"><button type="button" class="btn btn-success">ชำระเงินแล้ว</button></a>
                                <a href="re_order.php"><button type="button" class="btn btn-warning">ยังไม่ชำระเงิน</button></a>
                                <a href="re_order_no.php"><button type="button" class="btn btn-danger">ยกเลิกการสั่งซื้อ</button></a>
                                <a href="ad_ems_yes.php"><button type="button" class="btn btn-info">แจ้งเลขพัสดุแล้ว</button></a>
                                </div>
                            </div>
                        
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>เลขที่ใบสั่งซื้อ</th>
                                            <th>ชื่อลูกค้า</th>
                                            <th>นามสกุลลูกค้า</th>
                                            <th>ที่อยู่จัดส่งสินค้า</th>
                                            <th>ราคารวมสุทธิ</th>
                                            <th>วันที่สั่งซื้อ</th>
                                            <th>สถานะการสั่งซื้อ</th>
                                        </tr>
                                    </thead>
                                    <tfoot> <!-- เอาไว้ search หาข้อมูล เอาชื่อ fill ในตัวตารางมาใส่!-->
                                        <tr>
                                            <th>id_or</th>
                                            <th>namem</th>
                                            <th>lnamem</th>
                                            <th>address</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php
$sql = "SELECT * FROM order_tbl WHERE order_status='0' ORDER BY reg_date DESC";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){
$status = $row['order_status'];

?>
                                    
                                        <tr>
                                            <td><?=$row['id_or']?></td>
                                            <td><?=$row['namem']?></td>
                                            <td><?=$row['lnamem']?></td>
                                            <td><?=$row['address']?></td>
                                            <td><?=$row['total_price']?></td>
                                            <td><?=$row['reg_date']?></td>
                                            <td>
                                                <?php
                                                if($status == 1){
                                                    echo "ยังไม่ชำระเงิน";
                                                }elseif($status == 2){
                                                    echo "<b style='color:green'>ชำระเงิน </b>";
                                                }elseif($status == 0){
                                                    echo "<b style='color:red'>ยกเลิกการสั่งซื้อ </b>";
                                                }


                                                ?>

                                            </td>

                                                                        
                                        </tr>
                                    
                                    <?php
                                    }
                                    mysqli_close($conn);
                                    ?>
                                    </tbody>
                                </table>
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
