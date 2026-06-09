<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Course Registration Dashboard</title>
<link rel="stylesheet" href="course.css">
</head>
<body>

<div id="myNav" class="nav-bar">
  <?php $n=$_COOKIE['name'];
  echo"<h1 style='color:white;'> Welcome $n </h1>";?> <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">Home</a>
  <a href="course_detail.php">Courses</a>
  <a href="announcement.php">Announcements</a>
  <a href="feedback.php">Feedback</a>
  <a href="login.php">logout</a>


</div>

<div  class="nav-toggle-btn" onclick="openNav()" >☰</div>

<div class="dashboard-header">
  <h1>Course Registration Dashboard</h1>
</div>

<div class="container">
  <div class="content" >
    <div class="announcements">
      <h2></h2>
      <a href="announcement.php"> <h2 style="color: black;">Announcements</h2>
      <!-- Announcement form and list goes here -->
    </div>
    <div class="course">
    <a href="course_detail.php"> <h2 style="color: black;">Courses</h2> 
        </a>
        <!-- Announcemedsnt form and list goes here -->
    </div>
    <div class="course">
    <a href="feedback.php"> <h2 style="color: black;">Feedback</h2>
        </a>
        <!-- Announcemedsnt form and list goes here -->
    </div>
    <div class="course">
    <a href="registeredcourse.php"> <h2 style="color: black;">Registered Course</h2>
        </a>
        <!-- Announcemedsnt form and list goes here -->
    </div>
 
  </div>
</div>

<script>
  			//alert('LOGED IN');

function openNav() {
  document.getElementById("myNav").style.width = "250px";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0";
}
</script>

</body>
</html>

