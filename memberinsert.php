<?php
include_once "admin_session_checker.php";
include_once "connection.php";
$mid=$_POST['memberId'];
$mname=$_POST['membername'];
$bdate=$_POST['bdate'];
$gender=$_POST['gender'];

$address=$_POST['address'];
$email=$_POST['email'];
$cno=$_POST['cno'];
$mtype=$_POST['mtype'];


$sql="INSERT INTO `addmember`(`m_id`, `m_name`, `b_date`, `gender`, `address`, `email`, `contact`, `m_type`) VALUES ('$mid','$mname','$bdate','$gender','$address','$email','$cno','$mtype')";
if(mysqli_query($conn,$sql)){
//echo "insert successfully";
header("Location:member.php");

}else{
  echo "failed";
}
 ?>
