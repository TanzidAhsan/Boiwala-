<?php include 'filesLogic.php';
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Files Upload and Download</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<!-- Custom CSS -->
	<style>
		 body {
    color: blue; 
  }
		.overlay {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: rgba(0, 0, 0, 0.6);
			z-index: -1;
		}
    .footer {
  background-color: #f5f5f5;
  padding: 20px 0; /* Add 20px of padding to top and bottom */
  text-align: center;
}
body {
    color: blue; 
  }



	</style>
</head>

<body  style = "background-image: url(bnn.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  min-height: 100vh; ">
<div class="overlay"></div>
<?php include 'header_video.php'; ?>
<h1 class="text-center fw-bold"><a href="New login page.php" class="text-decoration-none text-white">Boiwala</a></h1>

<div class="container">
    <div class="row">
        <form action="indexpdf.php" method="post" enctype="multipart/form-data" class="col-md-6 col-md-offset-3">
            <h3 style= "color: blue;">Upload File</h3>
            <div class="form-group">
                <label for="myfile">File</label>
                <input type="file" id="myfile" name="myfile" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="username">User</label>
                <input type="text" id="username" name="username" class="form-control" value="<?php echo $_SESSION['Email'] ?>" readonly>
            </div>
            <button type="submit" class="btn btn-success" name="save">Upload</button>
        </form>
    </div>
</div>


<div class="footer">
    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-uppercase mb-6 font-weight-bold text-warning">Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="New login page.php" class="text-white" style="text-decoration: none;">Boiwala</a></li>
                        <li><a href="help.php" class="text-white" style="text-decoration: none;">Help</a></li>
                        <li><a href="exchange.php" class="text-white" style="text-decoration: none;">Exchange</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5 class="text-uppercase mb-6 font-weight-bold text-warning">Contacts</h5>
                    <ul class="list-unstyled">
                        <p><i class="fas-fa-home mr-6"></i>Madani Aveneu,Dhaka,Bangladesh</p>
                        <p><i class="fas-fa-envelope mr-6"></i>saifulislamshovon056@gmail.com</p>
                        <p><i class="fas-fa-phone mr-6"></i>01770149556</p>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="text-uppercase mb-6 font-weight-bold text-warning">Our Moto</h5>
                    <ul class="list-unstyled">
                        <p><i class="fas-fa-home mr-6"></i>Search,Learn,Grow</p>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
