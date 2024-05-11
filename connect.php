<?php
  $Full_name = $_POST['Full_name'];
  $Email_address = $_POST['Email_address'];
  $Phone_number = $_POST['Phone_number'];
  $Age = $_POST['Age'];
  $Gender =$_POST['Gender'];
  $Address = $_POST['Address'];
  $Country = $_POST['Country'];
  $City = $_POST['City'];
  $Region = $_POST['Region'];
  $Postal_code = $_POST['Postal_code'];
  $book_name   = $_POST['book_name'];
  $price =$_POST['price'];

  
  $conn = new mysqli('localhost','root','','boi');

  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
    
    $stmt = $conn->prepare("insert into shipping_details(Full_name, Email_address,Phone_number,Age,Gender,Address,Country,City,Region,Postal_code,book_name,price) values(?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("ssidsssssisi", $Full_name, $Email_address, $Phone_number, $Age, $Gender, $Address,$Country,$City,$Region,$Postal_code,$book_name,$price);
    $execval = $stmt->execute();
    echo $execval;
    header("Location: Exitpage.php");
    $stmt->close();
    $conn->close();
  }
  
 $html="<table><tr><td>Full_name</td><td>$Full_name</td></tr><tr><td>Email_address</td><td>$Email_address</td></tr><tr><td>Phone_number</td><td>$Phone_number</td></tr><tr><td>book_name</td><td>$book_name</td></tr><tr><td>Address</td><td>$Address</td></tr><tr><td>City</td><td>$City</td></tr><tr><td>Region</td><td>$Region</td></tr></table>";
  
  include('smtp/PHPMailerAutoload.php');
  $mail=new PHPMailer(true);
  $mail->isSMTP();
  $mail->Host="smtp.gmail.com";
  $mail->Port=587;
  $mail->SMTPSecure="tls";
  $mail->SMTPAuth=true;
  $mail->Username="mahsan201295@bscse.uiu.ac.bd";
  $mail->Password="apbnpsc2017dipto";
  $mail->SetFrom("mahsan201295@bscse.uiu.ac.bd");
  $mail->addAddress(" $Email_address");
  $mail->IsHTML(true);
  $mail->Subject="New order has arrived";
  $mail->Body=$html;
  $mail->SMTPOptions=array('ssl'=>array(
    'verify_peer'=>false,
    'verify_peer_name'=>false,
    'allow_self_signed'=>false
  ));
  if($mail->send()){
    //echo "Mail send";
  }else{
    //echo "Error occur";
  }
  

 


?>