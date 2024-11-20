<!DOCTYPE html>
<html>

<body>
    <form method="post">
        Length: <input type="number" name="length" required><br><br>
        Width: <input type="number" name="width" required><br><br>
        <button type="submit">Calculate</button><br>
    </form><br>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $length = $_POST['length'];
        $width = $_POST['width'];

        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "Area: $area<br><br>";
        echo "Perimeter: $perimeter<br>";
    }
    ?>
</body>

</html>