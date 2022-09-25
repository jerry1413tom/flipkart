
<?php
	include 'admin/config/conn.php';
	//session_start();
	
	
	$page = 1;
	 if(isset($_GET['page'])){
		 $page = $_GET['page'];
	 }
	//echo();
	$limit = 8;
	
	$offset = (($page - 1) * $limit );
	
	$catid = $_GET['cid'];
	//echo($catid);
	$getpsql2 = "select * from shopping where cate_id = '".$catid."' limit " .$offset.",".$limit."";
	$prodquery2 = mysqli_query($conn, $getpsql2);
	
	$getpsql3 = "select * from `order` where cate_id='".$catid."'";
	$prodquery3 = mysqli_query($conn, $getpsql3);
	$prodquery4 = mysqli_fetch_array($prodquery3);
	//print_r($prodquery3);
	$pagination = ceil($prodquery3->num_rows / $limit);
	
?>

	<?php include 'include/header.php';?>
<body>
	<?php include 'include/hed.php';?>
	<?php include 'include/nav.php';?>			
			
			<div class="m-2 shadow-lg mt-3 bg-white border border-grey border-left-0 border-right-0 border-bottom-0 ">
					<div class="">
						<div class="d-flex justify-content-between border border-grey border-left-0 border-right-0 border-top-0 ">
							<div class="p-3"><h3><?php echo $prodquery4['Name']; ?></h3></div>
						</div>
					</div>	
				<div class="container-fluid">
					<div class="row ">
						<?php
								while($prow2 = mysqli_fetch_array($prodquery2)){
						?>
						<div class="p-4 col-3 list ">
						<a href="detalpage.php?pid=<?php echo $prow2['ID'];?>" class="text-decoration-none">
							<div class="  text-center ">
								<div class="imagesize">	
										<img src="<?php echo 'admin/images/upload/small/'.$prow2['profileImg'];?>" height="98px"/>
										
								</div>
							</div>
							<div class="ff">
								<h5 class="text-dark "><?php echo $prow2['name']; ?></h5>
								<p class="text-success mb-0">₹<?php echo $prow2['price']; ?></p>
								<p class="text-muted mb-0">Grab Now!</p>
							</div>
						</a>
						</div>
						<?php
								}
						?>
						
					</div>
				</div>
			</div>
			
			
			<div class="set text-center">
				<ul class="p-0">
					<?php for($i=1; $i<=$pagination; $i++){
						
						?>
						<li class="p-0 inline-block"><a class="rounded-circle bg-primary text-light p-1" href="list.php?cid=<?php echo $catid ;?>&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
					<?php	
					}
				
				?>
				</ul>
			</div>
			
			<?php include 'include/foot.php';?>
		
	</body>
