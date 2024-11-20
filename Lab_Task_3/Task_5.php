<!DOCTYPE html>
<html>

<body>
    <h3>Odd Numbers Found Between 10 and 100:</h3>
    <?php
    for ($i = 10; $i <= 100; $i++) {
        if ($i % 2 != 0) {
            echo "$i ";
        }
    }
    ?>
</body>

</html>