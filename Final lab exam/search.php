<?php
include 'db.php';

if (isset($_GET['query'])) {
  $query = $_GET['query'];
  $sql = "SELECT * FROM employers WHERE employer_name LIKE '%$query%' OR company_name LIKE '%$query%'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo "<p><strong>{$row['employer_name']}</strong> - {$row['company_name']} ({$row['contact_no']})</p>";
    }
  } else {
    echo "<p>No results found</p>";
  }
}
