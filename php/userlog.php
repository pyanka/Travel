<?php
include("config.php");
session_start();
$uid=$_POST["uid"];
$pwd=$_POST["pwd"];
$_SESSION["uid"]=$uid;
$_SESSION["pwd"]=$pwd;
$sql="select user_id,password from reg where user_id='$uid' && password='$pwd'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result))
	header("location:../userhome.php");
else
	header("location:../userlog.html");
?>