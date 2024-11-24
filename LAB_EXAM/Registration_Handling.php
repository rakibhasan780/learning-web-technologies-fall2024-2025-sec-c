<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    // Save to database (example uses a file for simplicity)
    $data = "$name,$dob,$username,$password,$email,$gender\n";
    file_put_contents('users.txt', $data, FILE_APPEND);

    // Redirect to login page
    header("Location: login.php");
    exit();
}
