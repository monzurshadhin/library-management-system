<?php
include_once "connection.php";
$id = $_GET['id'];

$sql = "DELETE FROM `addbook` WHERE `b_id`=$id";

if(mysqli_query($conn,$sql)){
  header("Location:allbook.php");
}
else {
  echo "failed";
}
 ?>
