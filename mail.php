<?php

$emaill=$_SESSION['email'];
$una=$_SESSION['uname'];
$na=$_SESSION['cname'];

$to = "$emaill";
$subject = "Payment Succesfull";
$message = "Dear $emaill,
 your payment has been received for COURSE $na with following payment ID <p>Payment ID: {$_POST['razorpay_payment_id']}</p> please save for future refrence ";
$headers = "From: rishabnirwani1234@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n"; // Optional, if you're sending HTML content

// Send email
if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>
