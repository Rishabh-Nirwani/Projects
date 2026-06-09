<?php
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
$sql = "SELECT * FROM course";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Course Listings</title>
<link rel="stylesheet" href="course_detail.css">
</head>
<body>

<div class="container">
    <h1>Available Courses</h1>
    <?php if ($result->num_rows > 0): ?>
        <form method="POST" action="crsde.php">
            <?php while($row=mysqli_fetch_array($result)):
                echo'<div class="course-item">';
                echo"<input type=submit style="."background-image:url('$row[5]');background-size:cover;background-position: center;"." class='butto' name=crs value=$row[1]>"; 
                ?></h2>
            

         
        </div>
        <?php endwhile; ?>
        </form>
    <?php else: ?>
        <p>No courses found.</p>
    <?php endif; ?>
</div>
<form action=course.php>
                <input type="submit" value="back">

</body>
</html>

<?php
if(isset($_POST['n1'])){
    session_start();

$n=$_POST['course'];
$amt=0;
$conn=mysqli_connect("localhost","root","","cms");

$sq="select * from course where cid=$n";
$rs=mysqli_query($conn,$sq);
while($row=mysqli_fetch_array($rs)){

    $id="$row[0]";
    $cn="$row[1]";
    echo"<div class='info-card'> COURSE NAME:<h2 class='info-title'>$row[1]</h2>";
    echo"<br>DESCRIPTION: <p class='info-description'>$row[2] </p>";
    echo"<br>AMOUNT:<p class='info-highlight'>$row[3]</p>";
}
$_SESSION['cname']=$cn;
echo'<a href="pay.php" class="info-link">BOOK NOW</a>';
echo"</div>";


$conn->close();

}?>
