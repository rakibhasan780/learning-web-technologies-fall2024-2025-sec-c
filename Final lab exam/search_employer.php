<?php
include('db.php');

if (isset($_POST['search_query'])) {
    $search_query = $_POST['search_query'];
    $query = "SELECT * FROM employers WHERE employer_name LIKE '%$search_query%' OR company_name LIKE '%$search_query%'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Employer Name: " . $row['employer_name'] . " | Company: " . $row['company_name'] . "<br>";
        }
    } else {
        echo "No results found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Employer | Job Portal</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/ajax_search.js" defer></script>
</head>

<body>

    <h2>Search Employers</h2>
    <input type="text" id="searchInput" placeholder="Search for employers...">
    <div id="searchResults"></div>

</body>

</html>