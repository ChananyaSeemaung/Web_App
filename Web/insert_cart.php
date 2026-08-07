<?php
session_start();
include('connect.php');

// ตรวจสอบว่าผู้ใช้งานเข้าสู่ระบบหรือไม่
if (isset($_SESSION['idc'])) {
    // เก็บค่า $_SESSION ของผู้ใช้งานปัจจุบัน
    $idc = $_SESSION['idc'];
    $namem = $_SESSION['namem'];
    $lnamem = $_SESSION['lnamem'];
    $address = $_SESSION['address'];

    // เพิ่มข้อมูล order_tbl โดยใช้ $idc ของผู้ใช้งานปัจจุบัน
    $sql = "INSERT INTO order_tbl (idc, namem, lnamem, address, total_price, order_status)
            VALUES ('$idc', '$namem', '$lnamem', '$address', '" . $_SESSION["sum_price"] . "', '1')";


    if (mysqli_query($conn, $sql)) { // ตรวจสอบและเพิ่มข้อมูลลงฐานข้อมูล
        $id_or = mysqli_insert_id($conn); // ถ้าสำเร็จดึงเอา id_or ที่ถูกเพิ่มล่าสุดด้วย mysqli_insert_id
        $_SESSION["order_id"] = $id_or; // อัปเดตค่า $_SESSION

        for ($i = 0; $i <= (int)$_SESSION["intLine"]; $i++) { // ตรวจสอบว่ามีข้อมูลสินค้าที่ต้องการสั่งซื้อหรือไม่
            if (isset($_SESSION["strProductID"][$i]) && $_SESSION["strProductID"][$i] != "") {
                $productID = $_SESSION["strProductID"][$i];

                $sql1 = "SELECT * FROM product WHERE id_pro = '$productID'";
                $result1 = mysqli_query($conn, $sql1);
                $row1 = mysqli_fetch_assoc($result1);

                if ($row1) {
                    $price = $row1['price_pro'];
                    $total = $_SESSION["strQty"][$i] * $price;

                    // แก้ไขคำสั่ง mysqli_query() เพื่อเพิ่มตัวแปร $id_or
                    $sql2 = "INSERT INTO order_detail (id_pro, id_or, orderprice, orderqty, total)
                             VALUES ('$productID', '$id_or', '$price', '" . $_SESSION["strQty"][$i] . "', '$total')";

                    if (mysqli_query($conn, $sql2)) {
                        $sql3 = "UPDATE product SET num_pro = num_pro - " . $_SESSION["strQty"][$i] . "
                                 WHERE id_pro = '$productID'";
                        if (!mysqli_query($conn, $sql3)) {
                            echo "Error updating product stock: " . mysqli_error($conn);
                        }
                    } else {
                        echo "Error inserting order detail: " . mysqli_error($conn);
                    }
                } else {
                    echo "Product with ID '$productID' not found.";
                }
            }
        }

        echo "<script> window.location='quotation.php'</script>";
    } else {
        echo "Error inserting order: " . mysqli_error($conn);
    }
} else {
    echo "idc not set in GET data.";
}
mysqli_close($conn);
unset($_SESSION['intLine']);
unset($_SESSION['strProductID']);
unset($_SESSION['strQty']);
?>