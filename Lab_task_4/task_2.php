<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>

<body>
    <?php
    $email = $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];

        if (empty($email)) {
            $error = "Email cannot be empty.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format. Example: anything@example.com";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend>EMAIL</legend>
            <input type="text" name="email" value="<?php echo htmlspecialchars($email); ?>">
            <span>i</span>
            <hr>
            <span style="color: red;"><?php echo $error; ?></span>
            <br>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>