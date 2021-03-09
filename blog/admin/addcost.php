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

    $query="INSERT INTO govt_tb_1(test_name,taka) VALUES ('$_POST[test_name]','$_POST[taka]')";

     $query=mysqli_query($con,$sql);
    if($query){
        echo "select";
        header('Location: viewcost.php');
    }
    else{
        die("not select".mysqli_error($con));
    }
}
?>
<
<html>
<head>
    <title>new </title>
</head>
<body>
<a href="veiw.php">veiw information</a>
<form action="" method="post">
    <table align="center">
        <tr>
            <td> name of test </td>
            <td><input type="text" name="test_name"></td>
        </tr>
        <tr>
            <td> taka </td>
            <td> <input type="text" name="taka"></td>
        </tr>

        <tr>
            <td></td>
            <td ><input type="submit" name="btn" value="save"></td>
        </tr>
    </table>
</form>
</body>
</html>

