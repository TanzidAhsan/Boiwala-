
<?php
$mysqli = new mysqli('localhost', 'root', '', 'boi');

$query = "SELECT * FROM chat_messages ORDER BY id DESC LIMIT 10";
$result = $mysqli->query($query);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="chat-message">';
        echo '<strong>' . htmlspecialchars($row['name']) . '</strong><span class="message-time ml-2">' . $row['timestamp'] . '</span>';
        echo '<p>' . htmlspecialchars($row['message']) . '</p>';
        echo '</div>';
    }
}

$mysqli->close();
?>
