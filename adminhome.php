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
background:url("images/admin.jpg");
background-size: 100% 100%;
float:left;
}
#form{width: 400px; height: 400px; margin: 0 auto;}
</style>
</head>
<body>
<div id="h3">
<ul>
<li><a href="adminhome.php">Home</a></li>
<li><a href="packages.php">Tour's Modification</a></li>
<li><a href="addtour.html">Add Tour</a></li>
<li><a href="viewmessage.php">Messages</a></li>
<li><a href="logout.php">Log Out</a></li>
</ul>
</div>
<div id="content">
<div id="form">	
<?php
session_start();
include("php/config.php");
$aid=$_SESSION["aid"];
$sql="select * from admin_reg";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
	if("$row[admin_id]"==$aid)
{
	echo"
	<p><h1>My Details</h1></p>
	<p><b><u>User ID:</u></b>$row[admin_id]</p>
	<p><b><u>Name:</u></b>$row[name]</p>
	<p><b><u>Email ID:</u></b>$row[mail]</p>
	<p><b><u>Contact No.:</u></b>$row[contact]</p>
	<p><b><u>Address:</u></b>$row[address]</p>
	<p><b><u>Gender:</u></b>$row[gender]</p>";
}
?>
</div>
	
</div>
</div>


</body>
</html>
