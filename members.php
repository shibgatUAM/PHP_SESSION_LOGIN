<?php
    session_start();

    if (!isset($_SESSION['logged']) || $_SESSION['logged'] !== true) {
        header('Location: login.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Members Area</title>
</head>
<body>
    <h1>Welcome to the Members Area</h1>
    <p>This content is only accessible to logged-in users.</p>
    <a href="logout.php">Logout</a>
</body>
</html>