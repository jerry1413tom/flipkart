<?php
	include '../config/conn.php';

		$uid = $_POST['f_uid'];
		$name = $_POST['f_name'];
		$feaucher = $_POST['f_feaucher'];
		$size = $_POST['f_size'];
		$Dicription = $_POST['f_Dicription'];
		$price = $_POST['f_price'];
		
	
	$sql = "UPDATE `shopping` SET `name` = '".$name."',`feaucher`='".$feaucher."',`size`='".$size."',`Description`='".$Description`."',`price`='".$price."',  where cate_id = '".$uid."' ";
	$query = mysqli_query($conn, $sql);
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
	
		
	
?>

