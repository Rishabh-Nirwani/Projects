<?php
session_start();
// Define variables for the database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";

// Attempt to connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch course from the database
$sql = "SELECT * from course";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="adminmain.css">
    <link rel="stylesheet" href="registeredcourse.css">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <h1 class="logo">Dashboard</h1>
            <ul class="nav-links">
                <li><a href="checkuser.php">Users</a></li>
                <li><a href="retrivefeedback.php">Feedback</a></li>
                <li><a href="editannounce.php">Announcements</a></li>
                <li><a href="payinfo.php">Payments</a></li>
                <li><a href="courseinfo.php">Course info</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <!-- Dashboard Content Goes Here -->
        <div class="container">
            <h1>Available Courses</h1>
            <?php if ($result->num_rows > 0) : ?>
                <form method="POST" action="">
                    <?php while ($row = mysqli_fetch_array($result)) :
                        echo '<div class="course-item">';
                        echo "<input type=Button style=" . "background-image:url('$row[3]');background-size:cover;background-position: center;" . " class='butto' name=crs value=$row[1]>";
                    ?></h2>



        </div>
    <?php endwhile; ?>
    </form>
<?php else : ?>
    <p>No courses found.</p>
<?php endif; ?>
    </div>
    </div>

</body>

</html>