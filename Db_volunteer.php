<?php
$Name= "";
$Email_Id="";
$phone="";
$Position="";
$Message="";
$id= 0;
$db = mysqli_connect('localhost:3309','root','','charity_system');
if(isset($_POST['save1'])){
$Name = $_POST['Name'];
$Email_Id = $_POST['Email_Id'];
$phone = $_POST['phone'];
$Position = $_POST['Position'];
$Message = $_POST['Message'];
$query = "INSERT INTO volunteer_detail(Name,Email_id,phone,Position,Message)VALUES('$Name','$Email_Id','$phone','$Position','$Message')";
mysqli_query($db,$query);
}
?>