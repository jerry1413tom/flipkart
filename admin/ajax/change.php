<?php
	include '../config/conn.php';

		$ID = $_POST['ID'];
	$Status = $_POST['Status'];

	if($Status == 1){
		$Status = 0;
	} else {
		$Status = 1;
	}
	
	$sql = "update shopping set Status = '".$Status."' where ID = '".$ID."'";
	
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
		
	
?>

