<?php
include_once "connection.php";
$id = $_GET['id'];

$sql = "DELETE FROM `addmember` WHERE `m_id`=$id";

if(mysqli_query($conn,$sql)){
  header("Location:allmember.php");
}
else {
  echo "failed";
}
 ?>
