<?php

function delete_data($id)
{

	include('../database.php');

	
	$a1=$id;	
	
	$qry="delete from mobile where id='$a1'";
	
	$result=mysqli_query($con,$qry);
	if($result == true)
	{
		?>
		<script>
		alert('Mobile is removed from the user view.');
		window.open('../loginnext.php','_self');
		</script>
		
		<?php
	}
	else
	{
		?>
		<script>alert('Mobile Id is not found');
		window.open('delete.php	','_self');
		</script>
		
		<?php
	}
	
}
$a=$_POST['id'];
delete_data($a);








?>