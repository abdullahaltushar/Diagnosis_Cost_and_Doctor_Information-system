<?php


namespace App\classes;
use Apps\classes\Database;
require_once 'Database.php';


class login
{
public function adminLoginCheck($data){
    $email=$data['email'];
    $password=md5($data['password']);
    $sql="SELECT * FROM `admin` WHERE email='$email' AND password='$password'";
    if(mysqli_query(Database::dbConnection(),$sql)){
      $result=mysqli_query(\Apps\classes\Database::dbConnection(),$sql);
      $user=mysqli_fetch_assoc($result);
      if($user){
          session_start();
          $_SESSION['id']=$user['id'];
          $_SESSION['name']=$user['name'];
          header('Location: dashboard.php');
      }
      else{
          $message="Please enter the valid email & password ";
          return $message;
      }


    }
    else{
        die("error".mysqli_error(Database::dbConnection()));
    }
}
public function adminLogout(){
    unset($_SESSION['name']);
    unset($_SESSION['id']);
    header('Location: index.php');
}



}