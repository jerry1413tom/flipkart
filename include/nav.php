<?php 
	include 'admin/config/conn.php';
	if(isset($_SESSION['lock'])){
		$userid = $_SESSION['lock'];
		//echo $_SESSION['lock'];
		$userdata = "select * from user_table where user_id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
	}
	
	
	
	$sqlcat = "SELECT * FROM `order`";
	$sqlauery = mysqli_query($conn, $sqlcat);
	
	
	
	
?>		
		<section class="bg">
			<div class="">
				<div class="flex">
					<?php
						while($row = mysqli_fetch_array($sqlauery)){
					?>
					<div class="child">
						<a href="list.php?cid=<?php echo $row['cate_id']; ?>">
						<img src="admin/images/upload/category/<?php echo $row['profil_img'];?>" height="60px"/>
						<p style="color:#0e0e0e;"><?php echo $row['Name']; ?></p>
						</a>
					</div>
					<?php
								}
							?>
					</div>
				</div>
			</div>
		</section>
		
