<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = htmlspecialchars($_POST['id']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm_password']);
    $name = htmlspecialchars($_POST['name']);
    $user_type = htmlspecialchars($_POST['user_type']);

    if ($password !== $confirm_password) {
        $error = "Passwords do not match!";
    } else {
        $data = "ID: $id | Name: $name | User Type: $user_type | Password: $password\n";

        $file = fopen("users.txt", "a");
        if ($file) {
            fwrite($file, $data);
            fclose($file);
            $success = "Registration successful! Redirecting to login...";

            header("Refresh: 2; url=login.php");
            exit();
        } else {
            $error = "Error: Unable to save data.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <table border="1" align="center" cellpadding="10" cellspacing="0" width="400">
        <tr>
            <th colspan="2">Registration</th>
        </tr>

        <!-- Display success or error messages -->
        <?php if (!empty($success)) : ?>
            <tr>
                <td colspan="2" align="center"><?php echo $success; ?></td>
            </tr>
        <?php elseif (!empty($error)) : ?>
            <tr>
                <td colspan="2" align="center"><?php echo $error; ?></td>
            </tr>
        <?php endif; ?>

        <!-- Registration Form -->
        <tr>
            <td colspan="2">
                <form action="register.php" method="POST">
                    <table width="100%">
                        <tr>
                            <td>Id:</td>
                            <td><input type="text" name="id" required></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" required></td>
                        </tr>
                        <tr>
                            <td>Confirm Password:</td>
                            <td><input type="password" name="confirm_password" required></td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="name" required></td>
                        </tr>
                        <tr>
                            <td>User Type:</td>
                            <td>
                                <label><input type="radio" name="user_type" value="User" required> User</label>
                                <label><input type="radio" name="user_type" value="Admin"> Admin</label>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" align="center">
                                <input type="submit" value="Sign Up">
                                <a href="login.php"><button type="button">Sign In</button></a>
                            </td>
                        </tr>
                    </table>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>