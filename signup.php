 <?php 

session_start();
include ('config.php');
if(isset($_POST['register'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $Email = mysqli_real_escape_string($conn,$_POST['Email']);
  $Address = mysqli_real_escape_string($conn, $_POST['Address']);
  $Phone = mysqli_real_escape_string($conn,$_POST['Phone']);


  // check if email already exists
  $check_Email = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM users WHERE Email = '$Email'"));


  if($check_Email > 0){
      
echo '<script>alert("User already exist!")</script>';

  }else{
    $sql = "INSERT INTO users (name,password,Email,Address,Phone)
    VALUES ('$name','$password','$Email','$Address','$Phone')";
    $result = mysqli_query($conn, $sql);  
    if($result){
      $_POST['name'] = '';
      $_POST['password'] = '';
      $_POST['Email']='';
      $_POST['Address'] = '';
      $_POST['Phone'] = '';
      echo '<script>alert("Signup successful!")</script>';
      header("Location: login.php");
    }else{
      echo '<script>alert("Signup failed!")</script>';
    }
}
}

  // if($_SERVER['REQUEST_METHOD'] == 'POST')
  // {
  //  //something was posted
  //  $name = $_POST['name'];
  //  $Upassword = $_POST['password'];

  

  //    //write to database
  //  $query = "insert into users (name,password) values ('$name','$Upassword')";
  //  mysqli_query($data, $query);

  //   header("Location: login.php");
  //   die;
    
  // }

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
    <link rel="stylesheet" href="style3.css" />
    <title></title>
  </head>
  <body>
      
    <div class="container">
    <div class="forms-container">
        <div class="signin-signup">
      
          <form action="" class="sign-in-form" method="POST">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name = "name" placeholder="Username">
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name = "Email" placeholder="Email">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name = "password" placeholder="Password">
            </div>

            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name = "Address" placeholder="Address">
            </div>


            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name = "Phone" placeholder="Phone">
            </div>

 
            
            <input type="submit" name = "register" value="register" class="btn solid">
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.google.com/" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
            </div>
          </form>
          </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          
        </div>
      </div>
    </div>

  </body>
</html>



