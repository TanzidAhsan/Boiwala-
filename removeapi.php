<?php
include ('config.php');
$id=$_GET['id'];
$sql="DELETE FROM `cart` WHERE id='$id'";
mysqli_query($conn,$sql);
header("Location: mycart.php");



?>