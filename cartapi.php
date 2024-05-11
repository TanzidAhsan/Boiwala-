<?php
 include ('config.php');
$id=$_GET['id'];
$sname=$_GET['sname'];
$bname=$_GET['bname'];
$price=$_GET['price'];
$email=$_GET['email'];
$sql="INSERT INTO `cart`( `name`,  `selerid`,`bid`, `bname`, `price`) VALUES ('$sname','$email','$id','$bname','$price')";
mysqli_query($conn,$sql);
header("Location: mycart.php");




?>