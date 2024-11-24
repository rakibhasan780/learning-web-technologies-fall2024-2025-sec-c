<?php
// Start session
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Save form data to session (or database in a real-world scenario)
    $_SESSION['user'] = [
        'name' => $_POST['name'],
        'dob' => $_POST['dob'],
        'username' => $_POST['username'],
        'password' => $_POST['password'],
        'email' => $_POST['email'],
        'gender' => $_POST['gender'],
    ];
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <form method="post" action="">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Date of Birth:</label>
        <input type="date" name="dob" required><br>
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br>
        <button type="submit">Register</button>
    </form>
</body>

</html>