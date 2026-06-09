<html>
    <head>
        <style>
            body {
                background-color: whitesmoke;
            }
            p {
                font-family: "Roboto", sans-serif; 
                font-size: 30px; 
                color: 2px solid black; 
                margin-top: 40px;
                margin-left: 30px; /* Set margins (top, right, bottom, left) */
            }

        </style>
    </head>

</hmtl>
<?php

require('razorpay-php-master/config.php');

session_start();

require('razorpay-php-master/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $html = "<p>Your Payment was Successfull</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
             echo $html;
             include_once('mail.php');
             include_once('courseregistered.php');
             


}
else
{
    $html1 = "<p>Your payment failed</p>
             <p>{$error}</p>";
             echo $html1;

}
echo'<html><form action=course_detail.php><input type=submit value=back></form>';

