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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        <title>Document</title>
        <link rel="stylesheet" href="shop.css" />
    <style>
        body{
            margin: 0 ;
            padding: 0 ;
            box-sizing: border-box ;
            font-family: 'Mali', cursive ;
            background-color: #eeb4d9;
        }
        .container1{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .button1{
        font-size: 14px;
        font-weight: 700;
        align-items: center;
        justify-content: center;
        outline: none;
        cursor: pointer;
        width: 200px;
        height: 60px;
        color: white;
        background-color: rgb(151, 95, 255);
        box-shadow: 0px 10px 10px rgb(210, 187, 253) inset,
        0px 5px 10px rgba(5, 5, 5, 0.212),
        0px -10px 10px rgb(124, 54, 255) inset;
        border-radius: 30px;
        border: 0;
        }

        .button1:hover {
        
        animation: jello-horizontal 0.9s both;}
        @keyframes jello-horizontal {
        0% {
            transform: scale3d(1, 1, 1);
        }

        30% {
            transform: scale3d(1.25, 0.75, 1);
        }

        40% {
            transform: scale3d(0.75, 1.25, 1);
        }

        50% {
            transform: scale3d(1.15, 0.85, 1);
        }

        65% {
            transform: scale3d(0.95, 1.05, 1);
        }

        75% {
            transform: scale3d(1.05, 0.95, 1);
        }

        100% {
            transform: scale3d(1, 1, 1);
        }
        }
        .button1:active {
        box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #CC99FF, 0 -4px 4px #CECFD1, 0 -6px 4px #CC99FF, inset 0 0 5px 3px #CC66FF, inset 0 0 30px #CC66FF;
        }
        .button1:focus {
        box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #CC99FF, 0 -4px 4px #CECFD1, 0 -6px 4px #CC66FF, inset 0 0 5px 3px #CC99FF, inset 0 0 30px #CC99FF;
        }
    
        .copyright{
            margin-top: 15px;
            text-align: center;
            font-size: 13px;
            color: #ffff;
        }
        .fd{
            padding: 1.5pc;
            display: flex;
        }
        container-sm{
            margin: 10pc;
        }
        .mUfiZ {
        display: flex;
        flex-direction: row;
        position: absolute;
        min-height: 60px;
        border-bottom: 1px solid rgb(239, 239, 244);
        left: 0px;
        right: 0px;
        bottom: 0px;
        background-color: rgb(255, 255, 255);
        margin: 0px auto;
        width: 100%;
        position: relative;
        }
    .fUbaPc {
        display: flex;
        position: absolute;
        left: 400px;
        right: 70px;
    }
    .necklace{
        padding-left: 0;
        font-size: 14px;
        max-width: 30%;
        text-align: center;
        padding: 10px 15px;
    }
    .form-control{
        height: 40px;
        width: 500px;
    }
    .d-flex {
        position: absolute;
        left: 800px;
        align-items: center;
    }
    .btn-primary{
        background-color: #FF0099;
        border: 0;
    }
    .navbar__spacer{
        left: 100px;
    }
    .navbar__links{
    display: flex;
    align-items: center;
    list-style: none;
    padding: 0;
    margin: 0;
    height: 2.125rem;
    }
    .mem{
        cursor: pointer;
        padding: 0;
        user-select: none;
        position: relative;
        justify-content: center;
        display : flex;
        align-items: center;

    }
    .dffUbaPc {
        display: flex;
        position: absolute;
        left: 400px;
        right: 70px;
        justify-content: flex-end;
    }
    .cart-wrapper{
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1;
        padding-bottom: 5px;
        margin: 0 20px;
    }
    .catfon{
    margin-left: 1.9375rem;
    border-left: 0.0625rem solid #fff;
    }
    .vtrWey{
        height: 3px;
    width: 100%;
    background-position-x: -30px;
    background-size: 116px 3px;
    background-image: repeating-linear-gradient(45deg,#6fa6d6,#6fa6d6 33px,transparent 0,transparent 41px,#f18d9b 0,#f18d9b 74px,transparent 0,transparent 82px);
    }
    .add{
    display: flex;
    align-items: center;
    justify-content: space-between;
    }
    .address{
        display: flex;
    align-items: center;
    font-size: 1.125rem;
    color: #ff0088;
    margin-bottom: 20px;
    text-transform: capitalize;
    flex: 1 1 auto;
    }
    .useradd{
        display: flex;
    align-items: center;
    font-size: 1rem;
    word-break: break-word;
    }
    .dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #3e8e41;}
.xzxz {
    display: flex;
    flex-direction: row;
    position: absolute;
    min-height: 40px;
    border-bottom: 1px solid rgb(239, 239, 244);
    left: 0px;
    right: 0px;
    bottom: 0px;
    background-color: rgb(255, 255, 255);
    margin: 0px auto;
    width: 100%;
    position: relative;
    }
.textadd{
    display: flex;
    align-items: center;
    font-size: 1rem;
    word-break: break-word;
}
.ta{
    margin-left: 20px;
    word-break: break-word;
}
.edit{
    padding: 2px 5px;
    margin-left: 10em;
    color: #FF0099;
    border-radius: 1px;
    border: 0.5px solid;
    font-size: 12px;
    text-transform: capitalize;
    flex-shrink: 0;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 2;
  margin-top: 250px;

}
    </style>
</head>
<?php include('navber.php') ?>
<div class="container">
    <form id="form1" method="post" action="insert_cart.php" >
        <div style="background-color: #ffffff;" >
            <div class="vtrWey"></div>
            <div style="padding: 28px 30px 24px;">
                <div class="add">
                    <div class="address">
                        <div style="display: flex; margin-right: 9px;">
                            <i class="fa-solid fa-location-dot" style="color: #ff0088;"></i>
                        </div>
                        <h5>ที่อยู่การจัดส่ง</h5>
                    </div>
                </div>
                <?php
                include('connect.php');
                $idc = $_SESSION['idc'];
                $namem = $_SESSION['namem'];
                $lnamem = $_SESSION['lnamem'];
                $address = $_SESSION['address'];

                $data = "SELECT * FROM member_tbl WHERE idc LIKE '$idc'";
                $re_data = mysqli_query($conn, $data);

                if ($re_data) {
                    $rw_data = mysqli_fetch_array($re_data);
                ?>
<div>
    <div class="textadd">
        <?php echo $rw_data['namem'];?>  <?php echo $rw_data['lnamem'];?>
        <div class="ta">
            <?php echo $rw_data['address'];?>   <a > (66+)<?php echo $rw_data['phone'];?></a>
        </div>
        <div class="edit">
            <a href="edit_add.php?idc=<?=$rw_data['idc'];?>" style="text-decoration:none; color: #FF0099; " >แก้ไขที่อยู่การจัดส่ง</a>
        </div>
    </div>
</div>
<?php
}
?>

            </div>
        </div>
    </form>

    <form id="form2" method="get" action="insert_cart.php">
        <div class="card shadow">
            <div class="table-responsive table mt-2" role="grid" aria-describedby="dataTable_info">
                <table id="dataTable" class="table my-0">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อสินค้า</th>
                            <th>สินค้า</th>
                            <th>ราคาต่อชิ้น</th>
                            <th>จำนวน</th>
                            <th>เพิ่ม - ลด</th>
                            <th>ราคารวม</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sum = 0; // เพิ่มตัวแปรสำหรับเก็บราคารวมสินค้า
                        if(isset($_SESSION["intLine"]))  {
                            for ($i = 0; $i <= (int)$_SESSION["intLine"]; $i++) {
                                if (isset($_SESSION["strProductID"][$i]) && ($_SESSION["strProductID"][$i] != "")) {
                                    $sql1 = "SELECT * FROM product WHERE id_pro = '" . $_SESSION["strProductID"][$i] . "'";
                                    $result1 = mysqli_query($conn, $sql1);
                                    $row_pro = mysqli_fetch_array($result1);

                                    // คำนวณราคารวมสินค้า
                                    $totalPrice = $_SESSION["strQty"][$i] * $row_pro['price_pro'];
                                    $sum += $totalPrice;
                                    
                                    ?>
                                    <tr>
                                        <td><?= $i + 1 ?></td>
                                        <td><?= $row_pro['name_pro'] ?></td>
                                        <td><img src="img/<?php echo $row_pro['image'] ?>" width="100px" height="100px"></td>
                                        <td><?= $row_pro['price_pro'] ?></td>
                                        <td><?php echo $_SESSION["strQty"][$i] ?></td>
                                        <td> 
                                            <a href="order.php?id_pro=<?=$row_pro['id_pro']?>" class="btn btn-primary"><i class="fa-solid fa-plus" style="color: #fff;" ></i></a>
                                            <?php if($_SESSION["strQty"][$i] > 1 ){ ?>
                                                <a href="order_del.php?id_pro=<?=$row_pro['id_pro']?>" class="btn btn-primary"><i class="fa-solid fa-minus" style="color: #fff;" ></i></a>
                                            <?php } ?>
                                        </td>
                                        <td><?php echo $totalPrice ?></td>
                                        <td> <a href="pro_delete.php?Line=<?=$i?>"> <i class="fa-solid fa-circle-xmark fa-lg" style="color: #ff2986;"></i> </a> </td>
                                    </tr>
                                    <?php
                                }
                            }
                        }
                        ?>
                        <tr>
                            <td></td>
                            <td colspan="5" align="right">ราคารวม</td>
                            <td align="right"><?php echo  number_format(@$sum); //ราคารวม ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="5" align="right">ภาษีมูลค่าเพิ่ม 7 %</td>
                            <td align="right"><?php echo  number_format(@$sum * 0.07); //ภาษีมูลค่าเพิ่ม 7 % ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="5" align="right">ค่าขนส่ง</td>
                            <td align="right">45</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="5" align="right">ราคารวมทั้งสิ้น</td>
                            <td align="right"  >
                                <?php  
                                $nettotal = $sum + ($sum * 0.07) + 45 ;   //ราคารวม+ภาษี+ค่าขนส่ง
                                        echo  number_format($nettotal);

                                        $_SESSION["sum_price"] = $nettotal ;
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="insert_cart.php?idc=<?=$rw_data['idc']?>" role="button">สั่งซื้อสินค้า</a>
                <a class="btn btn-primary" href="home_login.php" role="button">เลือกสินค้าเพิ่ม</a>
            </div>
        </div>
    </form>
</div>

    </div>
</body>
<?php include('footer.php') ?>
</html>