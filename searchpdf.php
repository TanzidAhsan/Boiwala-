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

$sname= $_SESSION['name'];
$email=$_SESSION['Email'];

 ?>
<?php include 'header2.php'; ?>




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
      <input type="text" name="search" placeholder="search products..." class="box">
      <input type="submit" name="submit" value="search" class="btn">
   </form>
</section>

<section class="products" style="padding-top: 0;">

   <div class="box-container">
   <?php

   include('config.php');

      if(isset($_POST['submit'])){
         $search_item = $_POST['search'];
         $select_products = mysqli_query($conn, "SELECT * FROM books WHERE name LIKE '%{$search_item}%'") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){

          $bid=$fetch_product['isbn'];
          $name=$fetch_product['name'];
          $price= $fetch_product['price'];


   ?>
   <!--<form action="manage_cart.php" method="post" class="box">-->
      <!--<img src="Boiwala/uploaded_image/<?php echo $fetch_product['img']; ?>" alt="" class="images">
      <td> <img src="uploded_image/<? $fetch_product['img'] ?>"></td>-->
       <img src="./uploaded_image/<?=$fetch_product['img'];?>">
      
      

      <div class="name"><?php echo $fetch_product['name']; ?></div>
      <div class="price"><?php echo $fetch_product['price']; ?>/-</div>
      <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
      <input type="text"  class="qty" name="product_quantity" min=" 1" value=" ">
     <?php echo"<a href='cartapi.php?id=$bid&&bname=$name&&sname=$sname&&email=$email&&price=$price'> <button type='submit' class='btn' name='add_to_cart'>Add to Cart</button></a>" ?>
      <input type="hidden" value="Bag 1" name="Item_Name">
      
   <!--</form>-->
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
   <nav>

   <ul>
      <li><?php echo"<a href='categories.php?id=1'>Novel</a>"?></li>
      <li> <?php echo"<a href='categories.php?id=2'>Fiction</a>" ?></li>
      <li><?php echo"<a href='categories.php?id=3'>Bangla</a>"?></li>
      <li><?php echo"<a href='categories.php?id=4'>Education</a>"?></li>
      <li><?php echo"<a href='categories.php?id=5'>Story</a>"?></li>




   </ul>
   </nav>






</div>







</body>
<?php include 'footer.php';
?>
</html>