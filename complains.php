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
<body style="background-image:url(bnn.jpg);
background-repeat: no-repeat ;
background-attachment: fixed;
background-size: 100% 100% ;">
<div class="overlay"></div> 
<?php include 'headercomplain.php'; ?>
<?php include 'info_uploads_complain.php'; ?>
<div class="container">
	 <div class="row">
		
		<table class="table table-striped" style=" background-color: #B0D1D9;" >
			<thead>
				<th>Sender</th>
				<th>Against</th>
				<th>Complain</th>
				<th>Action</th>
			</thead>
			<tbody style=" background-color: #B0D1D9;">
				<?php
					$sub=mysqli_query($conn,"select * from complains order by Complain_no asc");
					while($subrow=mysqli_fetch_array($sub)){
						?>
						<tr>
							<td><?php echo $subrow['Sender']; ?></td>
							 <td><?php echo $subrow['Against']; ?></td>
							 <td><?php echo $subrow['Complain']; ?></td>
							 <td><?php echo" <a  href='remove_complainapi.php?Sender=$subrow[Sender]'><button type='button'class='btn btn-danger'>Solved</button></a>" ?> </td>
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