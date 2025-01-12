<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    $query = "DELETE FROM employers WHERE id = '$id'";
    if ($conn->query($query) === TRUE) {
        echo "Employer deleted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employer | Job Portal</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h2>Delete Employer</h2>
    <form method="POST" id="deleteEmployerForm">
        <input type="text" name="id" placeholder="Employer ID" required>
        <button type="submit">Delete Employer</button>
    </form>

</body>

</html>