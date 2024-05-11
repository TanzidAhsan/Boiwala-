<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "boi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST["email"];
$subscription_id = $_POST["subscription_id"];

// Prepare and bind statement
$stmt = $conn->prepare("SELECT * FROM subscribers WHERE email = ? AND subscription_id = ?");
$stmt->bind_param("ss", $email, $subscription_id);

// Execute statement
$stmt->execute();

// Get result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo"<script>

    alert('login Successfull');
    window.location.href='display_video.php';
    
    
    
    
    </script>";

} else {
    echo "Invalid email or subscription ID.";
}

// Close statement and connection
$stmt->close();
$conn->close();
?>