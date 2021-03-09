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
    <title>add alpha</title>
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
<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="doctor";
$con=mysqli_connect($hostname,$username,$password,$dbname);
mysqli_select_db($con,'doctor');
if(isset($_POST['btn'])) {

    $query="INSERT INTO alpha(test_name,taka) VALUES ('$_POST[test_name]','$_POST[taka]')";

    $query=mysqli_query($con,$query);
    if($query){
        echo 'select';
        header('Location: alpha.php');
    }
    else{
        die("not select".mysqli_error($con));
    }
}
?>
<div style="margin: 200px; border: 1px solid green;">
    <form action=""  method="post" >
        <h3 align="center" class="font-weight-bold">add data</h3>
        <table align="center">
            <tr>
                <td> name of test : </td>
                <td><input type="text" name="test_name"></td>
            </tr>

            <tr>
                <td> taka : </td>
                <td> <input type="text" name="taka"></td>
            </tr>

            <tr>
                <td></td>
                <td ><input type="submit" name="btn" value="save"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>














