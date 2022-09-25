<?php 
	session_start();
	include '../config/conn.php';
	
	$Name = $_POST['Name'];
	//echo $Name;
	$Pass = $_POST['Pass'];
	//echo $Pass;
	$authe = "select * from user_table where name ='".$Name."' and password ='".MD5($Pass)."' ";
	$query = mysqli_query($conn, $authe);
	
	if($query->num_rows > 0){
		$userdata = mysqli_fetch_array($query);
		//print_r($userdata);
		$_SESSION['token1'] = $userdata['user_id']; 
		echo 1;
	}else{
		 echo 0;
	}
?>