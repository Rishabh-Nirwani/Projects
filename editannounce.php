<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements Page</title>
</head>

<body>
    <h1>Current Announcements</h1>
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>

<body>
    <h1>Edit Announcement</h1>
    <form method="post">
        <label for="announce_id">Announcement ID:</label><br>
        <input type="text" id="announce_id" name="announce_id"><br>
        <label for="announce">Content:</label><br>
        <textarea id="announce" name="announce"></textarea><br>
        <input type="submit" value="Submit" name="a1">
        <div class="submit-button">
    </form>

    <?php
    $servername = "localhost";
    $username = "uname";
    $password = "pass";
    $dbname = "cms";

    $conn = new mysqli("localhost", "root", "", "cms");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['a1'])) {
        session_start();
        $announce_id = $_POST['announce_id'];
        $announce = $_POST['announce'];


        if (!empty($announce_id) && !empty($announce)) {
            $sql = "UPDATE announcement SET announce='$announce' WHERE announce_id='$announce_id'";
            $r = mysqli_query($conn, $sql);
            if ($r > 0) {
                echo "<script>alert('Announcement recorded')</script>";
            } else {
                echo "<script>alert('Announcement NOT recorded')</script>";
            }
        } else {
            echo "<script>alert('Announcement cannot be empty')</script>";
        }


        $conn->close();
    }
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