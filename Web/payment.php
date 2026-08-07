<?php
include 'connect.php';
session_start();
$order_id="";
$name="";
$lname="";
$total=0;
$status="";
$id_or = isset($_GET['id_or']) ? $_GET['id_or'] : "";


if(isset($_POST['btn1'])){
    $key_word=$_POST['keyword'];
    if($key_word !=""){
        $sql="SELECT * FROM order_tbl WHERE id_or='$key_word' ";
        unset($_SESSION['error']);
    }else{
        echo "<script>window.location='payment.php'; </script>";
        unset($_SESSION['error']);
    }
    $hand=mysqli_query($conn,$sql);
    $num1=mysqli_num_rows($hand);
        if($num1 == 0){
            echo "<script>window.location='payment.php'; </script>";
            $_SESSION['error']="ไม่พบข้อมูลเลขที่ใบสั่งซื้อ";
        }else{

        $row=mysqli_fetch_array($hand);
        $order_id=$row['id_or'];
        $name=$row['namem'];
        $lname=$row['lnamem'];
        $total=$row['total_price'];
        $status=$row['order_status'];
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แจ้งชำระเงิน</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS (popper.js included) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
    <style>
        .mt-6 {
            display: flex;
            justify-content: center;
        }

        .alert-primary {
            --bs-alert-color: #bf228d;
            --bs-alert-bg: #fbc1e9;
            --bs-alert-border-color: #bf228d;
        }

        body {
            font-family: 'Mali', cursive;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 250px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 2;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <?php include('navber.php'); ?>
    <div class="container">
        <div class="row mt-6">
            <div class="col-md-6">
                <div class="alert alert-primary" role="alert">
                    แจ้งหลักฐานการชำระเงิน
                </div>
                <!-- ฟอร์มค้าหาเลขที่ใบเสร็จ -->
                <div class="border mt-5 p-2 my-2">
                    <form method="POST" action="payment.php">
                        <label>เลขที่ใบสั่งซื้อ</label>
                        <input type="text" name="keyword" value="<?= $id_or ?>">
                        <button type="submit" name="btn1" class="btn btn-primary">ค้นหา</button><br>
                        <?php
                        include 'connect.php';
                        if (isset($_SESSION['error'])) {
                            echo "<div class='text-danger'>";
                            echo $_SESSION['error'];
                            echo "</div>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt-6" style="display: flex; justify-content: center;">
            <div class="col-md-6" style="display: flex; justify-content: center;">
                <form method="POST" action="insert_payment.php" enctype="multipart/form-data">
                    <label class="mt-6">เลขที่ใบสั่งซื้อ</label>
                    <input type="text" name="id_or" required value=<?= $order_id ?>>
                    <?php
                    if ($status == '1') {
                        echo "<div class='text-danger'>";
                        echo "***รอการชำระเงิน";
                        echo "</div>";
                    } elseif ($status == '2') {
                        echo "<div class='text-success'>";
                        echo "***ชำระเงินแล้ว";
                        echo "</div>";
                    }
                    ?>
                    <label class="mt-6" align="right">ชื่อ-นามสกุล (ลูกค้า)</label>
                    <textarea class="form-control" name="namem" required rows="1"><?= $name . $lname ?></textarea>
                    <label class="mt-6" align="right">จำนวนเงิน</label>
                    <input type="number" class="form-control" name="total_price" required value=<?= $total ?>>
                    <label class="mt-6" align="right">วันที่โอน</label>
                    <input type="date" class="form-control" name="pay_date" required>
                    <label class="mt-6" align="right">วันที่โอน</label>
                    <input type="time" class="form-control" name="pay_time" required>
                    <label class="mt-6" align="right">หลักฐานการชำระเงิน</label>
                    <input type="file" class="form-control" name="file1" required><br>
                    <?php if ($status == '1') { ?>
                        <button type="submit" name="btn2" class="btn btn-primary">บันทึก</button>
                    <?php } else { ?>
                        <button type="submit" name="btn2" class="btn btn-primary" disabled>บันทึก</button>
                    <?php } ?>
                </form>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>
