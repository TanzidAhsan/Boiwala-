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
$name = $_POST["name"];
$email = $_POST["email"];
$sub = $_POST["subscription_id"];

// Prepare and bind statement
$stmt = $conn->prepare("INSERT INTO subscribers (name, email,subscription_id) VALUES (?, ?,?)");
$stmt->bind_param("sss", $name, $email,$sub);

// Execute statement
if ($stmt->execute() === TRUE) {
    echo"<script>

    alert('Make sure to make payment within 24 hours of your subscription or your subscription will be cancelled ');
    window.location.href='subscriberloginindex.php';
    
    
    
    
    </script>";

} else {
    echo "Error: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>