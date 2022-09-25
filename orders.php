<?php
	include 'admin/config/conn.php';
	
	$pid = $_GET['pid'];
	//echo ($pid);
	$getpsql2 = "select * from shopping where ID = '".$pid."' ";
	$prodquery2 = mysqli_query($conn, $getpsql2);
	$prow = mysqli_fetch_array($prodquery2);
	//print_r($prow);
	
	
?>

<?php include 'include/header.php';?>
<body class="" id="opcity">
		<?php include 'include/hed.php';?>
		<?php include 'include/nav.php'?>
	<section class="container">
			<div class="p-3 mt-5 shadow">
				<div class="border">
					<div class="d-flex justify-content-between p-3 border border-top-0 border-left-0 border-right-0">
						<div class="p-2 px-4 bg-primary text-light">Shopping cart</div>
						<div class="p-2 px-4 border"><i class="fas fa-map-market-alt pr-3"></i>Track</div>
					</div>
					<div class="row p-3">
						<div class="col-3">
							<div class ="imagesize">
								<img src="admin/images/upload/small/<?php echo $prow['profileImg'];?>" height="200px"/>
							</div>
						</div>
						<div class="col-2">
							<?php echo $prow['name'];?>
						</div>
						<div class="col-7">
							<div class="d-flex mb-3">
								<div class="p-2 flex-fill">
									<h5 class="text-center">Price</h5>
									<h5 type="text" id="price" data-value="<?php echo $prow['price'];?>" class="my-1 form-control box py-2">₹<?php echo $prow['price'];?></h5>
								</div>
								
								<div class="mt-5 plus-minus-input flex-fill">
									<div class="d-flex">
										<div class="input-group-button">
											<button type="button hollow circle" data-quantity="minus" data-field="quantity">
											<i class="fa fa-minus" aria-hidden="true"></i>
											</button>
										</div>	
											<input id="quantityfield" class="input-group-field" type="number" name="quantity" value="1">
										<div class="input-group-button">
											<button type="button hollow circle" data-quantity="plus" data-field="quantity" id="qut">
											<i class="fa fa-plus" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
								
								<div class="p-2 flex-fill">
									<h5 class="text-center">Total price</h5>
									<input type="text" id="Total" class="my-1 form-control border text-center box py-2" data-value="<?php echo $prow['price'];?>"></input>
								</div>
								
							</div>
						</div>
					</div>
					
					<?php if(isset($_SESSION['user_id'])){
						
						?>
					<div class="d-flex flex-row-reverse border p-3">
						<div class="py-2 px-4 bg-success text-light rounded-lg" type="button" id="buynow">BUY NOW</div>
						<button class="btn btn-warning" style="display:none;" id="loader">
						<span class="spinner-border spinner-border-sm"></span>
						Wait....
						</button>
						
					</div>
					<?php }else{
						
						?>
					
					<div class="d-flex flex-row-reverse border p-3">
						<div class="py-2 px-4 bg-success text-light rounded-lg" type="button" id="buynow">BUY NOW</div>
						<button class="btn btn-warning" style="display:none;" id="loader">
						<span class="spinner-border spinner-border-sm"></span>
						Wait....
						</button>
					</div>
					<?php }
					?>
				</div>
			</div>
	</section>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
	function quantityfunc(currentvalue){
			var quantity = currentvalue;
			var price = '<?php echo $prow['price'] ?>';
			var total = (quantity * price);
			var totalprice = $("#Total").val(total);
			//console.log(totalprice);
			
	}
	
	jQuery(document).ready(function(){
		$('[data-quantity="plus"]').click(function(e){
			
			e.preventDefault();
			
			fieldName = $(this).attr('data-field');
			var currentval = parseInt($('input[name='+fieldName+']').val());
			if(!isNaN(currentval)){
				$('input[name='+fieldName+']').val(currentval + 1);
				quantityfunc(currentval + 1);
			}else{
				$('input[name='+fieldName+']').val(0);
			}
		});
		
		$('[data-quantity="minus"]').click(function(e){
			e.preventDefault();
			fieldName = $(this).attr('data-field');
			var currentval = parseInt($('input[name='+fieldName+']').val());
			if(!isNaN(currentval) && currentval > 0){
				$('input[name='+fieldName+']').val(currentval - 1);
						quantityfunc(currentval - 1);
			}else{
				$('input[name='+fieldName+']').val(0);
			}
		});	
		
		});
		
		/*$(document).ready(function(){
			$("#remove").click(function(){
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
		});*/
		
		$(document).ready(function(){
			$("#buynow").click(function(){
				$("#loader").show();
				$("buynow").hide();
				//console.log(buynow)
				
				$("#opcity").addClass("opicity");
				$("#opcity").addClass("loader");
				
				var price = '<?php echo $prow['price']?>'
				var qun = $("#quantityfield").val();
				var total = $("#Total").val(total);
				var user = '<?php echo isset($_SESSION['user_id'])? $_SESSION['user_id']:" "; ?>';
				//console.log(user);
				var priod = '<?php echo $pid ?>'
				
				var obj = {
					o_price : price,
					o_qun : qun,
					o_total : total,
					o_user :user,
					o_priod : priod
					
				}
				//console.log();
				
				$.ajax({
					
					url :"ajax/ordertable.php",
					type :"POST",
					data : obj,
					success :function(resp){
						if(resp == 1){
							//swal("Order!", "Order successfully!", "success");//
							$("#loader").hide();
							$("#buynow").show();
							
							$("#opcity").removeClass("opicity");
							
							Swal.fire({
								title:'Order Successfully',
								ShowClass: {
									popup:'animate_animated animate_fadeInDown'
								},
								hideClass: {
									popup:'animate_animated animate_fadeOutUp'
								}
							})
						}
					}
				})
				
			});
		});


</script>
</body>