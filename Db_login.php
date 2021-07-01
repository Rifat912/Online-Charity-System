<?php
   include("config1.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT Name FROM signup_table WHERE Name = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $Name = $row['Name'];
      
      $count = mysqli_num_rows($result);
		
      if(isset($_SESSION['username'])){
         $_SESSION['login_user'] = $myusername;
         
         header("location: logout.php");
      }
 if($count == 1) {
	 
         $_SESSION['login_user'] = $myusername;
         
         header("location: Home1.php");
   }
   else{
   echo"<script>alert('username or password incorrect!')</script>";
   echo"<script>location.href='Design.php'</script>";
   }
      }
   
?>