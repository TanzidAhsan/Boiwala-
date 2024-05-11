<?php
include ('config.php');
$name=$_GET['name'];
$sql="DELETE FROM `users` WHERE name='$name'";
mysqli_query($conn,$sql);
header("Location: user.php");



?>