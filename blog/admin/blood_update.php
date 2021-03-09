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
$hostname="localhost";
$username="root";
$password="";
$dbname="doctor";
$con=mysqli_connect($hostname,$username,$password,$dbname);
mysqli_select_db($con,'doctor');
if(isset($_POST['btn'])) {
    $id=$_GET['id'];
    $name=$_POST['name'];




    $sql = "UPDATE `blood` SET `name`='$name',`email`='$_POST[email]',`location`='$_POST[location]',`number`='$_POST[number]',`blood`='$_POST[blood]',`gender`='$_POST[gender]' WHERE id=$id";
    $query=mysqli_query($con,$sql);
    if($query){
        echo "select";
        header('Location: blood.php');
    }
    else{
        die("not select".mysqli_error($con));
    }
}
?>
<html>
<head>
    <title>update</title>
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

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <div class="card">
                <div class="card-title">
                    <p align="center"><b><i>update blood</i></b></p>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">NAME:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name"  placeholder="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">EMAIL:</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email"  placeholder="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Location:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="location"  placeholder="location">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">number:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="number"  placeholder="number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Blood Group:</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="blood"  placeholder="blood">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                                <input type="radio" name="gender" value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-success btn-block ">Sign in</button>
                            </div>
                        </div>
                    </form>



                </div>
            </div>
        </div>

    </div>
</div>


</body>
</html>
