<?php include 'config/conn.php'; 
	$uid = null;
	$name = null;
	$feaucher = null;
	$size = null;
	$Description = null;
	$price = null;
	if(isset($_GET['ID'])){
		$uid = $_GET['ID'];
		$sqlid = "select * from shopping where cate_id ='".$uid."'";
		$resp = mysqli_query($conn, $sqlid);
		$result = mysqli_fetch_array($resp);
		
		$name = $result['name'];
		$feaucher= $result['feaucher'];
		$size = $result['size'];
		$Description = $result['Description'];
		$price = $result['price'];
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                    </tr>
                  </thead>
				<div id="massege"></div>
			<div class="card-body px-0 pt-0 pb-2">
              <div class="ad">
				<div class="form-group">
					<input type="file" value="" placeholder="duplode photo" id="photo" accept="image/png, image/jpeg">
					<div class="product_img" id="font_btn">
					<img src="images/upload/small/image.png" width="100%"/>
					</div>
				</div>
				<div class="form-group">
				
					  <input type="name" value="<?php echo $name;?>" placeholder="name" id="name">
				</div>
				<div class="form-group">
				
					  <input type="feaucher" value="<?php echo $feaucher;?>" placeholder="feaucher" id="feaucher">
				</div>	  
				<div class="form-group">	  
				
					  <input type="password" value="<?php echo $size;?>"  placeholder="size" id="size">
				</div>
				<div class="form-group">
					 <label for="Description">Description</label>
					 <textarea id="des"></textarea>
				</div>
				<div class="form-group">
				
					  <input type="price" value="<?php echo $price;?>"  placeholder="price" id="price">
				</div>
		<?php 
			if($uid == null){
			  ?>
		<button type="submit" id="update" class="btn btn-success">update</button>
				<?php
			}
		?>
			  </div>
            </div>	
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 
 <script>
	CKEDITOR.replace('des');
	CKEDITOR.instances['des'].setData("<?php echo $Description; ?>");
	$(document).ready(function(){
		$("#font_btn").click(function(){
		$("photo").click();
	$("#update").click(function(){
			var uid = '<?php echo $uid; ?>';
			var name = $("#name").val();
			var feaucher = $("#feaucher").val();
			var size = $("#size").val();
			var Description = CKEDITOR.instances['des'].getData();
			var price = $("#price").val();

			var obj = {
				f_uid :uid,
				f_photo : photo,
				f_name : name,
				f_feaucher : feaucher,
				f_size : size,
				f_Description : Description,
				f_price : price
			}
			
			$.ajax({
				url:"ajax/update.php",
				type:"POST",
				data:obj,
				success:function(resp){
					if(resp == 1){
						window.location.href = 'add-product.php';
					}
				}
			})
		});
	});
 </script>
</body>
<?php include 'includes/foot.php'; ?>
</html>