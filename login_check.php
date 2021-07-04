<?php
include_once "admin_session_checker.php";
session_start();
include_once "connection.php";
$email=$_POST['email'];
$password=$_POST['password'];
$type=$_POST['type'];

$sql = "SELECT admin_id,type FROM admin where email='$email' and password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     $_SESSION['admin']=$row['admin_id'];
     if($row['type']=="Admin")
     {
         header("Location:index.php");
     }
     else {
        header("Location:userindex.php");
     }

    }
} else {
    echo "<script>alert('invalid email/password')</script>";
    header("Location:login.php");
}

 ?>
