<?php
	include '../config/conn.php';
	$Name = $_POST['f_Name'];
	$photo = $_FILES['f_photo'];
	//echo $photo;
	$temp = $photo['tmp_name'];
	// print_r ($temp);
	
	$date = date("Y-m-d-H-i-s");
	
	$filename = $date.'photo.jpg';
	// echo $filename;
	move_uploaded_file($temp, '../images/upload/category/'.$filename);
	
	
	$sql = "insert into`order`(`cate_id`, `Name`,`profil_img`,`status`, `createdate`) VALUES ('','".$Name."','".$filename."','','')";
	
	$query = mysqli_query($conn, $sql);
	 //echo $query;
	
	if($query){
		echo 1;
	} else {
		echo 0;

	}
?>