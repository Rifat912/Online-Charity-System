
<?php
$Name= "";
$Email_Id="";
$phone="";
$Amount="";
$City="";
$Pincode="";
$State="";
$Pan="";
$id= 0;
$amt1="";
$amt1 = $_GET['Amount'];
$db = mysqli_connect('localhost:3309','root','','charity_system');
if(isset($_POST['save1'])){
$Name = $_POST['Name'];
$Email_Id = $_POST['Email_Id'];
$phone = $_POST['phone'];
$Amount = $_POST['Amount'];
$City = $_POST['City'];
$Pincode = $_POST['Pincode'];
$State = $_POST['State'];
$Pan = $_POST['Pan'];
$query = "INSERT INTO donation_details(Name,Email_id,phone,Amount,City,Pincode,State,Pan)VALUES('$Name','$Email_Id','$phone','$Amount','$City','$Pincode','$State','$Pan')";
mysqli_query($db,$query);
session_start();
		  $_SESSION['Amount'] = $Amount;
header('location: payment1.php');
}
?>