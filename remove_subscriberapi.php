<?php
include ('config.php');
$name=$_GET['name'];
$sql="DELETE FROM `subscribers` WHERE name='$name'";
mysqli_query($conn,$sql);
header("Location: subscriberlist.php");



?>