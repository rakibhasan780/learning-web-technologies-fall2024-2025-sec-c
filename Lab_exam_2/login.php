<?php
session_start();
$error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = htmlspecialchars($_POST['user_id']);
    $password = htmlspecialchars($_POST['password']);

    if (file_exists("users.txt")) {
        $file = fopen("users.txt", "r");
        $is_valid = false;

        while (($line = fgets($file)) !== false) {
            list($stored_id, $stored_name, $stored_type, $stored_password) = explode('|', $line);

            $stored_id = trim(explode(':', $stored_id)[1]);
            $stored_password = trim(explode(':', $stored_password)[1]);

            if ($user_id == $stored_id && $password == $stored_password) {
                $is_valid = true;
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = trim(explode(':', $stored_name)[1]);
                $_SESSION['user_type'] = trim(explode(':', $stored_type)[1]);
                break;
            }
        }
        fclose($file);

        if ($is_valid) {
            header("Location: home.php");
            exit();
        } else {
            $error = "Invalid User ID or Password!";
        }
    } else {
        $error = "No users are registered yet.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <table border="1" align="center" cellpadding="10" cellspacing="0" width="400">
        <tr>
            <th colspan="2">Login</th>
        </tr>

        <?php if (!empty($error)) : ?>
            <tr>
                <td colspan="2" align="center"><?php echo $error; ?></td>
            </tr>
        <?php endif; ?>

        <tr>
            <td colspan="2">
                <form action="login.php" method="POST">
                    <table width="100%">
                        <tr>
                            <td>User ID:</td>
                            <td><input type="text" name="user_id" required></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="Login">
                                <a href="register.php"><button type="button">Register</button></a>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>