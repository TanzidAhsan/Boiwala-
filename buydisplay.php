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
<?php include 'header_seller.php'; ?>




<div class="heading">
   <!--<h3>search page</h3>-->

   <head> <h1 style="text-align: center; display: block;
  font-size: 4em;
  margin-top: 0em;
  margin-bottom: 0em;
  margin-left: 1;
  margin-right: 1;
  font-weight: thick;"><a href="test.php" class="brand-logo brand-text"> BOIWALA</a></h1> </head>
</div>


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
         $select_products = mysqli_query($conn, "SELECT * FROM books");
         if(mysqli_num_rows($select_products) > 0){
         
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



$sql="SELECT * FROM books order by isbn";
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