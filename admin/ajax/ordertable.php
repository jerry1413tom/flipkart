<?php 
	include 'config/conn.php';
	
	$_price = $_POST['o_price'];
	$_qun = $_POST['o_qun'];
	$_total = $_POST['o_total'];
	$_user = $_POST['o_user'];
	$_proid = $_POST['o_proid'];
	//print_r($_price);
	$data = data('y-m-d-H-i-s');
	
	$sql = "insert into ordertable (orderId, user_id, ID, Address, price, Quantity, Total, Status, CreateDate) values('', '".$user."', '".$priod."', '".$price."', '".$qun."', '".$total."', '1', '".$date."') ";
	
	
	$quarry = mysql_query($conn, $sql);
	
	$ord_id = mysqli_insert_id($conn);
	
	
	if($quarry){
		
		$to_email = "jerry.jojo098@gmail.com";
		$subject = "Simple Email Test via PHP";
		$headers = "From:jerry.jojo098@gmail.com ";
		$headers .= "MIME-version: 1.0" . "/r/n";
		$headers .= "Content-type:text/html;charset=UTF-8" ."/r/n";
		$body = '<div>
		<div style="background-color:#e5e5eb3;">
		<div style="max-width:1094px; width:800px; margin:auto; border:1px solid black;border-radius:22px">
		<div style="tsxt-align:center; padding:20px 160px;">
			fill
		</div>
		<div style="tsxt-align:center; padding:20px 160px;
		background-color:#e5c2e5;">
			<h3 style="padding-bottom:25px; margin:0">ORDER CONFIRMED</h3>
			
			<h5 style="padding-bottom:25px; margin:0">name,thank you for your order</h5>
			
			<h5 style="margin:0">Weve recived your order and will contact you as soon as your package is shipped. you can find your purchase information below.</h5>
			</div>
			
			<div style="padding:25px 20px;">
				<div style="text-align:center; padding-bottom:25px; margin:0;">
				<h3>Order Summery</h3>
				<h5>june 15 2021</h5>
			</div>
			
			<div style="padding-bottom:25px;">
				<div style="float:left; width:35%; box-sizing:border-box;">
				<div style="width:250px; height:250px;">
					<img style="border-radius:22px;"
					src="img/1.php" width="100%";
					height="100%";>
				</div>
			</div>
			<div style="float:left; width:65%; box-sizing:border-box;">
				<div style="height:250px; border-radius:22px;
				border:1px solid black; padding:20px;">
					<div style="">
						<div style="float:left; width:60%; box-sizing:border-box;">
							<h5>Product ID</h5>
							<h5>Product Name</h5>
							<h5>Product Price</h5>
							<h5>Product Quantity</h5>
							<h5>Product Total</h5>
						</div>
					<div style="float:left; width:40%; box-sizing:border-box; text-align:rigth;">
						<h5>Product Total</h5>
						<h5>Product ID</h5>
						<h5>Product Total</h5>
						<h5>Product Total</h5>
						<h5>Product Total</h5>
					<div style="clear:both;"></div>
						</div>
					</div>
				</div>
			</div>
			<div style="clear:both;"></div>
		</div>
		<div style="padding-top:25px;">
			<h3 style="text-align:center;">Order total</h3>
			<div style="">
				<div style="float:left; width:50%; box-sizing:border-box;">
					<h5>Subtotal Price</h5>
					<h5 style="padding">Shipping Price</h5>
					<h5 style="border-top:1px solid black;">Total Price :</h5>
				</div>
				<div style="float:left; width:50%; text-align:rigth;">
					<h5>Product Total</h5>
					<h5>Product ID</h5>
					<h5 style="border-top:1px solid black;">kyuaass</h5>
				</div>
				<div style="clear:both;"></div>
			</div>
		</div>
			<div style="text-align:center; padding-top:25px;">
				<button><a herf="http://localhost/flipkart/confirm.php?uid='.$user.'&oid='.$ord_id.'">CONFIRMED</a></button>
			</div>
		</div>
	</div>
	</div>
</div>';	
	
		if (mail($to_email,$subject, $body, $headers)){
			echo 1;
		}else{
			echo "Email sending failed...";
		}
	
	
	}else{
		echo 0;
	}
	

?>