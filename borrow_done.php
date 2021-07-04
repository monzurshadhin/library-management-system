<?php
include_once "admin_session_checker.php";
include_once "connection.php";
$mid=$_POST['memberId'];
$mname=$_POST['membername'];
$address=$_POST['address'];
$cno=$_POST['cno'];
$bid=$_POST['bookId'];
$bname=$_POST['name'];
$date=$_POST['date'];



$sql="INSERT INTO `borrow`(`m_id`, `m_name`, `m_address`, `m_contract`, `b_id`, `b_name`,`borrow_date`) VALUES ('$mid','$mname','$address','$cno','$bid','$bname','$date')";
if(mysqli_query($conn,$sql)){
//echo "insert successfully";
header("Location:borrow.php");

}else{
  echo "failed";
}
 ?>
