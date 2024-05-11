 <?php
if(isset($_POST['Join Us'])){
 header ("Location: searchpage.php");
}
?>
  
<?php
if(isset($_POST['Join Us'])){
 header ("Location: upload.php");
}
?>



<!DOCTYPE html>
<html lang="en">


  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style1.css" />
    <title></title>
  </head>
 
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="display.php" class="sign-in-form" method="POST">
            <h2 class="title">Be a Buyer</h2>
              <p class="text">

        Buying book is a investment towards your future.
            </p>

            
            
            
            <input type="submit" value="Join Us" class="btn solid"/>
          </form>
          
        </div>
      </div>


      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
             <form action="seller_fst.php" class="sign-in-form" method="POST">
            <h3 class="size">Be a Seller</h3>
            <p>
              Be a part of our exclusive book collection.Join the seller panel to share your book collection with the world.
            </p>
             <input type="submit" value="Join Us" class="btn solid"/>
         </form>
          
          </div>
        </div>
        <div class="panel right-panel">
          
          
        </div>
      </div>
    </div>

    
  </body>

 
</html>

 