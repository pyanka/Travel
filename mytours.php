<html>
<head>
<style type="text/css">
table,th,td{
border:2px solid black;
margin: 70px;
padding: 10px;
font-size:15px;
border-collapse:collapse;
}
table.gridtable{
	border-collapse:collapse;
	width: 90%;
	text-align: centre;
	border-color:#666666;
	border-width: 1px;
	color:#333333;
	font-family:verdana,arial,sans-serif;
	font-size:30px;
}
th{
	background-color: blue;
	color: white;
}
h1.div{
	text-align: centre;
	margin: 15px;
	padding: 10px;
}
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
background:url("images/tour.jpg");
background-size: 100% 100%;
float:left;
}
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
<?php
session_start();
$uid=$_SESSION["uid"];
include("php/config.php");
$sql="select * from book_tour";
$result=mysqli_query($conn,$sql);
?>
<h1 style="color: black" Class="div">My Tours</h1>
<table style="font-size:12px"
class="gridtable">
<tr>
<th>User ID</th>
<th>Tour ID</th>
<th>Tour Name</th>
<th>Number of People</th>
<th>Date of Journey</th>
<th>Package Price</th>
</tr>
<?php
while($row=mysqli_fetch_array($result))
{
	if("$row[user_id]"==$uid)
	echo"<tr>
	<td>$row[user_id]</td>
	<td>$row[tour_id]</td>
	<td>$row[name]</td>
	<td>$row[num]</td>
	<td>$row[day]/$row[month]/$row[year]</td>
	<td>Rs.$row[total]</td>
	";
}
?>
</table>
</div>
</div>
</div>
</body>
</html>