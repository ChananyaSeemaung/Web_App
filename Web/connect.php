<?php
@$conn = new mysqli("localhost","root","","pro");
if ($conn->connect_error) {
}
mysqli_set_charset($conn,"utf8");
?>