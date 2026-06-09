<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements Page</title>
</head>

<body>
    <h1>Announcements</h1>
</body>

</html>
<?php

$servername = "localhost";
$username = "uname";
$password = "pass";
$dbname = "cms";

$conn = new mysqli("localhost", "root", "", "cms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM announcement";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div>";
        echo "<p>" . $row["announce"] . "</p>";
        echo "</div>";
    }
} else {
    echo "No announcements available.";
}
$conn->close();
?>