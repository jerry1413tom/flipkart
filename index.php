<?php 
	 include 'admin/config/conn.php'; 
if(isset($_SESSION['User_id'])){
	$userid = $_SESSION['User_id'];
	//print_r($userid);
	$userdata = "select *form user where user_id ='".$userid."'";
	$getuser = mysqli_query($conn,$userdata);
	$userinfo = mysqli_fetch_array($getuser);
	}	 
		
	 
		$getpsql = "select *from shopping where cate_id = 42 LIMIT 6";
		$prodquery = mysqli_query($conn,$getpsql);
		
		$getpsql1 = "select *from shopping where cate_id = 44 LIMIT 6";
		$prodquery1 = mysqli_query($conn,$getpsql1);
		
		$getpsql3 = "select *from shopping where cate_id = 45 LIMIT 6";
		$prodquery3 = mysqli_query($conn,$getpsql3);
		
		
		

?>
<?php include 'include/header.php';?>
<body class="bo">

		<?php include 'include/hed.php';?>
		<?php include 'include/nav.php';?>
	
		
		<section>
			<div id="demo" class="carousel slide" data-ride="carousel">
				  <ul class="carousel-indicators">
					<li data-target="demo" data-slide-to="0" class="active"></li>
					<li data-target="demo" data-slide-to="1"></li>
					<li data-target="demo" data-slide-to="2"></li>
				  </ul>
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="img/oppo.jpg" alt="Los Angeles" width="100%" height="300px">
					</div>
					<div class="carousel-item">
					  <img src="img/ma.jpeg"alt="Chicago" width="100%" height="300px">   
					</div>
					<div class="carousel-item">
					  <img src="img/no.jpeg" alt="New York" width="100%" height="300px">  
					</div>
					<div class="carousel-item">
					  <img src="img/re.jpg" alt="New York" width="100%" height="300px">
					</div>
				  </div>
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				  </a>
				</div>
		</section>
		
		
		
		
		<section class="p-2 back_tow">
			<div class="container-fluid p-0">
				<div class="pb-2">
					<img src=""/>
				</div>
				<div class="pb-2 shadow">
					<div class="bg-light p-3 bord">
						<div class="row">
							<div class="col-10">
								<h3 class="m-0">watches</h3>
							</div>
							<div class="col-2">
								<div class="paddleft">
									<button type="button" class="btn btn-primary px-4" id="fl">View All
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="bg-light p-3">
						<div class="row">
						<?php 
							while($prow = mysqli_fetch_array($prodquery)){
						?>
						<div class="col-2 text-center py-3">
					
								<a href="detalpage.php?pid=<?php echo $prow['ID']; ?>" class="text-decoration-none">
									<div class="image">
										<img src="<?php echo 'admin/images/upload/small/'.$prow['profileImg'];?>"/>
									</div>
									<div class="text-center">
										<h6 class="pt-3 mb-1 text-body"><?php echo $prow['name'];?></h6>
										<h6 class="text-success">₹<?php echo $prow['price'];?></h6>
										<h6 class="text-success mb-1 size"><?php echo $prow['size'];?></h6>
										<h6 class="m-0 text-body">Shop Know</h6>
									</div>
								</a>
						</div>
						<?php	
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		<section class="p-2 back_tow">
			<div class="container-fluid p-0">
				<div class="pb-2">
					<img src=""/>
				</div>
				<div class="pb-2 shadow">
					<div class="bg-light p-3 bord">
						<div class="row">
							<div class="col-10">
								<h3 class="m-0">MOBILES</h3>
							</div>
							<div class="col-2">
								<div class="paddleft">
									<button type="button" class="btn btn-primary px-4">View All</button>
								</div>
							</div>
						</div>
					</div>
					<div class="bg-light p-3">
						<div class="row">
						
						<?php 
							while($prow = mysqli_fetch_array($prodquery1)){
						?>
							<div class="col-2 text-center py-3">
								<a href="detalpage.php?pid=<?php echo $prow['ID']; ?>" class="text-decoration-none">
									<div class="image">
										<img class="img-fluid" src="<?php echo 'admin/images/upload/small/'.$prow['profileImg'];?>"height="250px"/>
									</div>
									<div class="text-center">
										<h6 class="pt-3 mb-1 text-body"><?php echo $prow['name'];?></h6>
										<h6 class="text-success mb-1 size">₹<?php echo $prow['price'];?></h6>
										<h6 class="text-success mb-1 size"><?php echo $prow['size'];?></h6>
										<h6 class="m-0 text-body">Shop Know</h6>
									</div>
								</a>
								
							</div>
							<?php	
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</section>
	
		<section class="p-2 back_tow">
			<div class="container-fluid p-0">
				<div class="pb-2">
					<img src=""/>
				</div>
				<div class="pb-2 shadow">
					<div class="bg-light p-3 bord">
						<div class="row">
							<div class="col-10">
								<h3 class="m-0">Today s Fashion Deals</h3>
							</div>
							<div class="col-2">
								<div class="paddleft">
									<button type="button" class="btn btn-primary px-4">View All</button>
								</div>
							</div>
						</div>
					</div>
					<div class="bg-light p-3">
						<div class="row">
						
						<?php 
							while($prow = mysqli_fetch_array($prodquery3)){
						?>
						<div class="col-2 text-center py-3">
					
								<a href="detalpage.php?pid=<?php echo $prow['ID']; ?>" class="text-decoration-none">
									<div class="image">
										<img class="img-fluid" src="<?php echo 'admin/images/upload/small/'.$prow['profileImg'];?>"height="250px"/>
									</div>
									<div class="text-center">
										<h6 class="pt-3 mb-1 text-body"><?php echo $prow['name'];?></h6>
										<h6 class="text-success mb-1 size">₹<?php echo $prow['price'];?></h6>
										<h6 class="text-success mb-1 size"><?php echo $prow['size'];?></h6>
										<h6 class="m-0 text-body">Shop Know</h6>
									</div>
								</a>
						</div>
						<?php	
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
		
		
		<?php include 'include/form.php';?>
		
		<?php include 'include/foot.php';?>
<script>
	$(document).ready(function(){
	$("#submit").click(function(){
		
		var photo = $("#photo")[0].files[0];
		var name = $("#name").val();
		var feaucher = $("#feaucher").val();
		var size = $("#size").val();
		var Description = CKEDITOR.instances['des'].getData();
		var price = $("#price").val();
		var catup =  $("#cat").val();
	
		//console.log(Description );
		
		var fd = new FormData();
			
			fd.append("f_photo", photo);
			fd.append("f_name", name);
			fd.append("f_feaucher", feaucher);
			fd.append("f_size", size);
			fd.append("f_Description", Description);
			fd.append("f_price", price);
			fd.append("f_cat",cat)
			//console.log(fd );
		
		/*var obj = {
			f_photo : photo,
			f_name : name,
			f_feaucher : feaucher,
			f_size : size,
			f_Description : Description,
			f_price : price,
			f_catup : catup
			
		}*/
		
		$.ajax({
					
					url:"ajax/data.php",
					type:"POST",
					data:fd,
					processData:false,
					contentType:false,
					success:function(resp){
						if(resp == 1){
							$("#massege").html("Your data successfully");
							$("#name").val('');
							$("#feaucher").val('');
							$("#size").val('');
							$("#Description").val('');
							$("#price").val('');
							$("#catup").val('');
							//console.log(massege);
						}
					}
				})	
	});		
});	

			$(document).ready(function(){
			$("#togg").click(function(){
				$("#login").hide();
			});
			$("#togg").click(function(){
				$("#login").toggle();
				$("#login_reg").hide();
			});
			$("#remove_reg").click(function(){
				$("#login_reg").hide();
			});
			$("#show").click(function(){
				$("#login_reg").show();
				$("#login").hide();
			});
			$("#log_pag").click(function(){
				$("#login").show();
				$("#login_reg").hide();
			});
		});
			$(document).ready(function(){
				$("#fl").click(function(){
					console.log("#fl");
				});
			});
			$(document).ready(function(){
				$("#togg").click(function(){
					//console.log(togg);
				});
			});

</script>	
</body>
