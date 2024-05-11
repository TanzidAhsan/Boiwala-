<?php
session_start(); 
include ('config.php');
$name= $_SESSION["bname"];
error_reporting(E_ERROR | E_PARSE);
$nam=$_GET['name'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Shipping Details</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  </head>
  <body>



     

    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Shipping Details</h1>
          </div>
          <div class="panel-body">
            <form action="connect.php" method="post">
              <div class="form-group">
                <label for="Full_name">Full_name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Full_name"
                  name="Full_name"
                  value="<?php  echo$_SESSION['name'] ?>"
                />
              </div>
              <div class="form-group">
                <label for="Email_address">Email_address</label>
                <input
                  type="text"
                  class="form-control"
                  id="Email_address"
                  name="Email_address"
                  value="<?php  echo$_SESSION['Email'] ?>"
                />
              </div>
              <div class="form-group">
                <label for="Phone_number">Phone_number</label>
                <input
                  type="text"
                  class="form-control"
                  id="Phone_number"
                  name="Phone_number"
                />
              </div>
              <div class="form-group">
                <label for="Age">Age</label>
                <input
                  type="text"
                  class="form-control"
                  id="Age"
                  name="Age"
                />
              </div>
              <div class="form-group">
                <label for="Gender">Gender</label>
                <div>
                  <label for="male" class="radio-inline"
                    ><input
                      type="radio"
                      name="Gender"
                      value="m"
                      id="male"
                    />Male</label
                  >
                  <label for="female" class="radio-inline"
                    ><input
                      type="radio"
                      name="Gender"
                      value="f"
                      id="female"
                    />Female</label
                  >
                  <label for="others" class="radio-inline"
                    ><input
                      type="radio"
                      name="Gender"
                      value="o"
                      id="others"
                    />Others</label
                  >
                </div>
              </div>
              
              <div class="form-group">
                <label for="book_name">book_name</label>
                <input
                  type="text"
                  class="form-control"
                  id="book_name"
                  name="book_name"
                  value="<?php  echo$_SESSION['bname'] ?>"
                />
 









              </div>

             
              <div class="form-group">
                <label for="Address">Address</label>
                <input
                  type="text"
                  class="form-control"
                  id="Address"
                  name="Address"
                />
              </div>
              <div class="form-group">
                <label for="Country">Country</label>
                <select class="" name="Country" required>
        
        <option value="" selected hidden>Country</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
        <option value="Bangladesh">Bangladesh</option>
        <option value="Japan">Japan</option>
        <option value="China">China</option>
        <option value="India">India</option>
        <option value="Sri lanka">Sri lanka</option>
        <option value="Nepla">Nepal</option>
        <option value="Spain">Spain</option>


      </select>
              </div>
              <div class="form-group">
                <label for="City">City</label>
                <input
                  type="text"
                  class="form-control"
                  id="City"
                  name="City"
                />
              </div>
              <div class="form-group">
                <label for="Region">Region</label>
                <input
                  type="text"
                  class="form-control"
                  id="Region"
                  name="Region"
                />
              </div>
              <div class="form-group">
                <label for="Postal_code">Postal_code</label>
                <input
                  type="text"
                  class="form-control"
                  id="Postal_code"
                  name="Postal_code"
                />
              </div>

              <div class="form-group">
                <label for="price">price</label>
                <input
                  type="text"
                  class="form-control"
                  id="price"
                  name="price"
                  value="Gift"
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            

            </form>
            
          </div>
          <div class="panel-footer text-right">
            <small>&copy; Boiwala</small>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>
