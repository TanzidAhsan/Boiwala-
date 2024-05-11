<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <Style> .footer {
        background-color: #f5f5f5;
        padding: 0px;
        text-align: center;
      }

      </Style>

</head>
<body>
<?php include 'header_pathshala.php'; ?>
    
    <div class="container">
        <h2>User Login</h2>
        <form action="subscriberlogin.php" method="post">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subscription_id">Subscription ID:</label>
                <input type="text" class="form-control" id="subscription_id" name="subscription_id" required>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>