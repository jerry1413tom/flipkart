<?php
	include 'admin/config/conn.php';
	if(isset($_SESSION['token1'])){
		$userid = $_SESSION['token1'];
		$userdata = "select * from user_table where user_id = '".$userid."'";
		$getuser = mysqli_query($conn, $userdata);
		$userinfo = mysqli_fetch_array($getuser);
	}
	

?>



<div class="bb">
		<header class ="bg-primary" >
			<div class="container">
				<div class="row" style="padding-top:13px;">
					<div class="col-md-1 p-0" style="font-style:oblique;">
						<h4 class="m-0 text-light">Flipkart<h4>
						<a href="#"><h6 class="text-light mb-0" style="marin-top:-8px;"><small>Expoler<span style="color:yellow;">plus<i class="far fa-star"></i></span></small></h6></a>
					</div>
					
					<div class="col-md-5">
						<div class="relative">
						<input placeholder="search for product brand,brandand more" style="width:100%; padding-left: 10px;">
						<i class="fas fa-search"></i>
						</div>
						
					</div>
					<div class=" dropdown col-md-2 ">
						
						<?php if(isset($_SESSION['token1'])){?>
										<div class="dropdown_btn1">	
											<button  type="button" class="btn text-light p-0 px-2" ><?php echo $userinfo['name']; ?></button>
											<div class="dropdown-content1">
												<a href="">Profile</a>
												<a  href="singout.php">Log Out</a>
											</div>
										</div>
									<?php }else{?>	
										<div class="dropdown_btn">	
											<a href="log.php"><button type="button" class="btn btn-primary p-0 px-2" >Login</button></a>
										</div>
									<?php }?>
					</div>
					<div class="dropdown col-md-1">
							  <button type="button" class="btn dropdown-toggle"style="color:white;" data-toggle="dropdown">
								More
							  </button>
							  <div class="dropdown-menu">
								<a class="dropdown-item no" href="#"><span><i class="far fa-bell"></i>Notification preference</span></a>
								<a class="dropdown-item no" href="#"><span><i class="fas fa-briefcase"></i>Sell on flipkart</span></a>
								<a class="dropdown-item no" href="#"><span><i class="fas fa-question-circle"></i>24\7 coustomr care</span></a>
								<a class="dropdown-item no" href="#"><span><i class="fas fa-chart-line"></i>aprancive</span></a>
								<a class="dropdown-item noo" href="#"><span><i class="fas fa-arrow-down"></i>Downlode app</span></a>
							  </div>
					</div>
					<div class="col-3">
						<h4 class="m-0 text-light"><span><i class="fas fa-cart-plus"></i> Cart</span></h4>
					</div>
				</div>
			</div>
		</header>
		</div>