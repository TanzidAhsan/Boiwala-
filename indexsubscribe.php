<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Subscription Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .left{
    display: flex;
    float: left;
    margin-left: 100px;
    margin-top: 160px;
    margin-bottom: 160px;
    color: white;
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
.two{
    background: url(bg2.jpg);
    height: 400px;
    width: 250px;
    border-radius: 10%;
    background-repeat: no-repeat;
    background-size: cover;
    cursor: pointer;
    text-align: center;
}
.two h2{
    margin-top: 100px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 3rem;
}
.one h2{
    margin-top: 100px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 2.5rem;
}
.three h2{
    margin-top: 100px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 2.5rem;
}
.one{
    background: url(bg2.jpg);
    height: 300px;
    width: 200px;
    border-radius: 10%;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 45px;
    cursor: pointer;
    text-align: center;

}
.three{
    background: url(bg2.jpg);
    height: 300px;
    width: 200px;
    border-radius: 10%;
    background-repeat: no-repeat;
    background-size: cover;
    margin-top: 45px;
    cursor: pointer;
    text-align: center;

}
img{
    width: 100%;
    height: 100%;
}
.link{
    height: 50px;
    color: rgb(43, 4, 172);
}
.link2{
    height: 50px;
    color: rgb(43, 4, 172);
}
    </style>
</head>
<body style=" background: url(bc.jpg);
    background-repeat: no-repeat;
    background-size: cover;">
<?php include 'header_pathshala.php'; ?>

<h1 class="text-center fw-bold"><a href="test.php" class="text-decoration-none text-white">Boiwala</a></h1>

<div class="overlay"></div>
<div class="left">
        
         
       
        
        <div class="two">
        <a href="easy-payment.php">
                <div class="link">
                    
            </div>
        </a>
        <h2>Enable Lifetime Subscription at</h2>

        <h4> 200 bdt</h4>
        <a href="easy-payment.php">
                <div class="link2">
                    
                    
            </div>
        </a>
           
        </div>
        
     
        

        
    </div>
    <div class="container" style="font-size:2rem;font-family:sans-serif;width: 300px;
    height: 300px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
    margin-top: 230px;
    margin-left:900px;">
        <h2 style="color:white;">Subscription Form</h2>
        <form action="subscribe.php" method="post">
            <div class="form-group">
                <input type="text" placeholder="Name" class="form-control" id="name" name="name" >
            </div>
            <div class="form-group">
                <input type="email" placeholder="Email Address" class="form-control" id="email" name="email" >
            </div>
            <div class="form-group">
                <input type="text" placeholder="Please enter your card or bikash account" class="form-control" id="subscription_id" name="subscription_id" >
            </div>
            <button type="submit"style="margin-left:90px;" class="btn btn-primary">Subscribe</button>
            <div class="move" style="margin-top:20px;font-size:1.2rem;color:white;"><p class="social-text"> Have an account? <a href="subscriberloginindex.php"><button class="register" style="border:none;background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);">Log in</button></a></p>

    
            
            </div>  
           
        </form>
    
</body>



</html>
  