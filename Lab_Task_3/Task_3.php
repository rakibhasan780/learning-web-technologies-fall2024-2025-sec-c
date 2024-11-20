<!DOCTYPE html>
<html>

<body>
    <form method="post">
        Number: <input type="number" name="number" required>
        <button type="submit">Check</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number = $_POST['number'];
        echo $number % 2 == 0 ? "$number is Even<br>" : "$number is Odd<br>";
    }
    ?>
</body>

</html>