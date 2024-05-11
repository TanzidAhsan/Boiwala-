<?php
session_start();
include ('config.php');
$email=$_SESSION['Email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@700&family=Heebo&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="mybooks.css">
    <style>.overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: -1;
      }</style>
</head>
<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<div class="overlay"></div>
    <?php include 'header_seller.php'; ?>

    <div class="container my-5">
    <h1 class="text-center" style="color: #F2F0E4;">My Books</h1>


        <div class="row">
            <?php
            $sql="SELECT *
            FROM `books`
            WHERE seller_id='$email'";
            $result = mysqli_query($conn,$sql);

            while($data = $result->fetch_assoc()){
                //$num= $data['n'];
                $name=$data['name'];
                $img=$data['img'];
                echo "
                <div class='col-md-4'>
                    <div class='card mb-4'>
                        <img src='./uploaded_image/$img' class='card-img-top'>
                        <div class='card-body'>
                            <h3 class='card-title'>$name</h3>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>
        </div>
    </div>

    <?php include 'footer_seller.php'; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-base.min.js" integrity="sha384-AO/A9uUpIeE3KjvyzNJZpPr0ZuI0l8K7VUN1siy/dLfdVn0z+qEjKZwOiJSxUUhJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
