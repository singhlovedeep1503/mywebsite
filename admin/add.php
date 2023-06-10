
<?php
session_start();
if( !isset($_SESSION['set1']))
{

	header('location:../login.php');
	
}


?>


<html>
<link rel="stylesheet" type="text/css" href="main.css">
<head>
<title>Insert laptop data </title>

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
  background-color: #111;
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
body{
	background-image:url('../image/ige2.jpg');
	background-position:right-top;
	background-size:100% 100%;
	background-repeat: no-repeat;
	
}


.colorcode{
	 background-color : grey;
	 
 }
	 
</style>


</head>

<body>

<ul>
  <li><a style="background-color:grey" class="active" href="../index.php">Home</a></li>
  
  <li class="active" style="margin: 0 0 0 5px;background-color:grey"><a   href="../logout.php">Logout</a></li>
</ul>

<center><h1>Please Enter Mobile</h1></center>



<div style="display:block;height:50%;margin-left:30px;margin-right:30px;opacity:80%;margin-top:2%">

<form action="add.php" method="post" enctype="multipart/form-data">
<table border="2px" bgcolor="cyan" align="center" width="40%" style="margin-top:0%;" cellspacing="5px" >
<tr>
<td class= "colorcode" align="center">Company Name</td>
<td align="LEFT"><input type="text" name="cname" required placeholder="Please enter mobile company name" /></td>
</tr>

<tr>
<td  class= "colorcode" align="center">Ram</td>
<td align="left"><input type="text" name="ram" required placeholder="enter RAM of mobile" /></td>
</tr>


<tr>
<td  class= "colorcode" align="center">Rom</td>
<td align="left"><input type="text" name="rom" required placeholder="Please enter Rom of Mobile" /></td>
</tr>


<tr>
<td  class= "colorcode" align="center">Camera</td>
<td align="left"><input type="text" name="camera" required placeholder="Please enter camera pixel" /></td>
</tr>

<tr>
<td  class= "colorcode" align="center">Processor</td>
<td align="left"><input type="text" name="processor" required placeholder="Please enter processor of mobile" /></td>
</tr>

<tr>
<td  class= "colorcode" align="center">Battery</td>
<td align="left"><input type="text" name="battery" required placeholder="Please enter battery of mobile" /></td>
</tr>
<tr>
<td  class= "colorcode" align="center">Color</td>
<td align="left"><input type="text" name="color" required placeholder="Please enter color of mobile" /></td>
</tr>

<tr>
<td  class= "colorcode" align="center">Price</td>
<td align="left"><input type="text" name="price" required placeholder="enter price of mobile" /></td>
</tr>


<tr>
<td align="center" colspan="2"><input width="20%" style="font-size:20px;background-color:green" type="submit" name="submit1" value="Add"  /></td>
</tr>

</table>
</form>
</div>


</body>
</html>


<?php


function insert($data){
		
include('../database.php');

	$a=$_POST['cname'];
	$b=$_POST['ram'];
	$c=$_POST['rom'];
	$d=$_POST['camera'];
	$e=$_POST['processor'];
	$f=$_POST['battery'];
	$g=$_POST['color'];
	$h=$_POST['price'];
	
	
	$qry = "insert into mobile(company_name,ram, rom, camera, processor, battery, color,price) values('$a','$b','$c','$d','$e','$f','$g', '$h')";
	
	$data = mysqli_query($con, $qry);
	
	if ( $data == true )
	{
		?>
		<script>
		alert('data is inserted successfully for users');
		window.open('../loginnext.php','_self');
		</script>
		<?php
		
	}
	else{
		
		?>
		<script>alert('Something went wrong, please try again');</script>
		<?php
	}
	mysqli_close($con);
}


if ( isset($_POST['submit1']))
{
	$data =1;
	insert($data);

}
?>

























