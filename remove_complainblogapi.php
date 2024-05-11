<?php
include ('config.php');
$name=$_GET['name'];
$sql="DELETE FROM `news` WHERE id='$name'";
mysqli_query($conn,$sql);
header("Location: complains.php");



?>