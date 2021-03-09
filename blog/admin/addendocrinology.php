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
if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $title = $_POST['title'];
    $department = $_POST['department'];
    $education = $_POST['education'];
    $medical = $_POST['medical'];
    $camber = $_POST['camber'];
    $time = $_POST['time'];
    $off=$_POST['off'];

    $serial = $_POST['mobile'];
    $gender = $_POST['gender'];
    $files=$_FILES['file'];
    print_r($name);
    echo "<br>";
    print_r($files);
    $filename = $files['name'];
//            print_r($filename);
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];
//            convert jpg
    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if (in_array($filecheck, $fileextstored)) {
        $destinationfile = 'upload/' . $filename;
        move_uploaded_file($filetmp, $destinationfile);

        $sql = "INSERT INTO `endocrinology`( `name`, `department`, `title`, `education`, `appointment`, `camber`, `serial`, `time`, `gender`, `image`, `off`) VALUES ('$name','$department','$title','$education','$medical','$camber','$serial','$time','$gender','$destinationfile','$off')";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo "select";
            header('Location: ENDOCRINOLOGY.php');
        } else {
            die("not select" . mysqli_error($con));
        }
    }
}

?>
<html>
<head>
    <title>Add eye</title>
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

    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="card">
                    <div class="card-title">
                        <p align="center"><b><i>Doctor Information</i></b></p>
                    </div>
                    <div class="card-body">
                        <form action="" method="Post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="Name" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">Department</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="Department" name="department">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="Title" name="title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Education title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="Education" name="education">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Medical</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="medical" name="medical">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">Camber</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="camber" name="camber">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">Serial</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="Mobile" name="mobile">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">Time</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="time" name="time">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">oFF Day</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control"  placeholder="dayoff" name="off">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9">
                                    <input type="radio" name="gender" value="Male">Male
                                    <input type="radio" name="gender" value="Female">Female
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="file">profile pic :</label>
                                <input type="file" name="file" id="file" class="form-control">

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>



