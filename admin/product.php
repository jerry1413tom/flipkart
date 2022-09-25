<?php 
	include 'config/conn.php'; 
	$list = "select * from shopping";
	
	$rower = mysqli_query($conn, $list);
	
	 //$result = mysqli_fetch_array($rower);
	// print_r($result);
	
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
			<a href="add-product.php" class="btn btn-sm mb-15 me-1 btn-success">Add New Product</a>
		</div>
	  </div>
	  
	  <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Product List</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Function</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employed</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
				<thead>
					  <tr class="table-danger">
						<th>photo</th>
						<th>name</th>
						<th>feaucher</th>
						<th>size</th>
						<th>Description</th>
						<th>price</th>
						<th>Status</th>
						<th>CreatedDate</th>
						<th>action</th>
						<th>update</th>
						<th>delete</th>
						<th>edite</th>
					  </tr>
				</thead>
				<thead>
					
					<tbody>
	
		<?php
			while($row = mysqli_fetch_array($rower)){
				
				?>
					<tr>
						<td>
							<img src="images/upload/small/<?php echo $row['profileImg']; ?>" width="100px" height="100px" />
						
						</td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['feaucher']; ?></td>
						<td><?php echo $row['size']; ?></td>
						<td><?php echo $row['Description']; ?></td>
						<td><?php echo $row['price']; ?></td>
					
						<td>
							<?php 
								if($row['Status'] == 1){
									?>
									<span class="badge btn-dark">Success</span>
									<?php
								} else {
									?>
									<span class="badge btn-danger">Failed</span>
									<?php
								}
							?>
						</td>
						<td><?php echo $row['createdate']; ?></td>
						
						<td>
							<button class="btn btn-warning" onclick="changefunc(<?php echo $row['ID']; ?>, <?php echo $row['Status']; ?>)">Changes</button>
						</td>
						<td>
							<a href="index.php?Id=<?php echo $row['ID']; ?>" class="btn btn-info">update</a>	
						</td>
						<td>
							<button class="btn btn-danger" onclick="func(<?php echo $row['ID']; ?>)">deletes</button>
						</td>
						
					</tr>
				<?php
			}
		?>      
				</thead>
			  </table>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
    </main>
  <script>
		function changefunc(ID, Status){
			$.ajax({
				url:'ajax/change.php',
				type:'POST',
				data:{ID, Status},
				success: function(resp){
				//console.log(ajax);
					if(resp == 1){
						location.reload();
					}
				}
			})
		}
		
		function func(Id){
			$.ajax({
				url:'ajax/delete.php',
				type:'POST',
				data:{Id},
				success: function(resp){
					//console.log(resp);
					if(resp == 1){
						location.reload();
					}
				}
			})
		}
			
</script>
</body>
<?php include 'includes/foot.php'; ?>
</html>