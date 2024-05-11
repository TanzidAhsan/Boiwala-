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
    <?php
    $sql="SELECT COUNT(Complain) as n
    FROM complains;";
    $result = mysqli_query($conn,$sql);
    $data = $result->fetch_assoc() ;
        if($result && mysqli_num_rows($result)){
           $num= $data['n'];
            echo"  <h5>Total $num complains have been uploaded so far</h5>";
        }

    ?>
   
</body>
</html>