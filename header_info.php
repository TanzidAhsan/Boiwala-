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
    <style>
        *{
            color: white;
        }
    </style>
    
    


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
            echo"  <h4> $num Books has been uploaded</h4>";
        }

    ?>
    <div class = "move">
    <h5>Gift Points</h5>
    <h6><?php echo $num*5; echo"/50"; ?>
    <br>
    <?php 
    if( $num*5>49){
        echo"<a href='searchpage2.php'><button>Claim Reward</button></a>";
    }
    else{
        echo"<button disabled>Claim reward</button>";
    }
    
    ?>
    
    </div>
   
</body>
</html>