<?php 
include('connect.php');
session_start(); 
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheeet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<style>
  body{
            margin: 0 ;
            padding: 0 ;
            box-sizing: border-box ;
            font-family: 'Mali', cursive ;
            background-color: #eeb4d9;
        }
          .card1 {
  width: 190px;
  height: 300px;
  background: rgb(236, 236, 236);
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
}
.card3{
  flex: 1 0 auto;
  display: flex;
  flex-direction: column;
  padding: 0.5rem;
  overflow: hidden;
  text-align: left;
}
.name_pro{
  flex-grow: 1;
  min-height: 5rem;
  line-height: 18px;
  font-size: 14px;
  word-wrap: break-word;
    white-space: normal;
    overflow: hidden;
    display: -webkit-box;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
}
.pricenum{
  max-width: 100%;
  padding: 0.5rem 0 0;
  display: flex;
  height: 1.25rem;
  align-items: center;
  overflow: hidden;
}
.price_pro{
  display: inline;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
  flex: 1 0 auto;
  max-width: 75%;
  color: #FF1493;
}
.num_pro{
  color: rgba(0,0,0,.54);
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  font-size: .75rem;
    line-height: .875rem;
}
          .link254{
          width: 16.66667%;
          padding: 0.3125rem;
          box-sizing: border-box;
          cursor: pointer
        }
        .mUfiZ {
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
        .fUbaPc {
        display: flex;
        position: absolute;
        left: 400px;
        right: 70px;
    }
    .form-control{
        height: 40px;
        width: 500px;
    }
    .d-flex {
        position: absolute;
        left: 500px;
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
    .necklace{
        padding-left: 0;
        font-size: 14px;
        max-width: 30%;
        text-align: center;
        padding: 10px 15px;
    }
    .vf{
    text-decoration: none;
    color: rgba(0,0,0,.87);
    position: relative;
    overflow: visible;
    outline: 0;
    white-space: nowrap;
    display: block;
    color: rgba(0,0,0,.54);
    margin-left: 98px;
    color: hsla(0,0%,100%,.9);
    height: 0.875rem;
    line-height: 1.875rem;
    margin-top: 0rem;
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
    <?php include('navber.php') ?>
<body>


<div class="container">
  <br><br>
  <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
  <br><br>

    <?php
    include("connect.php"); // ต้องแน่ใจว่าไฟล์ connect.php ถูกต้อง
    $type_id = $_GET['type_id'];
    
    // ใช้เงื่อนไขแสดงรายการสินค้าตามประเภทที่ระบุ
    if (isset($_GET['type_id'])) {
        $sql = "SELECT * FROM product p, product_type t WHERE p.type_id = t.type_id AND p.type_id = '$type_id' ORDER BY p.id_pro";
    } else {
        $sql = "SELECT * FROM product p, product_type t WHERE p.type_id = t.type_id ORDER BY p.id_pro";
    }

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
    ?>
    <div class="link254">
        <a data-sql="link" href="show_details.php?id_pro=<?php echo $row["id_pro"];?>">
            <div class="card1">
                <div class="card-body p-3">
                    <img src="img/<?= $row['image'] ?>" width="150px" height="150px">
                    <div class="card3">
                        <div class="name_pro">
                            <a><?= $row['name_pro'] ?></a>
                        </div>
                        <div class="pricenum">
                            <div class="price_pro">
                                <a>฿ <?= $row['price_pro'] ?></a>
                            </div>
                            <div class="num_pro" align='right'>
                                <a>เหลืออีก <?= $row['num_pro'] ?> ชิ้น</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <?php
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    $conn->close();
    ?>
</div>

</div>
</div>

</body>
<?php include('footer.php') ?>
  </html>
