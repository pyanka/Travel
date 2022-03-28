<html>
<head>
<style type="text/css">
table,th,td{
border:1px solid black;
margin:50px;
padding: 5px;
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
	font-size:11px;
}
th{
	background-color: blue;
	color: white;
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
background:url("images/admin.jpg");
background-size: 100% 100%;
float:left;
}
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
<?php
include("php/config.php");
$sql="select * from tours";
$result=mysqli_query($conn,$sql);
?>
<h1>Packages</h1>
<table style="font-size:12px"
class="gridtable">
<tr>
<th>Tour ID</th>
<th>Tour Name</th>
<th>Package Price</th>
<th>Image</th>
</tr>
<?php
while($row=mysqli_fetch_array($result))
{
	?>
<tr>
	<?php
	echo"
	<td>$row[tour_id]</td>
	<td>$row[name]</td>
	<td>Rs.$row[price]</td>
	<td><img src='" . $row['image'] . "' height='50'
		width='50'></td>
	";
	?>
	<td><form action="" method="get">
<button type="submit" name="delete" value=<?php echo $row["tour_id"] ;?>  >delete</button>
	 </form></td>
</tr>
	<?php
}
?>
</table>

</div>
	
</div>
</div>
<?php
if(isset($_GET["delete"]))
{
$id=$_GET["delete"];
$sql="DELETE from tours where tour_id='$id'   ";
$result=mysqli_query($conn,$sql);
}
?>
</body>
</html>