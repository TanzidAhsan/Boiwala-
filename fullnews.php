<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Full News</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style media="screen">
      img{
        width: 100%;
        max-height: 300px;
        object-fit: cover;
      }
      .div1{
        margin: 50px auto;
        max-width: 800px;
      }
      .div2{
        margin-top: 20px;
        font-size: 20px;
      }
      p{
        font-size: 20px;
        font-weight: bold;
      }
      body {
      background-color: azure;
    }
    </style>
  </head>
  <?php include 'header2.php';?>
  <body>
  
    <?php
    include 'db2.php';

    $id=$_POST['id'];

    $sql="SELECT * from news where id='$id'";
    $query=mysqli_query($conn,$sql);

    while ($info=mysqli_fetch_array($query)) {
      ?>
        <div class="div1">
          <img src="image/<?php echo $info['image']; ?>" alt="">
          <p><?php echo $info['date'];?></p>
          <div class="div2">
            <?php echo $info['news']; ?>
          </div>
        </div>
      <?php
    }
    ?>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
      integrity="sha384-EvGXJWxYBJjiLJfSP1smf7M75yJzh/0GMpROtTJgGxvTtZ0UXBSE9NddFiL+LDe"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
