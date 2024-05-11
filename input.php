<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOIWALA</title>
</head>
<body>
   
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
   
   if(isset($_POST['submit']))
   {

    $sname =$_POST['name'];
    $sisbn =$_POST['isbn'];
    $sprice=$_POST['price'];
    $file=$_FILES['image']['name'];
    $dst="./image/".$file;
    $dst_db="image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    $query="INSERT INTO books(isbn,name,img,price) VALUES('$sisbn','$sname','$dst_db','$sprice')";
    $result=mysqli_query($data,$query);

    if($result)
    {
    
    }
    else
    {
        echo"failed";
    }
   }
   
   ?>










    <div align="center">
        <form action="input.php" method="POST" enctype="multipart/form-data">


        <div>
          <label>Boiwala name</label>
          <input type="text" name="name">
        </div>
        <div>
          <label>Boiwala isbn</label>
          <input type="number" name="isbn">
        </div>
                <div>
          <label>Boiwala Image</label>
          <input type="File" name="image">
        </div>
         <div>
          <label>Boiwala price</label>
          <input type="number" name="price">
        </div>
        <div>
          <input type="submit" name="submit" value="upload data">
        </div>
   </form>
   </div>
</body>
</html>