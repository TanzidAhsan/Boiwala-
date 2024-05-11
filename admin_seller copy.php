<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Seller page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

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

<body style="background-image:url(bnn.jpg);
background-repeat: no-repeat ;
background-attachment: fixed;
background-size: 100% 100% ;">
<div class="overlay"></div>
<?php include 'header_admin.php'; ?>
<?php include 'info_uploads.php'; ?>

<div class="container">
	<div class="row">
		<table class="table table-striped table-custom">
			<thead>
				<th>BOOK NAME</th>
				<th>ISBN</th>
				<th>PRICE</th>
				<th>SELLER ID</th>
				<th>Phone</th>
			</thead>
			<tbody>
				<?php
					$sub=mysqli_query($conn," SELECT books.name, books.isbn,users.Phone,books.seller_id,books.price
					FROM books INNER join users
					WHERE books.seller_id=users.Email order by isbn;");
					while($subrow=mysqli_fetch_array($sub)){
						?>
						<tr>
							<td><?php echo $subrow['name']; ?></td>
							<td><?php echo $subrow['isbn']; ?></td>
							<td><?php echo $subrow['price']; ?></td>
							<td><?php echo $subrow['seller_id']; ?></td>
							<td><?php echo $subrow['Phone']; ?></td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>

</body>
</html>
