<!DOCTYPE html>
<html>

<head>
	<title>User Signup Page</title>
	<link rel="stylesheet" href="signup.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<div class="signup">
	<h1>User Signup</h1>
	<form action="signup.php" method="post">
		<div class="input-box">
			<div class="input-field">
				<input type="text" placeholder="UserName" id="name" name="name" required pattern="[A-Za-z]+"title="only alphabet"><i class='bx bxs-user'></i>
			</div>
			<div class="input-field">
				<input type="email" placeholder="Email" id="email" name="email" required><i class='bx bxl-gmail' ></i>
			</div>
			<div class="input-field">
				<input type="number" placeholder="Age" id="age" name="age" min="18" required><i class='bx bxs-calendar' ></i>
			</div>
			<div class="input-field">
				<input type="password" placeholder="Password" id="password" name="password" required pattern=".{6,}"title="min 6 "><i class='bx bxs-lock-alt' ></i>
			</div>
			<div class="input-field">
				<input type="password" placeholder="Confirm Password" id="confirm_password" name="confirm_password" required><i class='bx bxs-lock-alt' ></i>
			</div>
		</div>
		<button type="submit" class="button" name="submit" value="submit">Register</button>
		<div class="tologin">
				<a href="login.php">To Login</a><br>
			</div>
	</form>
</div>
</body>

</html>


<?php

$conn=mysqli_connect("localhost","root","","cms");
if (!$conn) 
{
	die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$age = $_POST['age'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$_SESSION['email'] = "$email";

	if ($password != $confirm_password)
	{
		echo "<script>alert('Password do not match')</script>";
	}
	else 
	{
	
		$sql="insert into user (uname,pass,email,age) values ('$name','$password','$email',$age)";


		$n=mysqli_query($conn,$sql);
		if($n>0) 
		{
			echo "<script>alert('SIGN UP SUCCESSFUL')</script>";
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
}



mysqli_close($conn);
//echo"<a href='login.php'>TOLOGIN</a>";
?>

