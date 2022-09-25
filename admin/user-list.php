<?php include 'config/conn.php'; 
	$uid = null;
	$name = null;
	
	if(isset($_GET['ID'])){
		$uid = $_GET['ID'];
		$sqlid = "select * from  where user_id='".$uid."'";
		$resp = mysqli_query($conn, $sqlid);
		$result = mysqli_fetch_array($resp);
		
		$name = $result['name'];
		
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Argon Dashboard 2 by Creative Tim</title>
  <?php include 'includes/head.php'; ?>
   
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <?php include 'includes/nav.php'; ?>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
	<?php include 'includes/header.php'; ?>
    <!-- End Navbar -->
	<div id="msg"></div>
    <div class="container-fluid py-4">
	  <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Add New user-list</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="ad">
				
				<div class="form-group">
					  <input type="name" value="<?php  echo $name;?>" placeholder="name" id="name">
				</div>
				
				<div class="form-group">
					  <input type="email" value=""  placeholder="email" id="email">
				</div>
				
				<div class="form-group">
					  <input type="password" value="<?php echo $password;?>"   placeholder="password" id="password">
				</div>
				
				<div class="form-group">
					  <input type="Mobile" value="" placeholder="Mobile" id="Mobile">
				</div>
				
				<div class="form-group">
					  <input type="addreash" value="" placeholder="addreash" id="addreash">
				</div>
			  <button type="submit" id="submit" class="btn btn-primary ">Submit</button>
			  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  
<?php include 'includes/foot.php'; ?> 

<script>
	
	$(document).ready(function(){
		$(document).ready(function(){
		$("#font_btn").click(function(){
			$("font_btn").click();
				
		})
		
	$("#submit").click(function(){
		
		
		var name = $("#name").val();
		var Email = $("#Email").val();
		var password = $("#password").val();
		var Mobile = $("#Mobile").val();
		var addreash = $("#addreash").val();
		
		// console.log(Mobile);
		
		
		var fd = new FormData();
			fd.append("f_name", name);
			fd.append("f_Email", Email);
			fd.append("f_password", password);
			fd.append("f_Mobile", Mobile);
			fd.append("f_addreash", addreash);
			
			
			
			
			if(name == ""){
					alert("your name not filled");
				}
				else if (email == ""){
					alert("your email not filled");
				}
				
				else if (password == ""){
					alert("your password not filled");
				}
				else if (Mobile == ""){
					alert("your Mobile not filled");	
				}
				else if (addreash == ""){
					alert("your addreash not filled");	
				}
		
		// var obj = {
			// f_name : name,
			// f_Email : Email,
			// f_password : password,
			// f_Mobile : Mobile,
			// f_addreash : addreash

		// }
		
		$.ajax({
					
					url : "ajax/register.php",
					type : "POST",
					data : fd,
					processData : false,
					contentType : false,
					success:function(resp){
						 if(resp == 1){
							 $("#massege").html("Your data successfully");
							 $("#name").val('');
							 $("#email").val('');
							 $("#password").val('');
							 $("#mobile").val('');
							 $("#addreash").val('');
							
						 }
						console.log(resp);
					}
				});	

	});
});	
</script>

</body>
</html>