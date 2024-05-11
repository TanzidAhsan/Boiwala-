<?php include('config.php'); ?>
 

	 <!DOCTYPE html>
	 



<html lang="en">
<head>
	
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Seller page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
	.overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: -1;
      }
	  .table-custom {
      background-color: #B0D1D9;
    }

	</style>
   

</head>
</head>
<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div class="overlay"></div>
<?php include 'header_admin.php'; ?>
<h1 class="text-center fw-bold"><a href="New login page.php" class="text-decoration-none text-white">Boiwala</a></h1>
<?php include 'info_uploads_complain.php'; ?>
<div class="container">
	 <div class="row">
		
		<table class= "table table-striped table-custom">
			<thead>
				<th>Name</th>
                <th>Id</th>
                <th>Blog</th>
			</thead>
			<tbody>
				<?php
					$sub=mysqli_query($conn,"select * from news order by id asc");
					while($subrow=mysqli_fetch_array($sub)){
						?>
						<tr>
							<td><?php echo $subrow['name']; ?></td>
							 <td><?php echo $subrow['id']; ?></td>
							 <td><?php echo $subrow['news']; ?></td>
							 <td><?php echo" <a  href='remove_complainblogapi.php?=$subrow[news]'><button type='button'class='btn btn-danger'>Solved</button></a>" ?> </td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>