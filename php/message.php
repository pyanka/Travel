<?php
  $name=$_POST["name"];
  $mail=$_POST["mail"];
  $contact=$_POST["contact"];
  $address=$_POST["address"];  
  //database insertion
  include("config.php");
  
  $sql="INSERT INTO message
  (
	  name,
	  mail,
	  contact,
	  message
  )
  values('$name','$mail','$contact','$address')";
  
  $result=mysqli_query($conn,$sql);
  if($result)
	  echo "<br>Data Inserted";
  else
	  echo die(mysqli_error());
  ?>
<a href="../index.html"><br>Go Back!</a>  