<?php
 
 
error_reporting(E_ERROR | E_PARSE);
 
 
?>

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
<h1 class="text-center fw-bold"><a href="New login page.php" class="text-decoration-none text-white">Boiwala</a></h1>
<?php include 'info_uploadssub.php'; ?>

<div class="container">
	<div class="row">
		<table class="table table-striped table-custom">
			<thead>
				<th>Transactin Id</th>
				<th>Transaction Date</th>
				<th>Card Type</th>
				<th>Card Id</th>
				<th>Amount</th>
                <th>Name</th>
			</thead>
			<tbody>
				<?php
					$sub=mysqli_query($conn," SELECT transactions.tran_id,transactions.tran_date,transactions.card_type, transactions.card_no,transactions.amount,subscribers.name
					FROM transactions INNER join subscribers
					WHERE transactions.card_no=subscribers.subscription_id order by tran_date;");
					while($subrow=mysqli_fetch_array($sub)){
						?>
						<tr>
							<td><?php echo $subrow['tran_id']; ?></td>
							<td><?php echo $subrow['tran_date']; ?></td>
							<td><?php echo $subrow['card_type']; ?></td>
							<td><?php echo $subrow['card_no']; ?></td>
							<td><?php echo $subrow['amount']; ?></td>
                            <td><?php echo $subrow['name']; ?></td>
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
