<?php
session_start();
include 'config.php';
include 'header_video.php';

if (isset($_POST['upload'])) {
  $title = $_POST['title'];
  $username = $_POST['username'];
  $description = $_POST['description'];

  $thumbnail = $_FILES['thumbnail']['name'];
  $thumbnail_type = $_FILES['thumbnail']['type'];
  $thumbnail_size = $_FILES['thumbnail']['size'];
  $thumbnail_temp_loc = $_FILES['thumbnail']['tmp_name'];
  $thumbnail_store = "thumbnail/" . $thumbnail;
  move_uploaded_file($thumbnail_temp_loc, $thumbnail_store);

  $video = $_FILES['video']['name'];
  $video_type = $_FILES['video']['type'];
  $video_size = $_FILES['video']['size'];
  $video_temp_loc = $_FILES['video']['tmp_name'];
  $video_store = "video/" . $video;
  move_uploaded_file($video_temp_loc, $video_store);

  $sql = "INSERT INTO video(title,description,thumbnail,video,username) values('$title','$description','$thumbnail','$video','$username')";
  $query = mysqli_query($conn, $sql);

  header("Location: Exitvideo.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Insert Video</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
  body {
    color: blue; 
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
<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div class="overlay"></div>
    <h1 class="text-center fw-bold"><a href="New login page.php" class="text-decoration-none text-white">Boiwala</a></h1>

<div class="container mt-5">
  <h2 class="text-center mb-4">Upload Your Video</h2>
  <div class="border p-4">
    <form action="video_insert.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Video Title" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['Email'] ?>" required>
      </div>
      <div class="form-group">
        <label for="description">Video Description</label>
        <textarea class="form-control" id="description" name="description" rows="8" placeholder="Enter Video Description" required></textarea>
      </div>
      <div class="form-group">
        <label for="thumbnail">Upload Thumbnail</label>
        <input type="file" class="form-control-file" id="thumbnail" name="thumbnail" required>
      </div>
      <div class="form-group">
        <label for="video">Upload Video</label>
        <input type="file" class="form-control-file" id="video" name="video" required>
      </div>
      <button type="submit" class="btn btn-primary" name="upload">Upload</button>
    </form>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
``
