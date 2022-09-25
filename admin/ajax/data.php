<?php
	include '../config/conn.php';
	
	$photo = $_FILES['f_photo'];
	//echo $photo;
	$name = $_POST['f_name'];
	// echo $name;
	$feaucher = $_POST['f_feaucher'];
	// echo $feaucher;
	$size = $_POST['f_size'];
	// echo $size;
	$Description = $_POST['f_Description'];
	// echo $Description;
	$price = $_POST['f_price'];
	// echo $price;
	$cat = $_POST['f_cat'];
	// echo $cat;
	$temp = $photo['tmp_name'];
	// print_r ($temp);
	
	$date = date("Y-m-d-H-i-s");
	
	$filename = $date.'photo.jpg';
	// echo $filename;
	move_uploaded_file($temp, '../images/upload/small/'.$filename);
	
	$sql =	" insert into `shopping`(`ID`, `name`, `feaucher`, `size`, `profileImg`, `Description`, `price`, `cate_id`,`Status`, `createdate`) 
	VALUES ('','".$name."','".$feaucher."','".$size."','".$filename."','".$Description."','".$price."','".$cat."','','')";
		
	$query = mysqli_query($conn, $sql);
	// echo $query;
	
	if($query){
		echo 1;
	} else {
		echo 0;
	}
	
?>