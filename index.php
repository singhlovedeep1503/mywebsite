<html>
	<link rel="stylesheet" type="text/css" href="main.css">
		<head>
			<title>Mobile Booking System </title>
			<style>





input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}


.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}


.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

.topnav {
  background-color: #333;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: green;
  color: skyblue;
}

.topnav a.active {
  background-color: green;
  color: skyblue;
}
</style>
		</head>
		<body>
			<div class="topnav">
				<a class="active" href="#home">Home</a>
				<a href="loginnext.php">Admin Login</a>
				<a href="userlogin.php">User Login</a>
				<a href="aboutus.php">About</a>
			</div>
			<center style="padding:0 0 0 300px;width:80%">
				<h1 style="color: white;background-color:skyblue">Welcome to our booking System</h1>
			</center>
			<center>
				<div style="width:40%;opacity:70%">
					<form action="index.php" method="post">
						<div class="container">
							<h1 style="background-color:skyblue">SignUp</h1>
							<hr>
								<label style="float:left" for="Customer">
									<b>User Name</b>
								</label>
								<input type="text" placeholder="Enter your name" name="customer" id="customer" required>
								<label style="float:left" for="psw">
									<b>User password</b>
								</label>
								<input type="password" placeholder="Enter Password" name="psw" id="psw" required>
								<hr>
									<button type="submit" name="submit1" style="background-color:green">Register</button>
								</div>
							</form>
						</div>
					</center>

<?php

if ( isset($_POST['submit1']))
{
include('database.php');

$name =  $_POST['customer'];

$pwd =  $_POST['psw'];

$qry = "insert into user(username, password) values('$name','$pwd')";

$data =  mysqli_query($con, $qry);

if($data)
{ 
	?>
					<script>
	window.alert("Successfully Registered into system")
	</script>

<?php
}
else
{
	
	?>
					<script>
	window.alert("Somthing went wrong")
	</script>

<?php
	
}
}
?>
				</body>
			</html>