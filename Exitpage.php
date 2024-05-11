<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<div class="card text-center">
  <div class="card-header">
    Purchase Complete!!
  </div>
  <div class="card-body">
    <h2 class="card-title">Thank You,<?php  echo$_SESSION['name']?>!</h2>
    <p class="card-text">Thank you for being a part of boiwala.You mean a lot to us.We hope we have been able to give you the best service</p>
    <a href="searchpage.php" class="btn btn-primary">OK</a>
  </div>
</div>

</body>
<?php include 'footer.php';
?>
</html>