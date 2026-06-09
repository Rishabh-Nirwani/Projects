<?php
$u=$_SESSION['uid'];
$na=$_SESSION['cname'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cms";
$n = $_COOKIE['name'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT into ascourse (uid, cname, paid) VALUES ($u, '$na', 'yes')";
$n=mysqli_query($conn,$sql);

if($n>0){
    echo"<script>alert('course registered for $na')</script>";
}

?>