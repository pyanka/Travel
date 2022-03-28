<html>
<head>
<style type="text/css">
#h3
{
height:67px;
width: 1000px;
background-color:red;
float:left;	
}
ul
{
display: inline-flex;
margin: 0;
padding: 0;	
list-style-type:none;
overflow:hidden;
background-color:rgb(238, 16, 16);	
}
li
{
width:220px;
margin: 10px;
padding: 15px;	
}
li a
{
    text-decoration: none;	
display: block;	
color: white;
text-align: centre;	
}
li:hover
{
background: red;
border-radius: 3px;	
}
.sub-menu-1
{
	display: none;
}
li:hover .sub-menu-1
{
	display: block;
	position: absolute;
	background: red;
	margin-top: 15px;
	margin-left: -15px;
}
li:hover .sub-menu-1 ul
{
	display: block;
    margin: 10px;
}
li:hover .sub-menu-1 ul li
{
	width: 150px;
	padding: 10px;
	border-bottom: 1px dotted #fff;
	background: transparent;
	border-radius: 0;
	text-align: left;
}
li:hover .sub-menu-1 ul li:last-child
{
	border-bottom: none;
}
li:hover .sub-menu-1 ul li a:hover
{
	color: #b2ff00;
}
#content
{
height:550px;
width:1350px;
background-color:white;
background:url("images/user.jpg");
background-size: 100% 100%;
float:left;
}
p{
    font-size:20px;
    color: red;
}
a{
    text-decoration: none;

}
#form{width: 400px; height: 400px; margin: 0 auto;}

</style>
</head>
<body>
<div id="h3">
<ul>
<li><a href="userhome.php">Home</a></li>
<li><a href="usertours.php">Tours & Packages</a></li>
<li><a href="book.html">Book Now!</a></li>
<li><a href="mytours.php">My Tours</a></li>
<li><a href="logout.php">Log Out</a></li>
</ul>
</div>
<div id="content">
<div id="form">
<div class="info">
<?php
session_start();
$uid=$_SESSION["uid"];
$tid=$_SESSION["tid"];
$name=$_SESSION["name"];
$num=$_SESSION["num"];
$day=$_SESSION["day"];
$month=$_SESSION["month"];
$year=$_SESSION["year"];
$total=$_SESSION["total"];
 //database insertion
  include("php/config.php");

  $sql="INSERT INTO book_tour
  (
	  user_id,
	  tour_id,
	  name,
	  num,
      day,
	  month,
	  year,
	  total
  )
  values('$uid','$tid','$name','$num','$day','$month','$year','$total')";

  $result=mysqli_query($conn,$sql);
  if($result)
      echo "<br><h1>Bill</h1>
			<br>User ID : ".$uid
			 ."<br>Tour_ID:".$tid
			 ."<br>Tour Name:".$name
			 ."<br>No. of people:".$num
			 ."<br>Date of Journey:".$day."/".$month."/".$year
			 ."<br>Total : Rs.".$total;

  else
	  echo die(mysqli_error());
      ?>
<p>Thank You For Booking</p>
<p>Have A Safe Trip</p>
<a href="book.html"><br>Go Back</a>
<a href="contact.html" ><br>Contact Us</a>
</div>    
</div>
</div>
</body>
</html> 