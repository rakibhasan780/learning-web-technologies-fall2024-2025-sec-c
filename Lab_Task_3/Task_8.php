<!DOCTYPE html>
<html>

<body>
    <?php
    $array = [
        [1, 2, 3, 'A'],
        [1, 2, 'B', 'C'],
        [1, 'D', 'E', 'F']
    ];

    echo "<h3>The Array to Declare:</h3>";
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            echo $array[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "<h3>Shape 1:</h3>";
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if (is_numeric($array[$i][$j])) {
                echo $array[$i][$j] . " ";
            }
        }
        echo "<br>";
    }

    echo "<h3>Shape 2:</h3>";
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if (!is_numeric($array[$i][$j])) {
                echo $array[$i][$j] . " ";
            }
        }
        echo "<br>";
    }
    ?>
</body>

</html>