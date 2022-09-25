<?php
 include 'config/conn.php'; 
	$uid = null;
	$name = null;
	$feaucher = null;
	$size = null;
	$Description = null;
	$price = null;
	$cat = null;
	if(isset($_GET['ID'])){
		$uid = $_GET['ID'];
		$sqlid = "select * from shopping where ID='".$uid."'";
		$resp = mysqli_query($conn, $sqlid);
		$result = mysqli_fetch_array($resp);
		
		$name = $result['name'];
		$feaucher= $result['feaucher'];
		$size = $result['size'];
		$Description = $result['Description'];
		$price = $result['price'];
		$cat = $result['cate_id'];
	}
	$sqlcat = "SELECT * FROM `order`";
	$respcat = mysqli_query($conn, $sqlcat);
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
	  <div class=" ">
	  <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Add New Product</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="ad">
				<div class="form-group">
					<input type="file" placeholder="uplode photo" id="photo" accept="image/png, image/jpeg">
					
				</div>
				<div class="form-group">
				
					  <input type="name"  value ="<?php echo $name;?>" placeholder="name" id="name">
				</div>
				<div class="form-group">
				
					  <input type="feaucher" value ="<?php echo $feaucher;?>"  placeholder="feaucher" id="feaucher">
				</div>	  
				<div class="form-group">	  
				
					  <input type="size" value ="<?php echo $size;?>"  placeholder="size" id="size">
				</div>
				<div class="form-group">
					 <label for="Description">Description</label>
					 <textarea id="des"></textarea>
				</div>
				<div class="form-group">
				
					  <input type="text" value ="<?php echo $price;?>"  placeholder="price" id="price">
				</div>
				<div class="row">
					<div class="col">
						<label for="name" class="mr-sm-2">Select catagroy</label>
						<select id="cat" class="from-control">
							<option>---select catagroy---</option>
							<?php
								while($row = mysqli_fetch_array($respcat)){
							?>
								<option <?php echo $row ['cate_id'] == $cat ? 'selected' : '';?> value="<?php echo $row ['cate_id']?>"><?php echo $row ['Name'];?></option>
								<?php
								}
								?>
						</select>
					</div>
				</div>
		
			  <button type="submit" id="submit" class="btn btn-primary ">Submit</button>
			  
				
			  </div>
            </div>
          </div>
        </div>
      </div>
	  </div>
    </div>
  </main>

  
<?php include 'includes/foot.php'; ?> 

<script>
	CKEDITOR.replace('des');
	CKEDITOR.instances['des'].setData("<?php echo $Description; ?>");
	
	
	$(document).ready(function(){
	$("#photo").click(function(){
	$("photo").click();
				
	})
	$("#submit").click(function(){
		
		var photo = $("#photo")[0].files[0];
		var name = $("#name").val();
		var feaucher = $("#feaucher").val();
		var size = $("#size").val();
		var Description = CKEDITOR.instances['des'].getData();
		//alert(Description);
		var price = $("#price").val();
		var cat =  $("#cat").val();
		// alert(cat);
		// console.log(cat);
		
		var fd = new FormData();
			
			fd.append("f_photo", photo);
			fd.append("f_name", name);
			fd.append("f_feaucher", feaucher);
			fd.append("f_size", size);
			fd.append("f_Description", Description);
			fd.append("f_price", price);
			fd.append("f_cat",cat)
			// console.log(fd );
			
			if(photo == ""){
					alert("your photo not filled");
				}
				else if (name == ""){
					alert("your name not filled");
				}
				else if (feaucher == ""){
					alert("your feaucher not filled");	
				}
				else if (size == ""){
					alert("your size not filled");
				}
				else if (Description == ""){
					alert("your Description not filled");
				}
				else if (price == ""){
					alert("your price not filled");
				}
				else if (cat == ""){
					alert("your cat not filled");
				}
		
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
							window.location.reload();
							$("#massege").html("Your data successfully");
							$("#name").val('');
							$("#feaucher").val('');
							$("#size").val('');
							$("#Description").val('');
							$("#price").val('');
							$("#cat").val('');
							console.log(' massege');
						}
					}
				});	

	});
			
});	
</script>

</body>
</html>