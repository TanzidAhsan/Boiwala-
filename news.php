<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>News Sharing Site</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style media="screen">
     .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: -1;}
    body {
      background-color: #707070;
    }

    .card {
      margin-bottom: 15px;
      height:99% ;
    }

    img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }
  </style>
</head>

<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;"
>
<div class="overlay"></div>

  <?php include 'header2.php' ?>
  <h1 class="text-center fw-bold"><a href="test.php" class="text-decoration-none text-white">Boiwala</a></h1>

   
  <br><br>

  <div class="container">
    <div class="row">

      <?php
      include 'db2.php';

      $sql = "SELECT * from news order by id desc";
      $query = mysqli_query($conn, $sql);

      while ($info = mysqli_fetch_array($query)) {
        ?>

        <div class="col-md-4">
          <div class="card">
            <img src="image/<?php echo $info['image']; ?>" alt="">
            <div class="card-body">
              <h5 class="card-title"><?php echo $info['news']; ?></h5>
              <p class="card-text"><?php echo formatDate1($info['date']) . ' ' . formatDate2($info['date']) ?></p>
              <form class="" action="fullnews.php" method="post">
                <input type="text" name="id" value="<?php echo $info['id']; ?>" hidden>
                <button class="btn btn-primary" type="submit">Read Full News</button>
              </form>
            </div>
          </div>
        </div>

      <?php } ?>

    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
