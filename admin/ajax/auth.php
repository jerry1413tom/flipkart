<?php
	session_start();
	include '../config/conn.php';
	
	$email = $_POST['f_email'];
	$pass = $_POST['f_pass'];
	$auth = "select * from user_table where Email = '".$email."' and password = '".MD5($pass)."' ";
	$resp = mysqli_query($conn, $auth);
	
	if($resp->num_rows > 0){
		$userdata = mysqli_fetch_array($resp);
	//print_r($userdata);
		$_SESSION['userkey'] = $userdata['user_id']; 
	}
	
	//print_r($resp);
	

?>