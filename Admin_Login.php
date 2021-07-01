<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location:Admin_Home.php");
}

if (isset($_POST['save1'])) {
	$email = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM signup_table WHERE name2='$email' AND pass='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['name2'];
		header("Location: Admin_Home.php");
	} else {
		echo "<script>alert('Ooops! Username or Password is Wrong.')</script>";
	}
}

?>
<html>
<head>
	<title> Login Form</title>
	<link rel="stylesheet" type="text/css" href="cssstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
	<div class="container">
		<div class="img">
			<img src="123456.jpg">
		</div>
		<div class="login-content">
			<form method="post" >
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" value="<?php echo $email; ?>" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" value="<?php echo $_Password; ?>" class="input">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" name="save1" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="javascript1.js"></script>
</body>
</html>