<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style_admin.css" />
    <title></title>
  </head>
  <body>
     <?php
    session_start();
    include ('config.php');
    if($_SERVER["REQUEST_METHOD"]=="POST"){

      $Username =  $_POST['Username'];
      $Password = $_POST['Password'];
    
      $query = "select * from delivery where Username = '$Username' AND Password = '$Password'";
      $result = mysqli_query($conn,$query);
      $data = $result->fetch_assoc() ;
      if( mysqli_num_rows($result) ){
        

        header ("Location: User_Delivery.php");


      }
      else{
                         echo '<script>alert("Login unsuccessful!")</script>' ;
                   }



    }
    // if(isset($_POST['login'])){
    //     $Username =  $_POST['Username'];
    //     $Password = $_POST['Password'];

    //     if(!empty($Username) && !empty($Password)){
    //         $query = "select * from admin where Username = '".$Username."' AND Password = '".$Password."' limit 1";
    //         $result = mysqli_query($conn,$query);
    //         $data = $result->fetch_assoc() ;
    //             if($result && mysqli_num_rows($result) > 0){
    //                 $_SESSION['Username'] = $data['Username'];
    //                 $_SESSION['Password'] = $data['Password'];

    //                 header("Location : test.php");
    //                 die;
    //             }
    //             else{
    //                 echo '<script>alert("Login unsuccessful!")</script>' ;
    //             }
    //     }

    // }


    ?>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
            <form  action="" class="sign-in-form" method="POST">
              <h2 class ="title">Delivery</h2>
           
                <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name = "Username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="Password" name ="Password" placeholder="Password" />
            </div>
              <input type="submit" name = "login" value="login" class="btn solid" />
            </form>
            <div class="move"><p class="social-text">Not a delivery incharge?<a href="login.php"><button class="register">Login</button></a></p>
            
            
              
          
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            
          </div>
          
        </div>
        <div class="panel right-panel">
          
        </div>
      </div>
    </div>

   
   
  </body>
</html>