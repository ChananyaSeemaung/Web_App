

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

/* Dropdown Content (Hidden by Default) */


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
        margin-bottom: 50px;
        background-color: rgb(255, 255, 255);
        width: 100%;
        position: relative;
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
    height: 5.125rem;
    }
    .dffUbaPc {
        display: flex;
        position: absolute;
        right: 70px;
        justify-content: flex-end;
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
        nav{
            font-family: 'Mali', cursive ;
        }
    </style>
</head>
<nav style="height: 96px; width:1550px; " >
    <div style="width: 1550px; height: 96px;  position: absolute; background: white">
        <div style="width: 150px; height: 150px; left: 0px; top: 8px; position: absolute">
            <img src="us_image/8removebg.png"  style="width: 200px; height: 100px; left: 64.65px; top: -9px; position: absolute;">
        </div>
        <div style="left: 379px; top: 39px; position: absolute; justify-content: flex-start; align-items: center; gap: 68px; display: inline-flex">
            <div style="color: #2D2E2E; font-size: 16px; font-family: Inter; font-weight: 400; word-wrap: break-word">
            <a href="home_login.php" ><i class="fa-solid fa-house-chimney fa-2xl" style="color: #f9159a;"></i></a>
        </div>
            <div style="color: #2D2E2E; font-size: 16px; font-family: Inter; font-weight: 400; word-wrap: break-word">
             <a href="cart.php"><i class="fa-solid fa-basket-shopping fa-2xl" style="color: #f9159a;"></i></a>
        </div>
        </div>
        <div class="dffUbaPc"  >
                <div class="dropdown">
                <ul class="navbar__links">
                    <li class="mem">
                    
                        <a  style="color: #ff70b5; text-decoration:none; font-size: 18px; ">
                        <?php echo $_SESSION['user'];?></a>
                        <div class="dropdown-content">
                            <a href="d.php"><i class="fa-solid fa-user-pen" style="color: #000000;"></i>     แก้ไขข้อมูลส่วนตัว</a>
                            <a href="histo.php" ><i class="fa-solid fa-clock-rotate-left"></i>      ประวัติการสั่งซื้อ</a>
                            <a href="payment.php" ><i class="fa-solid fa-receipt"></i>      แจ้งหลักฐานการชำระเงิน</a>
                            <a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #000000;"></i>      ออกจากระบบ</a>
                        </div>
            </ul>                  
</div> 
</div>
</div>
</nav>
<body>
<div class="xzxz">
    <div class="necklace">
        <div class="fUbaPc">
            <?php
            include("connect.php");

            $sql1 = "SELECT * FROM product_type ORDER BY type_id";
            $result1 = $conn->query($sql1);

            while ($row = $result1->fetch_assoc()) {
                $type_id = $row['type_id'];
                $type_name = $row['type_name'];
            ?>
            <div class="vf">
                <a href="show_type.php?type_id=<?= $type_id ?>" style="text-decoration: none; color: #ff70b5;">
                    <?= $type_name ?>
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
<script>
    document.getElementById('button1').addEventListener('click', function() {
  window.scrollTo({
    top: document.body.scrollHeight / 1.5 - window.innerHeight / 1.5,
    behavior: 'smooth'
  });
});
</script>
</html>