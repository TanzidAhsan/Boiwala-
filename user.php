<!DOCTYPE html>


<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <style>
	 .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.6);
      z-index: -1;
    }
	 
	 .table-custom {
      background-color: #B0D1D9;
    }
   </style>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-image:url(bnn.jpg);
background-repeat: no-repeat ;
background-attachment: fixed;
background-size: 100% 100% ;">
<div class="overlay"></div> 
<?php include 'header_admin.php'; ?>

<h1 class="text-center fw-bold"><a href="test.php" class="text-decoration-none text-white">Boiwala</a></h1>
 
<?php include 'header.php'; ?>
<div class="heading">
   <!--<h3>search page</h3>-->

   <head> <h1 style="text-align: center; display: block;
  font-size: 4em;
  margin-top: 0em;
  margin-bottom: 0em;
  margin-left: 1;
  margin-right: 1;
   
  <?php include 'info_user.php'; ?>
</div>
<form action="" method="post">
   <td><center><input type="submit" name="submit" value="Show users" class="btn">
      </center></td>
   <table class="table" >
   <thead>
      <tr>
         <!--<section class="search-form">-->
      <th>Name</th>    
      <th>Email</th> 
      <th>Address</th> 
      </tr>
   </thead>


<!--<section class="users" style="padding-top: 0;">

   <div class="box-container">-->
   <?php

   include('config.php');

      if(isset($_POST['submit'])){
         $search_user = $_POST['submit'];
         $select_user = mysqli_query($conn, "SELECT * FROM `users`") or die('query failed');
         if(mysqli_num_rows($select_user) > 0){
         while($fetch_user = mysqli_fetch_assoc($select_user)){

       
   ?>

   <tbody style=" background-color: #B0D1D9;">
      <tr>
            <form action="" method="post" class="box">

      <td class="name"><?php echo $fetch_user['name']; ?></td>
      <td class="name"><?php echo $fetch_user['Email']; ?></td>
      <td class="name"><?php echo $fetch_user['Address']; ?></td>

      <td><?php echo" <a  href='delete_userapi.php?name=$fetch_user[name]'><button type='button'class='btn btn-danger'>Block</button></a>" ?> </td>

      </tr>
   </tbody>
   <?php
            }
         }
      }
   
   ?>
   

</div>
</section>


</table>


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>