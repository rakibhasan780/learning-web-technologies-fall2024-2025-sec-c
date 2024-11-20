<!DOCTYPE html>
<html>

<body>
    <form method="post">
        Number 1: <input type="number" name="num1" required><br>
        Number 2: <input type="number" name="num2" required><br>
        Number 3: <input type="number" name="num3" required><br>
        <button type="submit">Find Largest</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        $largest = max($num1, $num2, $num3);
        echo "The largest number is: $largest<br>";
    }
    ?>
</body>

</html>