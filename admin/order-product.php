<?php include 'config/conn.php'; 
	$uid = null;
	$Name = null;
	
	if(isset($_GET['ID'])){
		$uid = $_GET['ID'];
		$sqlid = "select * from order where cate_id='".$uid."'";
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
	<div id="massege"></div>
    <div class="container-fluid py-4">
	  <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Add New order</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="ad">
				
				<div class="form-group">
					<input type="file" placeholder="uplode photo" id="photo" accept="image/png, image/jpeg">
					
				</div>
				<div class="form-group">
				
					  <input type="Name" value ="<?php echo $Name;?>" placeholder="Name" id="Name">
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
	$("#submit").click(function(){
		var photo = $("#photo")[0].files[0];
		var Name = $("#Name").val();
		//console.log(photo );
		
		var fd = new FormData();
			fd.append("f_Name", Name);
			fd.append("f_photo", photo);
			//console.log(fd );
		
		//var obj = {
			//f_name : name,
	//}
		if(Name == ""){
			alert("your Name not filled");
				}
		 else if(photo == ""){
					alert("your photo not filled");
				}
		
		$.ajax({
					
					url:"ajax/dataa.php",
					type:"POST",
					data:fd,
					processData:false,
					contentType:false,
					success:function(resp){
						if(resp == 1){
							window.location.reload();
							$("#massege").html("Your data successfully");
							$("#Name").val('');
							//console.log(massege);
						}
					}
				})	

	});
});	
</script>

</body>
</html>