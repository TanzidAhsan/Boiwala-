<?php
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'boi');

$name = $_POST['name'];
$message = $_POST['message'];

if (!empty($name) && !empty($message)) {
    $query = "INSERT INTO chat_messages (name, message) VALUES (?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('ss', $name, $message);
    $stmt->execute();
    $stmt->close();
}

$mysqli->close();
?>
