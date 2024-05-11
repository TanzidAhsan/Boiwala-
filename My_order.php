 









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@700&family=Heebo&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="mybooks.css">
    </head>

    











   



<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
<?php include'header_order.php';
 include 'header_buyer.php';
 
include ('config.php');
$email=$_SESSION['Email'];

 ?>

<div>


<h1>My Order</h1>
</div>


 
    <?php
  $sql="SELECT *
  FROM `shipping_details`
  WHERE Email_address='$email'";
  $result = mysqli_query($conn,$sql);
  
      while($data = $result->fetch_assoc()){
         //$num= $data['n'];
         $book_name=$data['book_name'];

        echo"  
      
     
         <div class='card-body'>
    <h5 class='card-title'>$book_name</h5>
           
        </div>
      </div>";
      }
      ?>
</body>
<?php include 'footer_seller.php';
?>
</html>