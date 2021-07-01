
<?php

$Name= "";
$Email_Id="";
$phone="";
$name2="";
$pass="";
$Cpass="";
$Add1="";
$id= 0;
$db = mysqli_connect('localhost:3309','root','','charity_system');
if(isset($_POST['save1'])){
$Name = $_POST['Name'];
$Email_Id = $_POST['Email_Id'];
$phone = $_POST['phone'];
$name2 = $_POST['name2'];
$pass = $_POST['pass'];
$Cpass = $_POST['Cpass'];
$Add1 = $_POST['Add1'];
$query = "INSERT INTO Signup_table(Name,Email_id,phone,name2,pass,Cpass,Add1)VALUES('$Name','$Email_Id','$phone','$name2','$pass','$Cpass','$Add1')";
mysqli_query($db,$query);
}
?>