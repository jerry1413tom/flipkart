<?php
	include '../config/conn.php';

		$Id = $_POST['Id'];
	
	//echo $id;
	
	$sql = "delete from shopping where Id = '".$Id."'";
	
	$query = mysqli_query($conn, $sql);
		
		echo $query ;
	
		
	
?>

