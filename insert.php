<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style>
        .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: -1;}


        .insert{
          height: 550px;
          width: 800px;
         background-color: paleturquoise;
         color: blanchedalmond;
         padding-left: 20px;
         padding-right: 20px;
         margin-top:10px;
        border-radius: 20px;
        box-shadow: blur(4px);
        }
        </style>
    <meta charset="utf-8">
    <title>Insert News</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  </head>
  <body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div class="overlay"></div>
    <?php include 'header2.php'; ?>
    <h1 class="text-center fw-bold"><a href="New login page.php" class="text-decoration-none text-white">Boiwala</a></h1>

    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="insert">
          <h2 style = "color:white; ">Insert Blog</h2>
          <form class="form" action="insert.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label  style = "color: blue ;">Name:</label>
              <input type="text" name="name" id="name" class="form-control" value="<?php echo $_SESSION['name'] ?>" required>
            </div>
            <div class="form-group">
              <label  style = "color: blue ;">News:</label>
              <textarea name="news" id="news" class="form-control" rows="10" placeholder="Enter Your writting" required></textarea>
            </div>
            <div class="form-group">
              <label style = "color: blue ;">Image:</label>
              <input type="file" name="image" id="image" class="form-control-file" required>
              <button type="submit" name="submit" class="btn btn-primary btn-block" style="margin-top: 10px; width:80px;">Submit</button>
            </div>
           
          </form>
        </div>
      </div>
    </div>
    </div>

    <?php
    include 'db2.php';

    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $news = $_POST['news'];
      $image = $_FILES['image']['name'];
      $image_type = $_FILES['image']['type'];
      $image_size = $_FILES['image']['size'];
      $image_tem_loc = $_FILES['image']['tmp_name'];
      $image_store = "image/".$image;

      move_uploaded_file($image_tem_loc,$image_store);

      $sql = "INSERT INTO news(name,news,image) values('$name','$news','$image')";
      $query = mysqli_query($conn,$sql);

      echo $execval;
      header("Location: Exitvideo.php");
    }
    ?>

  </body>
</html>
