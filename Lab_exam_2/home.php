<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
$user_type = $_SESSION['user_type'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>

<body>
    <h1>Welcome, <?php echo htmlspecialchars($user_name); ?>!</h1>

    <nav>
        <ul>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="view_users.php">View Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <hr>

    <div>
        <h3>User Details:</h3>
        <p>User ID: <?php echo htmlspecialchars($user_id); ?></p>
        <p>User Type: <?php echo htmlspecialchars($user_type); ?></p>
    </div>
</body>

</html>