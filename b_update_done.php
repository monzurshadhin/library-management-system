<?php

include_once "connection.php";
$id=$_POST['b_id'];
$bname=$_POST['b_name'];
$bdate=$_POST['b_date'];
$category=$_POST['b_category'];

$btype=$_POST['b_type'];
$publisher=$_POST['b_publisher'];
$price=$_POST['b_price'];



$sql = "UPDATE `addbook` SET `b_name`='$bname',`date`='$bdate',`category`='$category',`book_type`='$btype',`publisher`='$publisher',`price`='$price' WHERE `b_id`=$id";



if(mysqli_query($conn,$sql)){
  header("Location:allbook.php");
}
else {
  echo "Error occured";
}
 ?>
