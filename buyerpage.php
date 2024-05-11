 <?php include 'header2.php'; ?>
<?php
 

include ('config.php');
 

?>

















<!doctype html>
<html lang="en">
  <head>
  <style>
      buttonbtn.btn-dark{
        margin-bottom:30px;
        
      }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>
  <body>
  <h2 >   All items </h2>
    

  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
<?php



$sql="SELECT * FROM 'books'";
$result = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result)){

$name=$row['name'];
$img=$row['img'];
$price=$row['price'];




?>





  <tbody>
    <tr>
      
      <td><?php echo$name?>  </td>
      <td><img src='uploaded_image/<?php echo$img; ?>' alt=''>     </img><br><?php echo"<a href='cartapi.php?id=$id&&bname=$name&&sname=$sname&&email=$email&&price=$price'><button type='button' class='btn btn-dark' >Add to cart</button>"; ?></td>
      <td><?php  echo$price ?></td>
    </tr>
    
   
  </tbody>
  <?php } ?>
</table>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
  <?php include 'footer.php';
?>
</html>