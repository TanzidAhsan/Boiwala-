<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search Page</title>
   <style> .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: -1;}</style>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- Bootstrap CSS CDN link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

   <!-- custom css file link  -->
   
</head>
<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<div class="overlay"></div>
<?php include 'header.php';

session_start();
 ?>
<?php include 'header_exchange.php'; ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-12 col-lg-8">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title text-center"><a href="test.php" class="text-decoration-none text-dark">BOIWALA</a></h1>
          <hr>
          <form action="" method="post">
            <!-- Search Form -->
          </form>
          <hr>
          <h2 class="text-center">Available Books:</h2>
          <div class="row">
            <?php

            include('config.php');
            

            $sql="SELECT * FROM exchange ";
            $result = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result)){

            $name=$row['name'];
            $img=$row['img'];
            $price=$row['price'];
            $catagory=$row['Catagory'];

            ?>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card mb-4">
                <img src="uploaded_image/<?php echo $img; ?>" class="card-img-top" alt="<?php echo $name; ?>">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $name; ?></h5>
                  <p class="card-text"><?php echo $catagory; ?></p>
                  <p class="card-text"><?php echo $price; ?></p>
                  <a href="exchange.php?name=exchange " class="btn btn-primary">Exchange Now</a>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS CDN link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
<?php include 'footer.php'; ?>
</html>
