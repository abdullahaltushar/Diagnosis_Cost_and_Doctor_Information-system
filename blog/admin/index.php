<?php
session_start();
if(isset($_SESSION['id'])){
    header('Location: dashboard.php');
}
require_once '../Apps/classes/login.php';
require_once '../Apps/classes/Database.php';

$login = new \App\classes\Login();
$message="";
if(isset($_POST['btn'])){
    $message=($login ->adminLoginCheck($_POST));

}
?>
<html>
<head>
    <title>
        admin
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
            <p align="center"><b><i>Admin pannel</i></b></p>
        </div>
            <div class="card-body">
                <h5 class=" m-auto"> <?php echo $message ?></h5>
                <form action="" method="post">
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Email :</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" name="email"  placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-sm-3 col-form-label">Password :</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
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
</body>
</html>
