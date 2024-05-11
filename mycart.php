<?php include 'header2.php'; 
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
    <title>Cart</title>
</head>
<body>
<h1 class="text-center fw-bold"><a href="test.php" class="text-decoration-none text-blue">Boiwala</a></h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h1>MY CART</h1>



            </div>
  <div class="col-lg-8">
            <table class="table">
  <thead class="text-center">
    <tr>
      
      <th scope="col">Book</th>
      <th scope="col">Price</th>
    
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">

  <?php
$total=0;
$zname="";


$sql="SELECT * FROM `cart` WHERE selerid='$email'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){

$name=$row['bname'];
$price=$row['price'];
$total=$total+$row['price'];
$zname=$zname.$row['name'];
$id=$row['id'];
        




?>

<tbody>
    <tr>
      
      <td><?php echo$name?></td>
      
      <td><?php  echo$price ?></td>
      <td><?php echo" <a  href='removeapi.php?id=$id'><button type='button'class='btn btn-danger'>Remove</button></a>" ?> </td>
    </tr>
   
    
  </tbody>
  <?php } ?>
</table>

























  <?php 
  // $total=0;
  // $name="";
  // if(isset($_SESSION['cart']))
  // {
  //   foreach($_SESSION['cart'] as $key => $value)
  //    {
  //     $total=$total+$value['product_price'];
  //     $name=$name.$value['product_name'];
        
  //       echo"
  //       <tr>
  //       <td>1</td>
  //       <td>$value[product_name]</td>
  //       <td>$value[product_price]</td>
  //       <td><input class = 'text-center' type ='number' value ='$value[Quantity]' min='1' max='10'></td>
  //       <td>
  //       <form action='manage_cart.php' method='POST'>
  //       <button name = 'remove_item' class='btn-sm btn-outline-danger'>REMOVE</button>
  //       <input type='hidden' name='product_name' value='$value[product_name]'>
        
        
        
  //       </form>
  //       </td>
  //       </tr>
  //       ";

    // }

  //}


  
  
  
  
  ?>
  
    



</tbody>
</table>




            </div>


        </div>
        <div class="col-lg-4">


        <div class="border bg-light rounded p-4">


        <h4>Total:</h4>
        <h5 class="text-right"><?php echo $total?></h5>
        <br>
        <form action="index2.php">
          <?php
          
           echo"<a href='index2.php'><button class='btn btn-primary btn-block'>Confirm order</button></a>" ?>
        </form>
        </div>
        </div>



    </div>
    
</body>
<?php include 'footer.php';
?>
</html>