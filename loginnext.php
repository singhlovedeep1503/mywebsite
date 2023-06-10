
<?php
session_start();
if( !isset($_SESSION['set1']))
{		
	header('location:login.php');	
}


?>


<html>
<link rel="stylesheet" type="text/css" href="main.css">
<head>
<title>Admin panel </title>

<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

a:hover {
  background-color: green;
}


</style>


</head>

<body>

<ul>
  <li><a style="background-color:grey" class="active" href="index.php">Home</a></li>
  
  <li class="active" style="margin: 0 0 0 5px;background-color:grey"><a href="logout.php">Logout</a></li>
</ul>

<hr/>
<hr/>

<div  style="background-color:grey;height:50%;margin-left:30px;margin-right:30px;padding: 15px 0 0 0;position:relative;opacity:80%">

<table border="2px" bgcolor="skyblue" align="center" width="60%" style="margin-top:5%;" cellspacing="25px" cellpadding="20px" >
<tr>
<td align="center">Option 1</td>
<td align="center"><a href="admin/add.php" >Insert Mobile </a></td>
</tr>

<tr>
<td align="center">Option 2</td>
<td align="center"><a href="admin/delete.php" >Delete Mobile </a></td>
</tr>

</table>
</div>




<hr/>
<hr/>
</body>
</html>