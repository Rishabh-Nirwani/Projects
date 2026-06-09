<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="crsde.css">
</head>
<body>
    
</body>
</html>
<?php
session_start();
$ud=$_SESSION['uid'];
if(isset($_POST['crs'])){
 $na=$_POST['crs'];

 $con=mysqli_connect("localhost","root","","cms");
 

 $sql="SELECT COUNT(*) AS row_count FROM ascourse WHERE uid=$ud and cname='$na'";
 $result = $con->query($sql);

 //$row=mysqli_fetch_array($result)
 $r=mysqli_fetch_array($result);

 if($r[0]>=1){
     echo"<script>alert('ALREADY RESGISTERED')</script>";
  

 }
 else
 {
 

 $cr=$_POST['crs'];
 $amt=0;
 $q="select * from course where cname='$cr' ";
 $rs=mysqli_query($con,$q);
 while($row=mysqli_fetch_array($rs))
 {
     echo" <div style="."background-image:url('$row[5]');"." class='butto'>"; 
     echo"<div class=name>COURSE NAME:<u>$row[1]</u></div>";
     echo"<div class=details>COURSE DESCRIPTION: $row[2]</div>";
     $_SESSION['amt'] = "$row[3]";
     $_SESSION['cname']=$row[1];
     echo"<div class=prof>PROFESOR: $row[4]</div>";
     echo"<div class=amount>AMOUNT: $row[3]</div>";

 }
 include_once('payment.php');
 echo"</div>";

 }

}
?>