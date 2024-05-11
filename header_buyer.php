<?php
session_start(); 
include ('config.php');
$email=$_SESSION['Email'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@700&family=Heebo&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="head_design.css">
    


</head>
<body>
    <h2>Logged in as <?php  echo$_SESSION['name'] ?> </h2>
    <?php
    $sql="SELECT COUNT(name) as n
    FROM `books`
    WHERE seller_id='$email'";
    $result = mysqli_query($conn,$sql);
    $data = $result->fetch_assoc() ;
        if($result && mysqli_num_rows($result)){
           $num= $data['n'];
            
        }

    ?>
    <div class = "move">
    
    ?>
    
    </div>
   
</body>
</html>