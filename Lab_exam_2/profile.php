<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_name = $_SESSION['user_name'];
$user_id = $_SESSION['user_id'];
$user_type = $_SESSION['user_type'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>
    <h1>Profile of <?php echo htmlspecialchars($user_name); ?></h1>
    <p>User ID: <?php echo htmlspecialchars($user_id); ?></p>
    <p>User Type: <?php echo htmlspecialchars($user_type); ?></p>

    <a href="home.php">Back to Home</a>
</body>

</html>