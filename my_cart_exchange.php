<?php include 'header_exchange.php'; 
session_start();
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
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="text-center">
  <?php 
  $total=0;
  if(isset($_SESSION['cart']))
  {
    foreach($_SESSION['cart'] as $key => $value)
     {
        
        echo"
        <tr>
        <td>1</td>
        <td>$value[product_name]</td>
        <td>
        <form action='manage_cart_exchange.php' method='POST'>
        <button name = 'remove_item' class='btn-sm btn-outline-danger'>REMOVE</button>
        <input type='hidden' name='product_name' value='$value[product_name]'>
        
        
        
        </form>
        </td>
        </tr>
        ";

     }

  }


  
  
  
  
  ?>
  
    



</tbody>
</table>




            </div>


        </div>
        <div class="col-lg-4">


        <div class="border bg-light rounded p-4">


        <br>
        <form action="index.php">
          <button class="btn btn-primary btn-block">Confirm Exchange</button>
        </form>
        </div>
        </div>



    </div>
    
</body>
<?php include 'footer.php';
?>
</html>