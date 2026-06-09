<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <form method="post">
        <label for="course_id">Course ID:</label><br>
        <input type="text" id="course_id" name="course_id" required><br>
        <label for="course_name">Course Name:</label><br>
        <input type="text" id="course_name" name="course_name" required><br>
        <label for="amount">Amount:</label><br>
        <input type="number" id="amount" name="amount" required><br>
        <label for="professor">Professor:</label><br>
        <input type="text" id="professor" name="professor" required><br>
        <label for="image">Image URL:</label><br>
        <input type="text" id="image" name="image" required><br><br>
        <input type="submit" value="Add Course">
    </form>
</body>
</html>

<?php

if (isset($_POST['name'])) {
	session_start();
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to database (replace with your database credentials)
    $servername = "localhost";
    $username = "uname";
    $password = "pass";
    $dbname = "cms";

    $conn = new mysqli("localhost", "root", "", "cms");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind statement
    $stmt = $conn->prepare("INSERT INTO course (cid, cname, amt, prof, img) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $course_id, $course_name, $amount, $professor, $image);

    // Set parameters and execute
    $course_id = $_POST['cid'];
    $course_name = $_POST['cname'];
    $amount = $_POST['amt'];
    $professor = $_POST['prof'];
    $image = $_POST['img'];

    $stmt->execute();

    echo "Course added successfully";

    $stmt->close();
    $conn->close();
}
}
?>