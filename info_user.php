<?php
include ('config.php');
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
    <h5>You are now logged in as an admin</h5>
    <?php
    $sql="SELECT COUNT(name) as n
    FROM users;";
    $result = mysqli_query($conn,$sql);
    $data = $result->fetch_assoc() ;
        if($result && mysqli_num_rows($result)){
           $num= $data['n'];
            echo"  <h6>Total $num users here</h6>";
        }

    ?>
    <h6 class="social-text">You can now block any user from the system based on the <a href="complains.php">Complains</a> any users are sending</h6>
   
</body>
</html>