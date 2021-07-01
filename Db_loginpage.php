<?php

$uname="admin";
$pwd="admin";

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT Name FROM signup_table WHERE Name = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$Name = $row['Name'];}
if(isset($_SESSION['uname'])){
   "$_SESSION['uname']
   header("location:logout.php")}
   
   else{
   i($_POST['uname']==$uname && $_POST['pwd']==$pwd){
   $-SESSION['uname']=$uname;
   echo"<script>location.href='Home1.php'</script>";
   }
   else{
   echo"<script>alert('username or password incorrect!')</script>";
   echo"<script>location.href='loginpage.php'</script>";
   }
   }
   ?>