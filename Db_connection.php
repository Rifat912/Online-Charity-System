<?php
$name= "";
$password1="";
$id= 0;
$db = mysqli_connect('localhost:3309','root','','login');
if(isset($_POST['save'])){
$name = $_POST['name'];
$password1 = $_POST['password1'];
$query = "INSERT INTO user1(name,password1)VALUES('$name','$password1')";
mysqli_query($db,$query);
header('location:http://localhost/Db_display.php');
}
?>