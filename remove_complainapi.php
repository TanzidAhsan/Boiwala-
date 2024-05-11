<?php
include ('config.php');
$Sender=$_GET['Sender'];
$sql="DELETE FROM `complains` WHERE Sender='$Sender'";
mysqli_query($conn,$sql);
header("Location: user.php");



?>