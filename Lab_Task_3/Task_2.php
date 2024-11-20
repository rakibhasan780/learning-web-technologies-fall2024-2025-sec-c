<!DOCTYPE html>
<html>

<body>
    <form method="post">
        Amount: <input type="number" name="amount" required>
        <button type="submit">Calculate VAT</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $amount = $_POST['amount'];
        $vat = ($amount * 15) / 100;
        echo "The amount after calculating VAT: $vat<br>";
    }
    ?>
</body>

</html>