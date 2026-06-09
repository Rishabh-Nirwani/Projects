<?php
session_start();
// Define variables for the database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$ud=$_SESSION['uid'];
// Attempt to connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch course from the database
$sql = "SELECT * from ascourse ass,course c,user u where  c.cname=ass.cname and u.uid=ass.uid and ass.uid=$ud";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Course Listings</title>
<style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 20px;
    background-color: whitesmoke;
}
.container {
    max-width: 800px;
    margin: auto;
    background-color: rgb(255, 229, 180);
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.2);
}
.course-item {
    border-bottom: 1px solid #eee;
    display:inline-flex;
    padding: 10px 0;
}
.course-item:last-child {
    border-bottom: none;
}
h1 {
    text-align: center;
    color: 2px solid black;
}
.select-container {
    width: 200px; /* Adjust based on your needs */
}

select {
    width: 100%;
    padding: 9px 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    font-family: inherit; /* This makes the font consistent with the body */
    font-size: 16px;
    cursor: pointer;
}

/* Focus state */
select:focus {
    outline: none;
    border-color: #007bff;
    box-shadow: 0 0 0 2px rgba(0, 123, 255, 0.25);
}

/* Hover state */
select:hover {
    border-color: #007bff;
}

/* Disabled state */
select:disabled {
    background-color: #e9ecef;
    cursor: not-allowed;


}
.info-card {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    padding: 20px;
    max-width: 320px;
    margin: 20px auto;
}

.info-title {
    color: #333;
    margin-top: 0;
}

.info-description {
    color: #666;
    line-height: 1.0;
}
.info-highlight {
    font-size: 18px; /* Slightly larger for emphasis */
    color: #333; /* Darker text color */
    margin: 10px 10px; /* Spacing for visual separation */
}
.info-link {
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    background-color: #007bff;
    color: #ffffff;
    padding: 10px 15px;
    border-radius: 5px;
    margin: 10px 250px;
    transition: background-color 0.3s ease;
}

.info-link:hover {
    background-color: #0056b3;
}

.highlight {
    font-weight: bold; /* Make the text bold */
    color: #d9534f; /* Use a distinct color for highlighting, here's a bootstrap's red for example */
    padding: 3px 6px; /* Optional: add some padding around the highlight */
    background-color: #f9f2f4; /* Optional: light background color for the highlight */
    border-radius: 4px; /* Optional: rounded corners for the background */
}
.butto {
  background-color: /* Green */
  border: none;
  color: white;
  padding: 70px 70px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
  
  transition: all 0.3s ease;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3); /* Adding a subtle shadow */
}

.butto:hover {
    transform: scale(1.05); /* Scale the button slightly on hover */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Increase the shadow on hover */

  background-color: #45a049; /* Darker green */
}
</style>
</head>
<body>

<div class="container">
    <h1>Registered Courses</h1>
    <?php if ($result->num_rows > 0): ?>
        <form method="POST" action="">
            <?php while($row=mysqli_fetch_array($result)):
                echo'<div class="course-item">';
                echo"<input type=Button style="."background-image:url('$row[8]');background-size:cover;background-position: center;"." class='butto' name=crs value=$row[1]>"; 
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


