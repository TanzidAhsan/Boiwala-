<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- custom style for table -->
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
</head>

<body style="background-image:url(bnn.jpg);
background-repeat: no-repeat ;
background-attachment: fixed;
background-size: 100% 100% ;">
    <div class="overlay"></div>
    <?php include 'header_admin.php'; ?>
    <h1 class="text-center fw-bold"><a href="New login page.php" class="text-decoration-none text-white">Boiwala</a></h1>

    <div class="container">
        <div class="row">
            <table class="table table-striped table-custom">
                <thead>
                    <th>Username</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                </thead>
                <tbody>
                    <?php
                        $sub=mysqli_query($conn,"SELECT Username, phone_number, Address FROM `delivery` ;");
                        while($subrow=mysqli_fetch_array($sub)){
                            ?>
                            <tr>
                                <td><?php echo $subrow['Username']; ?></td>
                                <td><?php echo $subrow['phone_number']; ?></td>
                                <td><?php echo $subrow['Address']; ?></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
