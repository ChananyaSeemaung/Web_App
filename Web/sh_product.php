<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show product</title>
</head>
<body>
<?php include("connect.php"); ?>
    <?php
    $perpage = 8;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }else{
        $page = 1;
    }
    $start = ($page -1) * $perpage;

    $key_word = @$_POST['keyword'];
    if($key_word !=" "){
        $sql = "SELECT * FROM product WHERE id_pro='$key_word' or name_pro like '%$key_word%' ORDER BY id_pro limit {$start}, {$perpage} ";
    }else{
        $sql = "SELECT * FROM product ORDER BY id_pro limit {$start}, {$perpage} ";
    }


    $hand = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array( $hand )){
        $price = $row['price_pro'];
    
    ?>

    <div class="col-md-3">
    <img src="img/<?=$row['image']?>" width="200" height="250" class="mt-5 p-2 my-2 border" > <br>
    ID: <?=$row['id_pro']?> <br>
    <h5 class="text-success"> <?=$row['name_pro']?> </h5>
    ราคา <b class="text-danger"> <?=number_format($price,2)?> </b> บาท <br>
    <a href="#" class="btn btn-info">Add</a>
    </div>
    <?php
    }
    ?>
</body>
</html>
