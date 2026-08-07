<?php 
include('connect.php');
session_start();

if (!isset($_SESSION["user"])) {
    header("location:login.php");
    exit(); // ออกจากการทำงานเพื่อป้องกันการทำงานต่อ
}

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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mali:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
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
        video{
            position: absolute;
            z-index: -2;
            width: 100%;;
            height: auto;
        }
        #button1{
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

        #button1:hover {
        
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
        #button1:active {
        box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #CC99FF, 0 -4px 4px #CECFD1, 0 -6px 4px #CC99FF, inset 0 0 5px 3px #CC66FF, inset 0 0 30px #CC66FF;
        }
        #button1:focus {
        box-shadow: 0 4px 3px 1px #FCFCFC, 0 6px 8px #CC99FF, 0 -4px 4px #CECFD1, 0 -6px 4px #CC66FF, inset 0 0 5px 3px #CC99FF, inset 0 0 30px #CC99FF;
        }
        container-sm{
            margin: 10pc;
        }

    .fUbaPc {
        display: flex;
        position: absolute;
        left: 400px;
        right: 70px;
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

    .cart-wrapper{
        display: flex;
        align-items: center;
        justify-content: center;
        flex: 1;
        padding-bottom: 5px;
        margin: 0 20px;
    }
   
.textbox{
    height: 300px;
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    justify-content: center;
}

.ty{
    display: flex;
    position: relative;
    height: 100%;
    padding: 0;
    margin: 0;
}
.type{
    overflow-x: hidden;
    list-style: none;
    float: left;
    touch-action: pan-y;
}
.bDb3QO{
    width: 16rem;
    height: 15rem;
    padding: 0 0.9375rem;
    position: relative;
    display: flex;
    flex-direction: column;
}
.texttyep{
    display: flex;
    text-align: center;
    flex-direction: column;
    align-items: stretch;
    height: 10px;
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
  margin-top: 259px;
}
    </style>
</head>
<?php 
include ('navber.php') ; 
?>
<body>
<div class="container1" >
    <video autoplay loop muted>
        <source src="video/v2.mp4" type="video/mp4">
    </video>
    <button  id="button1" >SHOP NOW ⇾ </button>
</div>
    <br>

<div class="fd" style="margin-top: 50px;" >
<main class="container">
    <div id="demo" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
      </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="us_image/new.png" alt="Los Angeles" class="d-block" style="width:100%"></div>
        <div class="carousel-item">
            <img src="us_image/new1.png" alt="Chicago" class="d-block" style="width:100%"></div>
        <div class="carousel-item">
          <img src="us_image/new2.png" alt="New York" class="d-block" style="width:100%"></div>
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span></button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span></button>
    </div>
    </div>
<div class="container">
  <br><br>
  <div class="row row-cols-2 row-cols-lg-6 g-2 g-lg-3">
    <?php
    include("connect.php");
    $sql = "SELECT * FROM product ORDER BY id_pro";
    $result = $conn -> query($sql);
    while($data = $result->fetch_assoc()) {
    ?>
    <br><br>
    <div class="link254">
      <a data-sql="link" href="details.php?id_pro=<?php echo $data["id_pro"];?>" >
      <div class="card1">
        <div class="card-body p-3" >
        <img src="img/<?=$data['image']?>"width="150px"height="150px">
          <div class="card3">
            <div class="name_pro" >
              <a ><?=$data['name_pro']?></a></div>
                <div class="pricenum">
                  <div class="price_pro" >
                  <a>฿ <?=$data['price_pro']?></a></div>
                  <div class="num_pro" align = 'right'>
                <a>   เหลืออีก <?=$data['num_pro']?> ชิ้น</a></div>
            </div> 
          </div>
        </div>
      </div>
    </a>
  </div>
    <?php
    }
    mysqli_close($conn)
    ?>
        <br>
    <br>
</div>
</div>
</main>
</body>
<script>
    document.getElementById('button1').addEventListener('click', function() {
  window.scrollTo({
    top: document.body.scrollHeight / 1.5 - window.innerHeight / 1.5,
    behavior: 'smooth'
  });
});
</script>
<?php include ('footer.php') ; ?>
</html>
