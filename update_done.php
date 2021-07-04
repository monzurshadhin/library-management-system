<?php

include_once "connection.php";
$id=$_POST['memberId'];
$mname=$_POST['membername'];
$bdate=$_POST['bdate'];
$gender=$_POST['gender'];

$address=$_POST['address'];
$email=$_POST['email'];
$cno=$_POST['cno'];
$mtype=$_POST['mtype'];


$sql = "UPDATE `addmember` SET `m_name`='$mname',`b_date`='$bdate',`gender`='$gender',`address`='$address',`email`='$email',`contact`='$cno',`m_type`='$mtype' WHERE `m_id`=$id";

if(mysqli_query($conn,$sql)){
  header("Location:allmember.php");
}
else {
  echo "Error occured";
}
 ?>
