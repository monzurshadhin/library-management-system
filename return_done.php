<?php
include_once "admin_session_checker.php";
include_once "connection.php";
$mid=$_POST['memberId'];
$mname=$_POST['membername'];
$bid=$_POST['bookId'];
$bname=$_POST['name'];
$date=$_POST['date'];

$sql1="SELECT `borrowID`,`m_address`, `m_contract`  FROM `borrow` WHERE `m_id`=$mid AND `b_id`=$bid";
$result = mysqli_query($conn,$sql1);
$row=mysqli_fetch_assoc($result);

$address=$row['m_address'];
$cno=$row['m_contract'];



$sql2="DELETE FROM `borrow` WHERE `m_id`=$mid AND `b_id`=$bid";
 mysqli_query($conn,$sql2);



$sql="INSERT INTO `returnbook`(`m_id`, `m_name`, `m_address`, `m_contract`, `b_id`, `b_name`,`return_date`) VALUES ('$mid','$mname','$address','$cno','$bid','$bname','$date')";
if(mysqli_query($conn,$sql)){
//echo "insert successfully";
header("Location:return.php");

}else{
  echo "failed";
}
 ?>
