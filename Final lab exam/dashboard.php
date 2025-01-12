<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            text-align: center;
        }

        a {
            display: block;
            margin: 10px 0;
            padding: 10px;
            text-decoration: none;
            background: #007BFF;
            color: white;
            border-radius: 5px;
        }

        a:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Welcome, Admin!</h1>
        <a href="register.php">Register Employer</a>
        <a href="update.php">Update Employer</a>
        <a href="search_employer.php">Search Employer</a>
        <a href="logout.php">Logout</a>
    </div>
</body>

</html>