<?php
	include '../config/conn.php';
	
	$name = $_POST['f_name'];
	$Email = $_POST['f_Email'];
	$password = $_POST['f_password'];
	$Mobile = $_POST['f_Mobile'];
	$addreash = $_POST['f_addreash'];
	//print_r($name);
	//echo ($name );
	
	$sql = "insert into `user_table`(`user_id`, `name`, `Email`, `password`, `Mobile`, `addreash`, `status`, `createdate`) 
	VALUES ('','".$name."','".$Email ."','".md5($password)."','".$Mobile."','".$addreash."','','')";
	
	$query = mysqli_query($conn, $sql);
	 echo $query;
	
	if($query){
		echo 1;
	} else {
		echo 0;

	}
?>