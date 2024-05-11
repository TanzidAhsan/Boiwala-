<?php
session_start(); 
include ('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Upload</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
        .brand-text {
            color: blue !important;
        }
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }
    </style>
</head>
<body   style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;"
>

<div class="overlay"></div>
 
    <?php include 'header_seller.php'; ?>
    <h1 class="text-center fw-bold"><a href="test.php" class="text-decoration-none text-white">Boiwala</a></h1>
        <?php
        $host = "localhost";
        $user= "root";
        $password ="";
        $db ="boi";
        $data=mysqli_connect($host,$user,$password,$db);
        if($data===false)
        {
            die("connection is fail");
        }

        if(isset($_POST['submit'])) {
            $sname =$_POST['name'];
            $file=$_FILES['uploaded_image']['name'];
            $dst="./uploaded_image/".$file;
            $dst_db=$file;
            $sprice=$_POST['price'];
            $scatagory = $_POST['Catagory'];
            $seller_id = $_POST['seller_id'];

            move_uploaded_file($_FILES['uploaded_image']['tmp_name'],$dst);

            $query="INSERT INTO exchange(name,img,price,Catagory,seller_id) VALUES('$sname','$dst_db','$sprice','$scatagory','$seller_id')";
            $result=mysqli_query($data,$query);

            if($result) {
                header("location:search_exchange.php?price=$sprice");
            }
            else {
                echo "failed";
            }
        }
        ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="exchange.php" method="POST" enctype="multipart/form-data">
                    <p class="text-primary text-center mb-4">Upload a book to exchange with another one</p> 
                    <div class="form-group">
                        <label for="name" class="text-primary">Book Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="uploaded_image" class="text-primary">Book Image</label>
                        <input type="file" name="uploaded_image" class="form-control-file" required>
                    </div>
                    <div class="form-group">
                        <label for="price" class="text-primary">Book Price</label>
                        <input type="text" name="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="Catagory" class="text-primary">Book Category</label>
                        <input type="text" name="Catagory" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="seller_id" class="text-primary">Seller ID</label>
                        <input type="text" name="seller_id" class="form-control" value="<?php echo $_SESSION['Email'] ?>" required readonly>
                    </div>
                    <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary btn-block">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

