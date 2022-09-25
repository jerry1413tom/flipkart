<?php
	include 'admin/config/conn.php';
	
	$pid = $_GET['pid'];
	
	$getpsql2 = "select * from shopping where ID = '".$pid."' ";
	$prodquery2 = mysqli_query($conn, $getpsql2);
	$prow = mysqli_fetch_array($prodquery2);
	//echo $prow;
	//print_r($prow);
	

?>

<?php include 'include/header.php';?>

<body>
		<?php include 'include/hed.php';?>
		<?php include 'include/nav.php';?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-4 mt-3 p-0  p-5">
						<div class ="imagesize">
							<img src="admin/images/upload/small/<?php echo $prow['profileImg'];?>" height="200px"/>
						</div>
					</div>
					<div class="col-8 mt-3 p-0 px-4 p-2">
						<div class="p-2">
						Home > Clothing and Accessories > Watchs > Mobiles > Tops >
							</div>
						<h4 class="m-0 p-2">
							<?php echo $prow['name']; ?>
						</h4>
						<div class="py-1 p-2">
							<p class="m-0">
								25 Ratings & 4 Reviews
							</p>
						</div>
						
						<div class="p-2">
							<h2 class="m-0">
								₹<?php echo $prow['price']; ?>
							</h2>
							<img src="img/pb.png" width="7%"/>
							234 ratings and 31 reviews <img src="img/fd.png" width="10%"/>
						</div> 
						<div class="text-seccess my-2 pb-4 p-2">
							<h6 class="m-0 p-2">
								Available offers
							</h6>
						<P><img src="img/cp.png" width="4%"/><span class="vo">Combo Offer </span><span style="color:#ccc;">Buy 2 items save 5%;Buy 3 or more save 10%</span><span style="color:blue;"> T&C </span></p>
						
						<P><img src="img/cp.png" width="4%"/>Bank Offer <span style="color:#ccc;">10%off on SBI Credit Card, up to ₹1250. On orders of ₹5000 and above</span><span style="color:blue;"> T&C </span></p>
						
						<P><img src="img/cp.png" width="4%"/>Bank Offer<span style="color:#ccc;">10%off on SBI Credit Card EMI transactions, up to ₹1500. On orders of ₹5000 and above</span><span style="color:blue;"> T&C </span></p>
						
						<P><img src="img/cp.png" width="4%"/>Bank Offer<span style="color:#ccc;">5%Cashback on Flipkart Axis Bank Card</span><span style="color:blue;"> T&C </span></p>
						</div>
						<div class="pb-2 p-2">
							<h6 class="m-0 pb-2">
								Description
							</h6>
							<p class="m-0 px-5">
								<?php echo $prow['Description'];?>
							</p>
						</div>
					</div>
					
					<div class="col-12 pt-4 buy_but m-0">
						<button type="button" class="btn btn-warning p-2 m-3"><i class="fas fa-shopping-cart p-1"></i> ADD TO CART</button>
						<a href="orders.php?pid=<?php echo $pid; ?>" class="btn btn-primary bg-warning">
							<i class="fas fa-bolt p-1"></i>ORDER NOW
						</a>
					</div>
				</div>
			</div>
		</section>
		
		<?php include 'include/foot.php';?>
<script>
</script>
</body>