<?php include 'filesLogic.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Download files</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="stylefile.css">
    <!-- Background Image -->
    <style>

.overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        z-index: -1;}
        body {
            background-image: url('bnn.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        table.table {
            background-color: #CFC9F2;
        }
        .table-borderless td, .table-borderless th {
            border: none;
        }

        
    </style>
</head>
<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <?php include 'header_video.php';?>
    <h1 class="text-center fw-bold"><a href="New Login page.php" class="text-decoration-none text-white">Boiwala</a></h1>
    <div class="overlay"></div>

    <div class="container my-5">
        <table class="table table-striped table-borderless">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Filename</th>
                    <th scope="col">Size (in MB)</th>
                    <th scope="col">Downloads</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($files as $file): ?>
                <tr>
                    <td><?php echo $file['ID']; ?></td>
                    <td><?php echo $file['name']; ?></td>
                    <td><?php echo number_format(($file['size'] / (1024*1024)), 2); ?></td>
                    <td><?php echo $file['downloads']; ?></td>
                    <td><a href="downloads.php?file_id=<?php echo $file['ID'] ?>">Download</a></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>

    <?php include 'footer.php';?>

    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
