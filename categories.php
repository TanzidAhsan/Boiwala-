<?php
 
 
error_reporting(E_ERROR | E_PARSE);
 
 
?>

<?php include 'headercategories.php'; ?>
<?php
session_start();
$id=$_GET['id'];

include ('config.php');
$ca;
if($id==1){
    $ca="Novel";
}
if($id==2){
    $ca="Fiction";
}
if($id==3){
    $ca = "Bangla"; 
}
if($id==4){
   $ca="Education";
}
if($id==5){
   $ca = "Story"; 
}

$sname= $_SESSION['name'];
$email=$_SESSION['Email'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title style="color: white;">Category: <?php echo $ca; ?></title>
    <style> .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: -1;
    }
    h1{
        color: white;
    }
	 </style>
</head>
<body style="background-image:url(bnn.jpg);
background-repeat: no-repeat ;
background-attachment: fixed;
background-size: 100% 100% ;">
    <div class="overlay"></div>
<div class="container mt-5">
    <h1>Category: <?php echo $ca; ?></h1>

    <div class="row mt-4">
        <?php
        $sql="SELECT * FROM `books` WHERE Catagory='$ca' ";
        $result = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($result)){

            $name=$row['name'];
            $img=$row['img'];
            $price=$row['price'];
            $id=$row['isbn'];
        ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
                <img src='uploaded_image/<?php echo $img; ?>' class="card-img-top" alt='<?php echo $name; ?>'>

                <div class="card-body">
                    <h5 class="card-title"><?php echo $name; ?></h5>
                    <p class="card-text">Price: <?php echo $price; ?></p>
                </div>

                <div class="card-footer">
                    <?php echo "<a href='cartapi.php?id=$id&&bname=$name&&sname=$sname&&email=$email&&price=$price' class='btn btn-primary btn-block'>Add to Cart</a>"; ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        </div>
        </html>
