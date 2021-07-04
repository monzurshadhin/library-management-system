<?php
include_once "admin_session_checker.php";
include_once "connection.php";
$bid=$_POST['bookId'];
$bname=$_POST['name'];
$bdate=$_POST['date'];
$bop=$_POST['op'];
$btype=$_POST['type'];
$bpubliser=$_POST['publisher'];
$bprice=$_POST['price'];



$sql="INSERT INTO `addbook`(`b_id`, `b_name`, `date`, `category`, `book_type`, `publisher`, `price`) VALUES ('$bid','$bname','$bdate','$bop','$btype','$bpubliser','$bprice')";

if(mysqli_query($conn,$sql)){
//echo "insert successfully";
header("Location:Book.php");

}else{
  echo "failed";
}
 ?>
