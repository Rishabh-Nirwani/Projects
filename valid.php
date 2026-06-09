<?php
if(isset($_POST['a1']))
{
	$us=$_POST['username'];
	$ps=$_POST['password'];
	
		$con=mysqli_connect("localhost","root","","cms");
		$q="SELECT * FROM admin WHERE aname='$us' and apass='$ps'";
		$rs=mysqli_query($con,$q);

		if(mysqli_num_rows($rs)===1)
			{
				if(!($us))
					{
						echo"ENTER USERNAME";
					}
				elseif(!($ps))
					{
						echo"ENTER PASSWORD";
					}
				else
					{
						header("Location: adminmain.php" );
					}
			}
		else
			{
				echo"INVALID USERNAME AND PASSWORD";
			} 
            echo"<link rel='stylesheet' href='style.css'>";    
}
?>