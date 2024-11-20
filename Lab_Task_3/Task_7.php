<!DOCTYPE html>
<html>

<body>
    <h3>Pattern 1:</h3>
    <?php
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
    ?>

    <h3>Pattern 2:</h3>
    <?php
    $number = 1;
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$number ";
            $number++;
        }
        echo "<br>";
    }
    ?>

    <h3>Pattern 3:</h3>
    <?php
    $char = 'A';
    for ($i = 1; $i <= 3; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$char ";
            $char++;
        }
        echo "<br>";
    }
    ?>
</body>

</html>