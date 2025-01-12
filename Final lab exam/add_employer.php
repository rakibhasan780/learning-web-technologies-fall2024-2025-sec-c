<?php
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $employer_name = $_POST['employer_name'];
    $company_name = $_POST['company_name'];
    $contact_no = $_POST['contact_no'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // NULL Validation
    if (empty($employer_name) || empty($company_name) || empty($contact_no) || empty($username) || empty($password)) {
        echo "Please fill in all fields.";
    } else {
        $query = "INSERT INTO employers (employer_name, company_name, contact_no, username, password) 
                  VALUES ('$employer_name', '$company_name', '$contact_no', '$username', '$password')";
        if ($conn->query($query) === TRUE) {
            // Redirect to dashboard after adding employer
            header("Location: dashboard.php");
            exit();
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
    <title>Add Employer | Job Portal</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h2>Add Employer</h2>
    <form method="POST">
        <input type="text" name="employer_name" placeholder="Employer Name" required>
        <input type="text" name="company_name" placeholder="Company Name" required>
        <input type="text" name="contact_no" placeholder="Contact Number" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Add Employer</button>
    </form>

</body>

</html>