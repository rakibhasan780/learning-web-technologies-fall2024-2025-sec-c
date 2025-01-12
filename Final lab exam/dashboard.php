<?php
// Assume the user is already logged in and their session is active
// Example: session_start(); to start the session if needed

// Dashboard for admin to manage employers
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Job Portal</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h2>Admin Dashboard</h2>
    <nav>
        <a href="add_employer.php">Add Employer</a> |
        <a href="update_employer.php">Update Employer</a> |
        <a href="delete_employer.php">Delete Employer</a> |
        <a href="search_employer.php">Search Employer</a> |
        <a href="logout.php">Logout</a>
    </nav>

    <div>
        <!-- Display employer info or dashboard content here -->
    </div>

</body>

</html>