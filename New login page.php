<?php
 
 
error_reporting(E_ERROR | E_PARSE);
 
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
        background: url(bnn.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        padding: 0;
         
    }

    .swiper {
      width: 40%;
      height: 100%;
      justify-content: center;
    }

    .swiper-slide {
    background: hsla(195, 91%, 32%, 0.403);
    border-radius: 20px;
    position: relative;
    margin-top: 85px;
    width: 120px;
    height: 440px;
    justify-content: center;
    }

    .swiper-slide img {

    }

    .swiper {
      margin-left: auto;
      margin-right: auto;
    }
    .upper{
        height: 80%;
        background: #C8C8C8;

    }
    .upper img{
        height: 70%;
    width: 70%;
    object-fit: cover;
    border-radius: 50%;
    border: 3px solid grey;
    margin-left: 90px;
    margin-top: 70px;
    }
    .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: -1;}

            h1{
              -webkit-text-stroke: 4px solid black;
              color:bisque;
              text-align: center;
              text-decoration: none;
              -webkit-text-fill-color: white;
               
            }

            h1 a {
              text-decoration: none;
            }

            h1 :hover{
              color: blue;
            }
  </style>
</head>

<body>
<div class="overlay"></div>
<?php  include 'header2.php';?>
<h1><a href="test.php">Boiwala</a></h1>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="upper">
            <a href="seller_fst.php"><img src="booksell.jpg" class="card-img-top" alt="..."></a>
        </div>
    <h5 class="card-title" style="font-weight: 1200;
    margin-left: 20px;
    font-size: 20px;
    margin-top: 20px;
    color: white;">Be a Seller</h5>
    <p style="font-weight: 500;font-size: 16px;margin-left: 20px;margin-top: -14px;color: white;">Sell your book to our website at the best price</p>
      </div>
      <div class="swiper-slide">
        <div class="upper">
            <a href="display.php"><img src="buy book.jpg" class="card-img-top" alt="..."></a>
        </div>
    <h5 class="card-title" style="font-weight: 1200;
    margin-left: 20px;
    font-size: 20px;
    margin-top: 20px;
    color: white;">Be a Buyer</h5>
    <p style="font-weight: 500;font-size: 16px;margin-left: 20px;margin-top: -14px;color: white;">Buy  book from our website at a reasonable price</p>
      </div>

      
      <div class="swiper-slide">
        <div class="upper">
            <a href="exchangehome.php"><img src="exchange2.jpg" class="card-img-top" alt="..."></a>
        </div>
    <h5 class="card-title" style="font-weight: 1200;
    margin-left: 20px;
    font-size: 20px;
    margin-top: 20px;
    color: white;">Exchange Books</h5>
    <p style="font-weight: 500;font-size: 16px;margin-left: 20px;margin-top: -14px;color: white;">You can now contact  to exchange your books </p>
      </div>
      <div class="swiper-slide">
        <div class="upper">
            <a href="indexsubscribe.php"><img src="note.jpg" class="card-img-top" alt="..."></a>
        </div>
    <h5 class="card-title" style="font-weight: 1200;
    margin-left: 20px;
    font-size: 20px;
    margin-top: 20px;
    color: white;">Educational Materials</h5>
    <p style="font-weight: 500;font-size: 16px;margin-left: 20px;margin-top: -14px;color: white;">Now you can not only help others with your notes but at the same time you can accure knowledge & ideas  from others</p>
      </div>

      <div class="swiper-slide">
        <div class="upper">
            <a href="news.php"><img src="blogs.jpg" class="card-img-top" alt="..."></a>
        </div>
    <h5 class="card-title" style="font-weight: 1200;
    margin-left: 20px;
    font-size: 20px;
    margin-top: 20px;
    color: white;">Blog Sharing</h5>
    <p style="font-weight: 500;font-size: 16px;margin-left: 20px;margin-top: -14px;color: white;">Now you can upload & find educational blogs</p>
      </div>
      <div class="swiper-slide">
        <div class="upper">
            <a href="help.php"><img src="complain2.jpg" class="card-img-top" alt="..."></a>
        </div>
    <h5 class="card-title" style="font-weight: 1200;
    margin-left: 20px;
    font-size: 20px;
    margin-top: 20px;
    color: white;">Feedback</h5>
    <p style="font-weight: 500;font-size: 16px;margin-left: 20px;margin-top: -14px;color: white;">Any problems ? </p>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</body>
<?php include 'footer.php'?>

</html>


