 <?php
error_reporting(E_ERROR | E_PARSE);
session_start();

$mysqli = new mysqli('localhost', 'root', '', 'boi');

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $message = $_POST['message'];

    if (!empty($name) && !empty($message)) {
        $query = "INSERT INTO chat_messages (name, message) VALUES (?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('ss', $name, $message);
        $stmt->execute();
        $stmt->close();

        if (!isset($_SESSION['name'])) {
            $_SESSION['name'] = $name; // Store the user's name in the session after the first submission
        }
    }
}

// Fetch chat messages function
function fetchChatMessages() {
    global $mysqli;
    $query = "SELECT * FROM chat_messages ORDER BY id DESC LIMIT 10";
    $result = $mysqli->query($query);

    $messages = '';

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $messages .= '<div class="chat-message">';
            $messages .= '<strong>' . htmlspecialchars($row['name']) . '</strong><span class="message-time ml-2">' . $row['timestamp'] . '</span>';
            $messages .= '<p>' . htmlspecialchars($row['message']) . '</p>';
            $messages .= '</div>';
        }
    }

    return $messages;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Chat System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700&display=swap" rel="stylesheet">
    <style>
        /* ... Your existing CSS styles ... */
    </style>
</head>
<body style="background-image:url(bnn.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: 100% 100%;">
    <div class="overlay"></div>

    <?php include 'header2.php'; ?>
    <h1 class="text-center fw-bold"><a href="New login page.php" class="text-decoration-none text-white">Boiwala Chat</a></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="card chat-messages">
                    <div class="card-body" id="chat-messages">
                        <?php echo fetchChatMessages(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="chat-form">
                    <form id="chat-form" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label style="color: blue;">Name:</label>
                            <input type="text" id="name" class="form-control" value="<?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : ''; ?>" <?php echo isset($_SESSION['name']) ? 'readonly' : ''; ?> required>
                            <div class="invalid-feedback">
                                Please enter your name.
                            </div>
                        </div>
                        <div class="form-group">
                            <label style="color: blue;">Message:</label>
                            <textarea id="message" class="form-control" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a message.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        // ... Your existing JavaScript code ...
        function updateChat() {
            const chatMessages = document.getElementById('chat-messages');
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'fetch_messages.php', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    chatMessages.innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }

        // Periodically update chat messages (every 5 seconds)
        setInterval(updateChat, 5000);

        // Initial update
        updateChat();
        
        // Handle form submission
        const chatForm = document.getElementById('chat-form');
        chatForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const nameInput = document.getElementById('name');
            const messageInput = document.getElementById('message');

            const name = nameInput.value.trim();
            const message = messageInput.value.trim();

            if (name !== '' && message !== '') {
                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'submit_message.php', true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                        // Clear input fields after successful submission
                         
                        messageInput.value = '';

                        // Update chat messages immediately
                        updateChat();
                    }
                };
                xhr.send('name=' + encodeURIComponent(name) + '&message=' + encodeURIComponent(message));
            }
        });
    </script>
</body>
</html>

