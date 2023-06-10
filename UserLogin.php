<html>
	<link rel="stylesheet" type="text/css" href="main.css">
		<head>
			<title>Mobile Booking System </title>
			<style>
body{
	background-image:url('image/ima1.jpg');
	background-position:right-top;
	background-size:100% 100%;
	
}


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
  background-color: #111;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
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

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
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
  color: skyskyblue;
}

.topnav a.active {
  background-color: green;
  color: skyskyblue;
}
</style>
		</head>
		<body>
			<div class="topnav">
				<a class="active" href="#home">Home</a>
				<a href="loginnext.php">Admin Login</a>
				<a href="index.php">User Signup</a>
				<a href="aboutus.php">About</a>
			</div>
			<center style="padding:0 0 0 300px;width:80%">
				<h1 style="color: white;background-color:skyblue">Login here for book Mobiles</h1>
			</center>
			<center>
				<div style="width:40%;opacity:70%">
					<form action="UserLogin.php" method="post">
						<div class="container">
							<h1 style="background-color:skyblue">Login</h1>
							<hr>
								<label style="float:left" for="Customer">
									<b>Username*</b>
								</label>
								<input type="text" placeholder="Enter your username" name="customer" id="customer" required>
								<label style="float:left" for="psw">
									<b>Password*</b>
								</label>
								<input type="password" placeholder="Enter your Password" name="psw" id="psw" required>
								<hr>
									<button type="submit" name="submit2" style="background-color:blue" class="registerbtn">Submit</button>
								</div>
							</form>
							
						</div>
					</center>


<?php

if ( isset($_POST['submit2'])){	
include('database.php');
$user =  mysqli_real_escape_string($con, $_POST['customer']);
$pwd =  mysqli_real_escape_string($con, $_POST['psw']);
$qry = "select username from user where username='$user' and password='$pwd' ";
$data =  mysqli_query($con, $qry);
$p=mysqli_num_rows($data);
$row=mysqli_fetch_assoc($data);
if($p>=1)
{
	$pc = $row['username'];
	?>
	<script>	
	window.location.replace('user.php?id='+'<?php echo $pc; ?>');	
	</script>
	<?php
}
else
{	
	?>
	<script>
	window.alert("Please enter correct password")
	</script>

<?php
	
}
}


?>
  </body>
</html>