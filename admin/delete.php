
<?php
session_start();
if( !isset($_SESSION['set1']))
{
	
	header('location:login.php');
	
}


?>
<html>
	<link rel="stylesheet" type="text/css" href="../main.css">
		<head>
			<title>Delete data </title>
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
  color: yellow;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


input[type=submit] {
  background-color: #4CAF50;
  color: white;
	width: 100%;
  border: none;
  border-radius: 4px;
  cursor: pointer;
 
}



</style>
		</head>
		<body>
			<ul>
				<li>
					<a style="background-color:grey" class="active" href="../index.php">Home</a>
				</li>
				<li class="active" style="margin: 0 0 0 5px;background-color:blue">
					<a href="../logout.php">Logout</a>
				</li>
			</ul>
			<center>
				<h1 style="background-color:skyblue;opacity:50%">Delete mobile using Model Number </h1>
			</center>
			<hr/>
			<hr/>
			<form action="deletedata.php" method="post">
				<table border="2px" bgcolor="grey" align="center" width="40%" style="opacity:70%;" cellspacing="15px" cellpadding="10">
					<tr>
						<td style="background-color: skyblue" align="center">Model Number</td>
						<td style="background-color: skyblue" align="center">
							<input type="text" name="id" placeholder="Please enter Model number" required />
						</td>
					</tr>
					<tr>
						<td align="center" colspan="2">
							<input type="submit" name="submit1" style="font-size:20px" value="Delete"/>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<hr/>
		<hr/>
	</table>
</div>
</body>
</html>