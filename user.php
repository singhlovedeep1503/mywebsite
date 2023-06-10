
<?php

$id =$_GET['id'];
?>
<html>
	<link rel="stylesheet" type="text/css" href="main.css">
		<head>
			<title>Mobile Booking System </title>
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
				<li>
					<a style="background-color:green" class="active" href="index.php">Home</a>
				</li>
				<li style="float:left;margin: 0 0 0 5px;">
					<a href="login.php">Admin Login</a>
				</li>
			</ul>
			<hr/>
			<hr/>
			<center>
				<h1 style="color:white;background-color:grey;opacity:80%">Welcome again <?php echo $id;?>
				</h1>
			</center>
			<hr/>
			<hr/>
			<div style="opacity:80%" class="w3-container">
				<table class="w3-table-all">
					<thead>
						<tr class="w3-light-grey w3-hover-red">
							<th>Model Number</th>
							<th>Company Name</th>
							<th>RAM</th>
							<th>ROM </th>
							<th>Camera </th>
							<th>Processor </th>
							<th>Battery </th>
							<th>Color</th>
							<th>Price</th>
							<th>Book</th>
						</tr>
					</thead>
<?php

include('database.php');

$query = "select * from mobile";

$run = mysqli_query($con, $query);
while ( $row=mysqli_fetch_assoc($run))
{
	?>
					<tr class="w3-hover-green">
						<td> <?php echo $row['id']  ?>
						</td>
						<td><?php echo $row['company_name']  ?>
						</td>
						<td><?php echo $row['ram']  ?> &nbsp; </td>
						<td><?php echo $row['rom']  ?>
						</td>
						<td><?php echo $row['camera']  ?>&nbsp; </td>
						<td><?php echo $row['processor']  ?>&nbsp; </td>
						<td><?php echo $row['battery']  ?>&nbsp; </td>
						<td><?php echo $row['color']  ?> &nbsp; </td>
						<td><?php echo $row['price']  ?>
						</td>
						<td>
							<button onclick='window.alert("Booked successfull (^-^)")' style="background-color:green;padding:5px 15px;cursor:pointer"> Book</button>
						</td>
					</tr>
  
	
	<?php
	
}


?>
				</table>
			</div>
		</body>
	</html>