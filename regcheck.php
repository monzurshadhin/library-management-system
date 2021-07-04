<?php
//include_once "admin_session_checker.php";
include_once "connection.php";

$name=$_POST['name'];
$password=$_POST['password'];
$email=$_POST['email'];

$type=$_POST['type'];



$sql="INSERT INTO `admin`(`email`, `password`, `name`, `type`) VALUES ('$email','$password','$name','$type')";
if(mysqli_query($conn,$sql)){
//echo "insert successfully";
header("Location:login.php");

}else{
  echo "failed";
}
 ?>
