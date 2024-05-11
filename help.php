<?php
session_start(); 
include ('config.php');


   if(isset($_POST['submit']))
   {

    $ssender =$_POST['Sender'];
    $sagainst=$_POST['Against'];
    $scomplain = $_POST['Complain'];
     

    $query="INSERT INTO complains(Sender,Against,Complain) VALUES('$ssender','$sagainst','$scomplain')";
    $result = mysqli_query($conn,$query);
  


    if($result)
    {
     
    }
    else
    {
        echo"failed";
    }
   }





















?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>



<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;"  >

<div class="overlay"></div>
  
   























<?php include 'header_help.php'; ?>
<h1 class="text-center fw-bold"><a href="New login page.php" class="text-decoration-none text-white">Boiwala</a></h1>
<?php include 'header_blank.php'; ?>
<?php include 'header_title.php'; ?>


  <div class="row mx-0 justify-content-center">
    <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0">
      <form 
        method="POST"
        class="w-100 rounded p-4 border bg-white"
        action=""
        enctype="multipart/form-data"

      >
        <label class="d-block mb-4">
          <span class="d-block mb-2">Sender</span>
          <input
            name="Sender"
            type="text"
            class="form-control"
            value="<?php  echo$_SESSION['name']?>"
          />
        </label>
        <label class="d-block mb-4">
          <span class="d-block mb-2">Against</span>
          <input
            name="Against"
            type="text"
            class="form-control"
            placeholder="Input Complain against"
          required/>
        </label>

         
        <label class="d-block mb-4">
          <span class="d-block mb-2">What's wrong?</span>
          <textarea
            name="Complain"
            class="form-control"
            rows="3"
            placeholder="Please describe your problem"
          ></textarea>
        </label>

        <div class="mb-3">
          <button type="submit" name = "submit"class="btn btn-primary px-3">submit</button>
        </div>

        <div class="d-block text-right">
          <div class="small">
            by
            <a
              href="New login page.php"
              class="text-dark"
              target="_blank"
              >Boiwala</a
            >
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
</body>
 <?php include 'footer.php';
?>
</html>
   