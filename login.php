

<?php
session_start();

if(isset($_SESSION['set1']))
{
	echo "Success123";
	
	header('location:loginnext.php');
}



?>
<html>
	<link rel="stylesheet" type="text/css" href="main.css">
		<head>
			<title>Admin login page </title>
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
  background-color: grey;
}
</style>
		</head>
		<body>
			<ul>
				<li>
					<a class="active" href="index.php">Home</a>
				</li>
				<li class="active" style="float:left;margin: 0 0 0 5px; background-color:grey">
					<a href="login.php">Admin Login</a>
				</li>
			</ul>
			<hr/>
			<hr/>
			<center>
				<h1 style="color : blue">Admin login </h1>
			</center>
			<hr/>
			<hr/>
			<form style="opacity:80%" action="login.php" method="post">
				<table align="center" height="30%" bgcolor="grey" border="4" width="50%">
					<tr style="color:black;">
						<td>Admin Username</td>
						<td>
							<input type="text" name="input1" value="" required placeholder="Enter your name"/>
						</td>
					</tr>
					<tr style="color:black;">
						<td>Admin password</td>
						<td>
							<input type="password" name="input2" value="" required placeholder="Enter your password"/>
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" name="submit1" value="submit"/>
						</td>
					</tr>
				</table>
			</form>
			<hr/>
			<hr/>
		</body>
	</html>


<?php

include('database.php');

if ( isset($_POST['submit1']))
{
$value1 =$_POST['input1'];
$value2 =$_POST['input2'];

if ( $value1 == 'admin@123' && $value2=='admin@123')
{
	$data = 90;
	session_start();
	$_SESSION['set1']= $data;
	header('location:loginnext.php');
	
}
else
{?>
	<script>
		alert('Please enter correct password');
		window.open('login.php',_self);
	</script>
	
<?php	
}
}
?>
















