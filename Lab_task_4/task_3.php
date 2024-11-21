<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date of Birth Form</title>
</head>

<body>
    <?php
    $errors = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = $_POST['day'];
        $month = $_POST['month'];
        $year = $_POST['year'];

        // Validation: Cannot be empty
        if (empty($day) || empty($month) || empty($year)) {
            $errors[] = "All fields are required.";
        }

        // Validation: Must be numbers
        if (!ctype_digit($day) || !ctype_digit($month) || !ctype_digit($year)) {
            $errors[] = "Day, month, and year must be valid numbers.";
        }

        // Validation: Check ranges
        if ((int)$day < 1 || (int)$day > 31) {
            $errors[] = "Day must be between 1 and 31.";
        }

        if ((int)$month < 1 || (int)$month > 12) {
            $errors[] = "Month must be between 1 and 12.";
        }

        if ((int)$year < 1953 || (int)$year > 1998) {
            $errors[] = "Year must be between 1953 and 1998.";
        }

        // Output validation results
        if (empty($errors)) {
            echo "<h3>Date of Birth is valid:</h3>";
            echo "<p>$day/$month/$year</p>";
        }
    }
    ?>

    <?php if (!empty($errors)): ?>
        <h3>Errors:</h3>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <!-- Structured Form -->
    <table border="1" cellspacing="0" cellpadding="5" align="center">
        <tr>
            <td>
                <form action="" method="post">
                    <table align="center">
                        <tr>
                            <td colspan="5" align="center"><b>DATE OF BIRTH</b></td>
                        </tr>
                        <tr>
                            <td align="center">dd</td>
                            <td>/</td>
                            <td align="center">mm</td>
                            <td>/</td>
                            <td align="center">yyyy</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="day" maxlength="2" required></td>
                            <td></td>
                            <td><input type="text" name="month" maxlength="2" required></td>
                            <td></td>
                            <td><input type="text" name="year" maxlength="4" required></td>
                        </tr>
                    </table>
                    <hr>
                    <div align="center">
                        <input type="submit" value="Submit">
                    </div>
                </form>
            </td>
        </tr>
    </table>
</body>

</html>