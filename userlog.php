<?php include 'include/header.php';?>
<body>
		
		
		<section class="banner">
			<div class="container">
				<div class="row">
					<div class="col-3 bged">
						<h1 style="color:white;">Login</h1>
						<p style="color:#bdbdbd;">Get access to your Orders, Wishlist and Recommendations</p>
						<div>
							<img src="img/dd.png" width="100%"/>						
						</div>
					</div>
					<div class="col-4 mo">
							<input  type="text"  class="input_sp"   placeholder="UserName" id="Name"/>
						<div>
						<input  type="Password"  class="input_sp"   placeholder="Enter Password" id="Pass"/>
						</div>
						<div class="text-right_sp">
							By continuing, you agree to Flipkarts <span style="color:blue;">Term of Use</span> and <span style="color:blue;">Privacy Policy.</span>
						</div>
						<div class="text-right_sp">
						<button type="button" id ="login_submit" class="btn btn-danger btn-block">Login</button>
						</div>
						<div class="text-right_spp">
							<span>OR</span>
						</div>
						<div class="text-right_spp">
						<button type="button" class="btn btn-gray btn-block gb">Request OTP</button>
						</div>
					</div>
					<div class="col-5"></div>
				</div>
			</div>
		</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>	
<script>
	
		$(document).ready(function(){
		$("#login_submit").click(function(){
			var Name = $("#Name").val();
			var Pass = $("#Pass").val();
			//console.log(Pass);
			
			
			
			$.ajax({
				url : "admin/ajax/userlogin.php",
				type : "POST",
				data : {Name,Pass},
				success : function(resp){
					console.log(resp);
					if(resp == 1){
						window.location.href = 'index.php';
					}else {
						window.location.href = 'log.php';
					}
				}
			})	
		});
	});
</script>		
</body>