<?php
include ('config.php');
$name=$_GET['name'];
$sql="DELETE FROM `books` WHERE name='$name'";
mysqli_query($conn,$sql);
header("Location: admin_seller.php");



?>