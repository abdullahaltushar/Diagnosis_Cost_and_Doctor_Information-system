<?php
session_start();
if($_SESSION['id'] == null){
    header('Location: index.php');
}
require_once '../Apps/classes/Database.php';
require_once '../Apps/classes/Login.php';
$login = new \App\classes\Login();
if(isset($_GET['logout'])){
    $login ->adminLogout();
}
?>
<html>
<head>
    <title>dashboard</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../asset/js/bootstrap.js"></script>
</head>
<body>
<?php include 'menu.php'  ?>
<div class="row">
    <div class="col-lg-9">
        <div class="card-title">
            <p align="center"><b><i>Admin Profile</i></b></p>
            <div class="card-body">
                <img class="img-fluid" src="IMG_20191114_230108.jpg" width="250" height="250" style="float: left">
                <div class="card-body" style="float: left">
                    <h3><a class="card-text" href=""> <i class="fa fa-email"></i>Harunur Roshid</a> </h3>
                    <h5> <a href="http://www.abdullalaltushar12@gmail.com" class="fa fa-google text-dark"> abdullahaltushar12@gmail.com</a></h5>
                    <h5><a href="https://www.google.com/maps/place/Padma+Nir,+1277,+Padma+Pukur+Par,+SharaiPara,+Pahartali,+Pran+Horidas+Rd,+Chittagong+4202/@22.3502658,91.7868835,17z/data=!3m1!4b1!4m5!3m4!1s0x30acd91f181bcead:0xbbee8c6ac8a618d0!8m2!3d22.3502609!4d91.7890722">   <i class="fa fa-map-marker text-dark"></i>  Padma Nir,Saraipara,Pahartoli,Chattogram </a> </h5>
                    <h5><a href=""><i class="fa fa-phone text-dark"></i> 01531-584509</a> </h5>
                    <h5>Father Name:<i class="fa fa-child"> Tofayel Ahammed</i> </h5>
                    <h5>Mother Name:<i class="fa fa-child"> Sumi Akter</i> </h5>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>

