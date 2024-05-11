<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>1st page</title>
</head>
<body style="background: lightskyblue;">
<?php  include 'header2.php';?>

<div class="container">
  <div class="row gy-3 my-3"> 
    <div class="col-md-4">


<div class="card"style="background-color: turquoise;">
  <img src="booksell.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Be a Seller</h5>
    <p style="color: darkred;" class="card-text">Sell your book to our website at a reasonable price</p>
    <a href="seller_fst.php" class="btn btn-primary">Seller</a>
  </div>
</div>
</div>
<div class="col-md-4">


<div class="card" style="background-color: greenyellow;">
  <img src="buy book.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Be a Buyer</h5>
    <p style="color: darkred;" class="card-text">Buy  book from our website at a reasonable price</p>
    <a href="display.php" class="btn btn-primary">Buyer</a>
  </div>
</div>
</div>


<div class="col-md-4">


<div class="card" style="background-color: palegreen;">
  <img src="exchange.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Exchange Book</h5>
    <p style="color: darkred;" class="card-text">You can now contact with other users to exchange your books with them</p>
    <a href="exchange.php" class="btn btn-primary">Exchange</a>
  </div>
</div>
</div>

<div class="col-md-4">


<div class="card" style="background-color: darkgrey;">
  <img src="note.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Note Sharing </h5>
    <p style="color: darkred;" class="card-text">Now you can not only help others with your notes but at the same time you can accure knowledge from others</p>
    <a href="downloads.php" class="btn btn-primary"> Find Notes </a>
  </div>
</div>
</div>

<div class="col-md-4">


<div class="card"style="background-color: darkorange;">
  <img src="complains.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Submit your thought</h5>
    <p style="color: darkred;" class="card-text">You can now post your complains about our site</p>
    <a href="help.php " class="btn btn-primary">Complain</a>
  </div>
</div>
</div>

 

</div>
</div>
</body>
<?php include 'footer.php'?>
</html>