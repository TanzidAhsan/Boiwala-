<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boiwala</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome icons -->
    <script src="https://kit.fontawesome.com/e8ad96c874.js" crossorigin="anonymous"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="seller_fst.css">
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
    </style>
</head>
<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">

    <div class="overlay"></div>
    
    <?php include 'header_seller.php'; ?>

    <h1 class="text-center fw-bold"><a href="test.php" class="text-decoration-none text-white">Boiwala</a></h1>
    
    <?php include 'header_info.php'; ?>
    
    <div class="container">
        <table class="table table-striped" style="color:white;">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Upload A Book</th>
                    <th scope="col">My Books</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                
                    <th scope="row">1</th>
                    <td><a href="upload_book.php" class="btn btn-primary"><i class="fas fa-upload me-2"></i>Upload A Book</a></td>
                    <td><a href="mybooks.php" class="btn btn-primary"><i class="fas fa-book me-2"></i>My Books</a></td>
                    <td></td>
                
                 
                
            </tbody>
        </table>
    </div>

    <?php include 'footer_seller.php'; ?>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-bpAQeU6zFZAXjPo/m6VH/iX3VRyV7a+oLOjKsBdQFsf90jvuxgWRNaBNTTn0rdRj" crossorigin="anonymous"></script>
    </body>
</html>
