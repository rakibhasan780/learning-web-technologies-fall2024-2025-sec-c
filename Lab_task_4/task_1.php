<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>
    <?php
    $name = $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];

        // Validation Rules
        if (empty($name)) {
            $error = "Name cannot be empty.";
        } elseif (!preg_match("/^[a-zA-Z][a-zA-Z .-]*$/", $name)) {
            $error = "Name must start with a letter and contain only letters, periods, or dashes.";
        } elseif (str_word_count($name) < 2) {
            $error = "Name must contain at least two words.";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <fieldset>
            <legend>NAME</legend>
            <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
            <hr>
            <span style="color: red;"><?php echo $error; ?></span>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>

</html>