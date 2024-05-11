<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css"> <!-- Add your custom styles here -->
    <style>
        /* Your custom styles here */

        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
        }

        .container {
            margin-top: 30px;
        }

        .post-creation {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .recent-posts {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }

        .recent-posts .card {
            margin-bottom: 20px;
        }

        .card-text {
            color: #333;
            font-size: 16px;
            line-height: 1.5;
        }

        .card-text.text-muted {
            font-size: 14px;
        }

        .custom-file-label::after {
            content: "Browse";
        }
    </style>
    <title>Posts</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                session_start();
                include('config.php');

                // Check if the user is logged in using the unique identifier
                if (!isset($_SESSION['user_id'])) {
                    echo '<p class="text-center">You need to <a href="index.php">login</a> to view and create posts.</p>';
                } else {
                    // Post creation form
                    echo '<div class="post-creation">';
                    echo '<h3>Create a New Post</h3>';
                    echo '<form action="submit_post.php" method="POST" enctype="multipart/form-data">';
                    echo '<textarea name="postContent" class="form-control mb-3" placeholder="Write your post..." required></textarea>';
                    echo '<div class="custom-file">';
                    echo '<input type="file" name="postImage" class="custom-file-input" id="postImage">';
                    echo '<label class="custom-file-label" for="postImage" id="postImageLabel">Choose image...</label>';
                    echo '</div>';
                    echo '<button type="submit" name="submitPost" class="btn btn-primary mt-3">Post</button>';
                    echo '</form>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-md-12">
                <?php
                if (isset($_SESSION['user_id'])) {
                    // Display recent posts
                    echo '<div class="recent-posts">';
                    echo '<h3 class="mb-4">Recent Posts</h3>';

                    $sql = "SELECT posts.*, users.name FROM posts
                            JOIN users ON posts.user_id = users.user_id
                            ORDER BY created_at DESC";
                    $result = mysqli_query($conn, $sql);

                    if ($result && mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="card mb-3">';
                            echo '<div class="card-body">';
                            echo '<p class="card-text">' . $row["content"] . '</p>';

                            // Check if image_path is not empty and construct the complete URL
                            if (!empty($row["image_path"])) {
                                $imagePath = $row["image_path"];
                                echo '<img src="' . $imagePath . '" class="img-fluid mb-3" alt="Posted Image">';
                            }

                            echo '<p class="card-text text-muted">Posted by: ' . $row["name"] . ' on ' . $row["created_at"] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p class="text-center">No posts found.</p>';
                    }

                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    
    <script>
        // Get the file input element and its associated label
        const fileInput = document.getElementById('postImage');
        const fileInputLabel = document.getElementById('postImageLabel');
        
        // Maximum length for displaying the file name
        const maxFileNameLength = 10;
        
        // Add an event listener to the file input
        fileInput.addEventListener('change', function() {
            // Get the selected file name
            const selectedFileName = fileInput.files[0].name;
            
            // Truncate the file name if it's too long
            const displayFileName = selectedFileName.length > maxFileNameLength
                ? selectedFileName.substring(0, maxFileNameLength) + '...'
                : selectedFileName;
            
            // Update the label with the selected (possibly truncated) file name
            fileInputLabel.textContent = displayFileName;
        });
    </script>
</body>
</html>