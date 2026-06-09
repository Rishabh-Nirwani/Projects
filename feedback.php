<?php
// Define variables for the database connection.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$n = $_COOKIE['name'];

// Check if the user is logged in
if (!isset($n)) {
    echo "<script>alert('LOGIN FOR FEEDBACK')</script>";
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to the database.
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection.
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['submit'])) {
        $cn = $_POST['courseName'];
        $m = trim($_POST['feedbackText']); // Remove leading and trailing spaces
        $ins = $_POST['instructorName'];

        // Check if feedback is not empty or only spaces
        if (!empty($m) && !empty($ins)) {
            $sql = "INSERT into feedback (uname, cname, instructor, msg) VALUES ('$n', '$cn', '$ins', '$m')";
            $r = mysqli_query($conn, $sql);
            if ($r > 0) {
                echo "<script>alert('Feedback recorded $n')</script>";
            } else {
                echo "<script>alert('Feedback NOT recorded $m')</script>";
            }
        } else {
            echo "<script>alert('Feedback cannot be empty')</script>";
        }
    }
    $conn->close();
}
?>

<!-- HTML code continues here -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Course Feedback</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
}
.feedback-container {
    max-width: 600px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}
h1 {
    color: #333;
    text-align: center;
}
.form-group {
    margin-bottom: 20px;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
    color: #666;
}
.form-group input[type="text"],
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
}
.form-group textarea {
    resize: vertical;
}
button[type="submit"] {
    width: 100%;
    background-color: #0056b3;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}
button[type="submit"]:hover {
    background-color: #004494;
}
</style>
</head>
<body>
<div class="feedback-container">
    <h1>Course Feedback Form</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-group">
        <?php
        $con=mysqli_connect("localhost","root","","cms");

        echo'Course Name <select name=courseName>';
        $q="SELECT * from course";
        $rs=mysqli_query($con,$q);

        while($row=mysqli_fetch_array($rs))
        {
            echo"<option value=$row[1]>$row[1]</option>";
        }    
        echo"</select> <br><br>";

       ?>
        </div>
        <div class="form-group">
            <label for="instructorName">Instructor Name:</label>
            <input type="text" id="instructorName" name="instructorName" required>
        </div>
        <div class="form-group">
            <label for="feedbackText">Your Feedback:</label>
            <textarea id="feedbackText" name="feedbackText" rows="5" required></textarea>
        </div>
        <button type="submit" name="submit">Submit Feedback</button>
    </form>
</div>
<form action=course_detail.php>
    <input type=submit value=back></form>
</body>
</html>
