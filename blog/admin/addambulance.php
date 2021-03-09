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

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "doctor";
$con = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_select_db($con, 'doctor');
if (isset($_POST['btn'])) {

    $query = "INSERT INTO `ambulance`(`name`, `location`, `mobile`) VALUES ('$_POST[name]','$_POST[location]','$_POST[mobile]')";

    $query = mysqli_query($con, $query);
    if ($query) {
        echo 'select';
        header('Location: viewambulance.php');
    } else {
        die("not select" . mysqli_error($con));
    }
}

?>
<html>
<head>
    <title>
        add ambulance
    </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <div class="card-title">
                <p align="center"><b><i>Add ambulance</i></b></p>
            </div>
            <div class="card-body">

                <form action="" method="post">
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Name :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name"  placeholder="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Location :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="location"  placeholder="location">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Number :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="mobile"  placeholder="number">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="submit" name="btn" class="btn btn-success btn-block ">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>
</div>
</body>
</html>

