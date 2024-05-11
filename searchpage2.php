<!DOCTYPE html>





<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>search page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   

</head>
<body>
</div>
<?php include 'header.php';
session_start();
 ?>
<?php include 'header_exchange.php'; ?>




<h1 class="text-center fw-bold"><a href="New login page.php" class="text-decoration-none text-blue">Boiwala</a></h1>

<section class="search-form">
   <form action="" method="post">
   </form>
</section>

<section class="products" style="padding-top: 0;">

   <div class="box-container">
   <?php

   include('config.php');
   

      if(isset($_POST['submit'])){
         $search_item = $_POST['search'];
         $select_products = mysqli_query($conn, "SELECT * FROM books WHERE name LIKE '%{$search_item}%' ") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){

          $bid=$fetch_product['isbn'];

   ?>
   <form action="manage_cart_exchange.php" method="post" class="box">
      <!--<img src="Boiwala/uploaded_image/<?php echo $fetch_product['img']; ?>" alt="" class="images">
      <td> <img src="uploded_image/<? $fetch_product['img'] ?>"></td>-->
       <img src="./uploaded_image/<?=$fetch_product['img'];?>">
      
      

      <div class="name"><?php echo $fetch_product['name']; ?></div>
      <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
      
      
      <button type="submit" class="btn" name="add_to_cart">Add to Cart</button>
      <input type="hidden" value="Bag 1" name="Item_Name">
      
   </form>
   <?php
            }
         }else{
            echo '<p class="empty">no result found!</p>';
         }
      }else{

         echo '<p class="empty"></p>';


      }
   ?>
   
   
  

</section>











<!-- custom js file link  -->
<script src="js/script.js"></script>
<div class="fit">
</div>
<div>





</div>



<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Catagory</th>
    </tr>
  </thead>

  <?php



$sql="SELECT * FROM books ";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){

$name=$row['name'];
$img=$row['img'];
$price=$row['price'];
$catagory=$row['Catagory'];



?>
  <tbody>
    <tr>
      
      <td><?php echo$name?></td>
      <td><img src='uploaded_image/<?php echo$img; ?>' alt=''>  </img>  <br> <?php 
      $_SESSION["bname"]=$name;
      
      echo"<a href='index.php?name=$name'><button type='button' class='btn btn-dark' >Buy Now</button></a>"?></td>
      <td><?php  echo$price ?></td>
      <td><?php echo$catagory?></td>
    </tr>
   
    
  </tbody>
  <?php }  ?>
</table>


</body>
<?php include 'footer.php';
?>
</html>