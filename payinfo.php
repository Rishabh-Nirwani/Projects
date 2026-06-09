<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="styles.css">
</head>

<style>
    body {
        background-color: whitesmoke;
        background-image: none;
    }

    .userdetails {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }

    .user-details {
        border: 1px solid #ccc;
        padding: 10px;
        font-size: 20px;
        text-align: center;
        color: 2 px solid black;

    }

    .submit-button {
        grid-column: span 3;
        margin: 20px 0;
        text-align: center;
    }

    .submit-button input {
        background-color: orange;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 20px;
        cursor: pointer;
    }

    .submit-button input:hover {
        background-color: white;
        color: orange;
    }
</style>

<?php
$servername = "localhost";
$username = "uname";
$password = "pass";
$dbname = "cms";

$conn = new mysqli("localhost", "root", "", "cms");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT ascourse.*, user.uname FROM ascourse JOIN user ON user.uid = ascourse.uid";
$result = $conn->query($sql);
?>

<section class="userdetails">
    <?php
    $headings = array("User Id", "User Name", "Course Name", "Status");
    foreach ($headings as $heading) {
        echo '<div class="user-details" style="font-size: 34px;color: black;font-weight: bolder;text-align: center;">' . $heading . '</div>';
    }
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            echo '<div class="user-details">' . $row["uid"] . '</div>';
            echo '<div class="user-details">' . $row["uname"] . '</div>';
            echo '<div class="user-details">' . $row["cname"] . '</div>';
            echo '<div class="user-details">' . $row["paid"] . '</div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

    <?php
    ?>
    <div class="submit-button">
        <form action=adminmain.php>
            <input type="submit" value=" ← BACK ">
        </form>
    </div>
    </body>

</html>