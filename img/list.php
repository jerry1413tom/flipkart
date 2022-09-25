<?php
	include 'admin/config/connection.php';
	session_start();
	
	$catid = $_GET['cid'];
	$getpsql2 = "select * from flipkart where cat_id = '".$catid."'";
	$prodquery2 = mysqli_query($conn, $getpsql2);
	
	$getpsql3= "select * from catable where id = '".$catid."'";
	$prodquery3 = mysqli_query($conn, $getpsql3);
	$prodquery4 = mysqli_fetch_array($prodquery3);
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Flipkart Copy</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/all.min.css" /> 
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
			<?php include 'include/nav.php';?>	
			
			<div class="m-2 shadow-lg mt-3 bg-white border border-grey border-left-0 border-right-0 border-bottom-0 ">
					<div class="">
						<div class="d-flex justify-content-between border border-grey border-left-0 border-right-0 border-top-0 ">
							<div class="p-3"><h3><?php echo $prodquery4['name'] ?></h3></div>
							<div class="py-3 px-2">
								<button type="button" class="btn btn-primary">View All</button>
							</div>
						</div>
					</div>	
				<div class="container-fluid">
					<div class="row ">
						<?php
							//echo '-------------'.$catid;
							
							//print_r();
							
								while($prow2 = mysqli_fetch_array($prodquery2)){
							?>
						<div class="p-4 col-3 list ">
							<div class="  text-center ">
								<div class="imagesize">	
									<a href="#">
										<img class="img-fluid" src="admin/images/limg/<?php echo $prow2['list_image']; ?>" height="250px"/>
									</a>
								</div>
							</div>
							<div class="">
								<a href="#" class="text-decoration-none"><h5 class="text-dark "><?php echo $prow2['name']; ?></h5></a>
								<a href="#" class="text-decoration-none"><p class="text-success mb-0">₹<?php echo $prow2['price']; ?></p></a>
								<a href="#" class="text-decoration-none"><p class="text-muted mb-0">Grab Now!</p></a>
							</div>
						</div>
						<?php
								}
							
						?>
						
					</div>
				</div>
			</div>
			<?php include 'include/bottom.php';?>
		
  
  
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.bundle.min.js"></script>
		
		<script>
			
		</script>
		
	</body>
</html>