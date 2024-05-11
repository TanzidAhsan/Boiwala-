<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style2.css" />
    <title>Login</title>
  </head>
  <body>
    <?php
    session_start();
    include ('config.php');
    if(isset($_POST['login'])){
        $Email = mysqli_real_escape_string($conn, $_POST['Email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if(!empty($Email) && !empty($password)){
            $query = "select * from users where Email = '".$Email."' AND password = '".$password."' limit 1";
            $result = mysqli_query($conn,$query);
            $data = $result->fetch_assoc() ;
                if($result && mysqli_num_rows($result) > 0){
                    $_SESSION['Email'] = $data['Email'];
                    $_SESSION['Password'] = $data['password'];
                    $_SESSION['name']= $data['name'];
                    $_SESSION['user_id']= $data['user_id'];

                    header("Location: New login page.php");
                    die;
                }
                else{
                    echo '<script>alert("Log-in unsuccessful!")</script>' ;
                }
        }

    }


    ?>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" class="sign-in-form" method="POST">
            <h2 class="title">Log in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="Email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="login" value="Log in" class="btn solid" />
            <p class="social-text">Don't have an account? <a href="signup.php">Sign up</a></p>
            <p class="social-text">Log in as admin? <a href="Admin_login.php">Admin</a></p>
            <p class="social-text">Delivery Incharge? <a href="Delivery.php">Delivery</a></p>
          </form>
         
        </div>
      </div>
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New to our site?</h3>
            <p>
              Create an account today and enjoy all the benefits of being a
              registered user.
            
            
          </div>
          <img src="" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Welcome back!</h3>
            <p>
              Log in to your account to access all the features and benefits of
              our site.
            </p>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
  </html>
