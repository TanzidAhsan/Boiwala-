<?php
session_start();
 
error_reporting(E_ERROR | E_PARSE);
 
?>









<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boiwala</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style media="screen">
      body{ 
        padding: 0px;
        margin: 0px;
      }
     
      ul{
        list-style-type: none;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
      }
      li{
        margin: 25px;
      }
      p{
        font-weight: bold;
        max-width: 380px;
        font-size: 18px;
        height: 30px;
      }
      .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: -1;
      }
      .footer {
        background-color: #f5f5f5;
        padding: 0px;
        text-align: center;
      }
    </style>
  </head>
  <body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div class="overlay"></div>
    <?php include 'header_video.php' ?>
    <h1 class="text-center fw-bold"><a href="test.php" class="text-decoration-none text-white">Boiwala</a></h1>



    <?php 
 $val_id=urlencode($_POST['val_id']);
$store_id=urlencode("boiwa6449335262717");
$store_passwd=urlencode("boiwa6449335262717@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;

    echo "$amount";

	# MYSQL DATABASE CONNECTION DETAILS
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "boi";

	 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the SQL statement
$sql = "INSERT INTO transactions (tran_id, tran_date, card_type, amount, card_brand, card_no)
        VALUES ('$tran_id', '$tran_date', '$card_type', '$amount', '$card_brand', '$card_no')";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    echo " ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

} else {

	echo "Failed to connect with SSLCOMMERZ";
}
?>



























    
    <div class="container">
      <ul class="row">
        <?php
          include 'config.php';
          $sql1="SELECT * from video";
          $query1=mysqli_query($conn,$sql1);
          while ($info=mysqli_fetch_array($query1)) {
        ?>
        <li class="col-md-4 col-sm-6 col-xs-12">
          <div class="thumbnail">
            <video src="video/<?php echo $info['video']; ?>" width="100%" poster="thumbnail/<?php echo $info['thumbnail']; ?>" controls></video>
            <div class="caption">
              <p><?php echo $info['title']; ?></p>
            </div>
          </div>
        </li>
        <?php
          }
           

        ?>
      </ul>
    </div>

    <div class="footer">
    <footer class="footer bg-dark text-white">
  <div class="container">
    <div class="row">
     
      <div class="col-md-6">
        <h5 class="text-uppercase mb-6 font-weight-bold text-warning">Useful Links</h5>
        <ul class="list-unstyled">
          <li><a href="New login page.php" class="text-white" style="text-decoration: none;">Boiwala</a></li>
          <li><a href="help.php" class="text-white" style="text-decoration: none;">Help</a></li>
          <li><a href="exchange.php" class="text-white" style="text-decoration: none;">Exchange</a></li>
         

      
    </div>

    <div class="col-md-6">
        <h5 class="text-uppercase mb-6 font-weight-bold text-warning">Contacts</h5>
        <ul class="list-unstyled">
        <p>
                    <i class="fas-fa-home mr-6"></i>Madani Aveneu,Dhaka,Bangladesh



                </p>
                <p>
                    <i class="fas-fa-envelope mr-6"></i>saifulislamshovon056@gmail.com



                </p>
                <p>
                    <i class="fas-fa-phone mr-6"></i>01770149556



                </p>
                <div class="col-md-6">
        <h5 class="text-uppercase mb-6 font-weight-bold text-warning">Our Moto</h5>
        <ul class="list-unstyled">
        <p>
                    <i class="fas-fa-home mr-6"></i>Search,Learn,Grow



                </p>
      
    </div>

         

      
    

    <!-- Add Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
