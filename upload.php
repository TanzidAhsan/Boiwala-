  <!DOCTYPE html>





<html lang="en">
    <head>
  
  <title>Upload</title>

  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="css/style.css">

    <style type="text/css">
      
      .brand-text{
         color: #blue; !important;
         text-align: right;
         
      }
      form{
        max-width: 400px;
        margin: 10px auto;
        padding: 10px;
      }
    </style>
</head>

<body>
</div>

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
    $scatagory=$_POST['catagory'];
    $file=$_FILES['image']['name'];
    $dst="./image/".$file;
    $dst_db="image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);

    $query="INSERT INTO books(isbn,name,img,price,catagory) VALUES('$sisbn','$sname','$dst_db','$sprice','$scatagory')";
    $result=mysqli_query($data,$query);
    header ("Location: Upload successful.php");

    if($result)
    {
    echo "successful";
    }
    else
    {
        echo"failed";
    }
   }
   
   ?>










    <div align="center">
        <form action="Upload successful.php" method="POST" enctype="multipart/form-data">


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
          <label>Boiwala catagory</label>
          <input type="text" name="catagory">
        </div>
        <div>
          <input type="submit" name="submit" value="upload data">
        </div>
   </form>
   </div>
</body>
</html>