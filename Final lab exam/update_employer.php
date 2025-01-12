<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $employer_name = $_POST['employer_name'];
    $company_name = $_POST['company_name'];
    $contact_no = $_POST['contact_no'];

    // NULL Validation
    if (empty($employer_name) || empty($company_name) || empty($contact_no)) {
        echo "Please fill in all fields.";
    } else {
        $query = "UPDATE employers SET employer_name = '$employer_name', company_name = '$company_name', contact_no = '$contact_no' WHERE id = '$id'";
        if ($conn->query($query) === TRUE) {
            echo "Employer updated successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employer | Job Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/validation.js" defer></script>
</head>

<body>

    <h2>Update Employer</h2>
    <form method="POST" id="updateEmployerForm">
        <input type="text" name="id" placeholder="Employer ID" required>
        <input type="text" name="employer_name" placeholder="Employer Name" required>
        <input type="text" name="company_name" placeholder="Company Name" required>
        <input type="text" name="contact_no" placeholder="Contact Number" required>
        <button type="submit">Update Employer</button>
    </form>

</body>

</html>