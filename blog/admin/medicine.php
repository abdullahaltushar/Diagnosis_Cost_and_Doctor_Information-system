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
$con=mysqli_connect('localhost','root','','doctor');

$sql="SELECT * FROM `medicine`";
mysqli_select_db($con,'doctor');
$query=mysqli_query($con,$sql);
if($query){
    echo "select";
    $resource_id=mysqli_query($con,$sql);

}
else{
    die("no".mysqli_error($con));
}

?>
<html>
<head>
    <title>medicine </title>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../assets/js/bootstrap.js"></script>
</head>
<body>
<div class="container-fluid">
    <?php include 'menu.php'  ?>

    <h4 class="text-center font-drak;"><a href="addmedicine.php">
            Add medicine
        </a>
    </h4>
    <h4 class=" text-center bg-dark font-weight-bold text-white ml-5">েডিসিন বিশেষজ্ঞ (Physicians and surgeons) </h4>
    <div class="container border-0" style="margin-left: 200px;">
        <div class="row ml-5" >

            <div class="card float-left border-0">
                <div class="card-title">

                </div>
                <div class="card-body float-left">
                    <div> <?php while($result=mysqli_fetch_assoc($resource_id)){ ?></div>
                    <h6><img src="<?php echo $result['image']; ?>"></h6>
                    <h5><a href=""> <?php echo $result['name'] ?></a></h5>
                    <h6 class="font-weight-bold"><?php echo $result['title'] ?> </h6>
                    <p>Department of <?php echo $result['department'] ?><br><?php echo $result['appointment'] ?><br>
                        Appointment: <?php echo $result['time'] ?><br>
                        camber:  <?php echo $result['camber'] ?><br>
                        day off:  <?php echo $result['off'] ?><br>
                        serial:  <?php echo $result['serial'] ?></p>

                    <div><?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>








