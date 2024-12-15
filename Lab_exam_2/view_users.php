<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$users = [];
if (file_exists('users.txt')) {
    $file = fopen('users.txt', 'r');
    while (($line = fgets($file)) !== false) {
        $users[] = explode('|', $line);
    }
    fclose($file);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Users</title>
</head>

<body>
    <h1>List of Registered Users</h1>

    <table border="1">
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>User Type</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo htmlspecialchars(trim(explode(':', $user[0])[1])); ?></td>
                <td><?php echo htmlspecialchars(trim(explode(':', $user[1])[1])); ?></td>
                <td><?php echo htmlspecialchars(trim(explode(':', $user[2])[1])); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="home.php">Back to Home</a>
</body>

</html>