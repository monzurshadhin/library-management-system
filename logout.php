<?php
include_once "admin_session_checker.php";
session_start();
session_destroy();
header("Location:login.php");
 ?>
