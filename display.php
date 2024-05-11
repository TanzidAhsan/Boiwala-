 
<?php
session_start();

include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Boiwala</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
    }

    .card {
      margin-bottom: 30px;
    }

    .card-img-top {
      object-fit: cover;
      height: 80%;
      width: 80%;
      
    }

    .card-title {
      font-size: 1.2rem;
    }

    .card-text {
      font-size: 1rem;
    }

    .btn-add-to-cart {
      margin-top: 10px;
    }

    .footer {
      background-color: #343a40;
      color: #fff;
      padding: 10px 0;
    }
    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: -1;}
  </style>
</head>

<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
  <?php include 'header2.php'; ?>
  <div class="overlay"></div>
  <h1 class="text-center fw-bold"><a href="New login page.php" class="text-decoration-none text-white">Boiwala</a></h1>

  <div class="container mt-5">
    <div class="row">

      <?php
      $sql = "SELECT name, img, price FROM `books`";
      $result = mysqli_query($conn, $sql);

      while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
        $img = $row['img'];
        $price = $row['price'];
      ?>

        <div class="col-md-4">
          <div class="card">
            <img src="uploaded_image/<?php echo $img; ?>" alt="<?php echo $name; ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"><?php echo $name; ?></h5>
              <p class="card-text"><?php echo '$' . $price; ?></p>
              <form action="index2.php" method="post">
                <input type="hidden" name="id" value="<?php echo $name; ?>">
                <input type="hidden" name="price" value="<?php echo $price; ?>">
                <button type="submit" class="btn btn-primary btn-add-to-cart">Add to Cart</button>
              </form>
            </div>
          </div>
        </div>

      <?php } ?>

    </div>
  </div>

  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   
</html>