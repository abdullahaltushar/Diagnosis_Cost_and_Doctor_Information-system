<?php
$con =mysqli_connect('localhost','root','','doctor');
mysqli_select_db($con,'doctor');
if(isset($_POST['submit'])){
    $doctor_name=$_POST['doctor_name'];
    $clinic_name=$_POST['clinic_name'];
    $category=$_POST['category'];
    $number=$_POST['number'];
    $appointment=$_POST['appointment'];
    $description=$_POST['description'];
    $files =$_FILES['file'];
    print_r($doctor_name);
    echo "<br>";
//            print_r($files);
    $filename=$files['name'];
//            print_r($filename);
    $fileerror=$files['error'];
    $filetmp=$files['tmp_name'];
//            convert jpg
    $fileext=explode('.',$filename);
    $filecheck= strtolower(end($fileext));

    $fileextstored= array('png','jpg','jpeg');

    if(in_array( $filecheck, $fileextstored)){
        $destinationfile='upload/'. $filename;
        move_uploaded_file( $filetmp, $destinationfile);
        $sql="INSERT INTO `doctorlist_tb`( `doctor_name`, `clinic_name`, `category`, `number`, `appointment`, `description`, `image`) VALUES ('$doctor_name','$clinic_name','$category','$number','$appointment','$description','$destinationfile')";
        $query=mysqli_query($con,$sql);
        if($query){
            echo 'selete';
        }
        else{
            die('no selet'.mysqli_error($con));
        }
    }
}
?>



<html>
<head>
    <title></title>
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
    <br>
    <h1 class="text-white bg-dark text-center">doctor profile</h1>
    <div class="col-lg-8 m-auto d-block">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="user">doctor name :</label>
                <input type="text" name="doctor_name" id="user" class="form-control">

            </div>
            <div class="form-group">
                <label for="clinic">clinic name :</label>

          <input type="text" name="clinic_name" id="clinic" class="form-control" >

            </div>
            <div class="form-group">
                <label for="category">category :</label>

                <input type="text" name="category" id="category" class="form-control" >

            </div>
            <div class="form-group">
                <label for="number">number :</label>
                <input type="number" id="number" name="number" class="form-control">
            </div>
            <div class="form-group">
                <label for="appointment">appointment:</label>
                <input type="text" id="appointment" name="appointment" class="form-control">


            </div>
            <div class="form-group">
                <label for="description">description:</label>
                <textarea col="4" row="3" name="description" id="description" class="form-control"></textarea>

            </div>


            <div class="form-group">
                <label for="file">profile pic :</label>
                <input type="file" name="file" id="file" class="form-control">

            </div>
            <input type="submit" name="submit" value="submit" class="btn btn-success">
        </form>
    </div>
</div>
</body>
</html>
