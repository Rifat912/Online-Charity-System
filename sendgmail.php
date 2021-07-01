<?php
session_start();
$con=mysqli_connect('localhost:3309','root','','charity_system');
$email=$_POST['email'];
$res=mysqli_query($con,"select * from signup_table where Email_id='$email'");
$count=mysqli_num_rows($res );
if($count>0){
	$otp=rand(11111,99999);
	mysqli_query($con,"update signup_table set otp='$otp' where Email_id='$email'");
	$body="Your otp verification code is ".$otp;
	
	$_SESSION['Email_id']=$email;
$_SESSION['otp']=$otp;
$subject = "Simple Email Test via PHP";
$headers = "From: sender email";

if (mail($email, $subject, $body, $headers)) {
    echo "Email successfully sent to $email...";
	    header("Location: login_checkotp.php");
} else {
    echo "Email sending failed...";
}
}
?>