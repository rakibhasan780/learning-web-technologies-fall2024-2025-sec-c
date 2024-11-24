<?php
// Start session
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve session data
    $stored_user = $_SESSION['user'] ?? null;

    if ($stored_user && $stored_user['username'] === $_POST['username'] && $stored_user['password'] === $_POST['password']) {
        $_SESSION['loggedin'] = true;
        header("Location: Homepage.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
</head>

<body>
    <h1>Login</h1>
    <form method="post" action="">
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <button type="submit">Login</button>
    </form>
</body>

</html>