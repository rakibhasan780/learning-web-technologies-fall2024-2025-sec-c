<!DOCTYPE html>
<html>

<body>
    <form method="post">
        Enter a number to search: <input type="number" name="search" required>
        <button type="submit">Search</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $search = $_POST['search'];
        $array = [3, 4, 8, 9, 11];

        if (in_array($search, $array)) {
            echo "$search is found in the array.<br>";
        } else {
            echo "$search is not found in the array.<br>";
        }
    }
    ?>
</body>

</html>