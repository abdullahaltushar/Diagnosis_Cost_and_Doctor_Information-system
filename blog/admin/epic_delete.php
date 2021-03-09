<?php

session_start();
if ($_SESSION['id'] == null) {
    header('Location: index.php');
}
require_once '../Apps/classes/Database.php';
require_once '../Apps/classes/Login.php';
$login = new \App\classes\Login();
if (isset($_GET['logout'])) {
    $login->adminLogout();
}
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "doctor";
$con = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_select_db($con, 'doctor');
$id=$_GET['id'];
$sql="DELETE FROM `epic` WHERE id=$id";
$query=mysqli_query($con,$sql);
header('location: epic.php');
?>
<?php


